<?php
$db_peg = new db();
$conn_peg = $db_peg -> connect();
$sql_peg = $conn_peg->query("select * from m_pegawai where pegawai_users='0' order by pegawai_nip asc");
$cek=$sql_peg -> num_rows;
if ($cek>0) {
 ?>
		<form id="formAddUser" name="formAddUser" action="<?php echo $url.'/'.$page.'/'.$act;?>/save/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="user_nip" class="col-sm-2 control-label">NIP</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
				<select class="form-control" name="user_nip" id="user_nip" style="font-family:'FontAwesome', Arial;">
					<option value="">Pilih NIP Pegawai</option>
					<?php

					while ($t = $sql_peg ->fetch_object()) {
							echo '<option value="'.$t->pegawai_nip.'">['.$t->pegawai_nip.'] '.$t->pegawai_nama.'</option>'."\n";
					}
					?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="user_id" class="col-sm-2 control-label">ID</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>


					<input type="text" name="user_id" class="form-control" placeholder="user ID" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="user_passwd" class="col-sm-2 control-label">Password</label>
			<div class="col-lg-5 col-sm-5">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="password" name="user_passwd" class="form-control" placeholder="user password" />
				 </div>
				</div>

		</div>
		<div class="form-group">
			<label for="user_passwd2" class="col-sm-2 control-label">Konfirmasi Password</label>
			<div class="col-lg-5 col-sm-5">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="password" name="user_passwd2" class="form-control" placeholder="konfirmasi password" />
				 </div>
				</div>

		</div>
		<div class="form-group">
			<label for="user_level" class="col-sm-2 control-label">Level</label>

				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="user_level" id="user_level" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Level</option>
						<?php
						foreach ($user_level as $nilai=>$lvl) {
								echo '<option value="'.$nilai.'">'.$lvl.'</option>';
						}

						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="user_status" class="col-sm-2 control-label">Status</label>

				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="user_status" id="user_status" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Status</option>
						<?php
						for ($i=0;$i<=1;$i++) {

							echo '<option value="'.$i.'">'.$status_umum[$i].'</option>';
						}

						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_save" name="submit_save" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
</form>
<?php }
else {
	echo 'Semua pegawai sudah memiliki username dan password';
	}
	$conn_peg->close();
?>
