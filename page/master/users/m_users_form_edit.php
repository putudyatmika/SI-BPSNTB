<?php
$user_nip=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_users = $conn -> query("select * from users where user_nip='$user_nip'");
$r = $sql_users ->fetch_object();
?>
<div class="col-lg-12 col-sm-12">
		<form id="formUsers" name="formUsers" action="<?php echo $url.'/'.$page.'/'.$act;?>/update/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
			
		
		<div class="form-group">
			<label for="user_nip" class="col-sm-2 control-label">NIP</label>
				
				<div class="col-lg-3 col-sm-3">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="user_nip" class="form-control" value="<?php echo $r->user_nip;?>" disabled/>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="user_id" class="col-sm-2 control-label">ID</label>
				
				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						
					
					<input type="text" name="user_id" class="form-control" value="<?php echo $r->user_id;?>" placeholder="user ID" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="user_passwd" class="col-sm-2 control-label">Password</label>
			<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						
					
					<input type="password" name="user_passwd" class="form-control" placeholder="user password" />
				 </div>
				</div>	
				
		</div>
		<div class="form-group">
			<label for="user_passwd2" class="col-sm-2 control-label">Konfirmasi Password</label>
			<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						
					
					<input type="password" name="user_passwd2" class="form-control" placeholder="konfirmasi password" />
				 </div>
				</div>	
				
		</div>
		<div class="form-group">
			<label for="user_unit" class="col-sm-2 control-label">Unit</label>
				
				<div class="col-sm-7">
					<select class="form-control" name="user_unit" id="user_unit" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$db_unit = new db();
						$conn_unit = $db_unit -> connect();
						$sql_unit = $conn_unit->query("select * from m_unitkerja where SUBSTRING(unit_kode,5,1)=0 order by unit_jenis,unit_kode asc");
						$pilih='';
						while ($t = $sql_unit ->fetch_object()) {
							if ($t->unit_kode==$r->user_unit) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$t->unit_kode.'" '.$pilih.'>['.$t->unit_kode.'] '.$t->unit_nama.'</option>'."\n";
							
						}
						$conn_unit->close();
						
						?>
						</select>
				</div>
		</div>
		<div class="form-group">
			<label for="user_level" class="col-sm-2 control-label">Level</label>
				
				<div class="col-sm-3">
					<select class="form-control" name="user_level" id="user_level" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						foreach ($user_level as $nilai=>$lvl) {
							if ($nilai==$r->user_level) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$nilai.'" '.$pilih.'>'.$lvl.'</option>';
						}
						
						?>
						</select>
				</div>
		</div>
		<div class="form-group">
			<label for="user_status" class="col-sm-2 control-label">Status</label>
				
				<div class="col-sm-3">
					<select class="form-control" name="user_status" id="user_status" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=0;$i<=1;$i++) {
							if ($i==$r->user_status) $pilih2='selected="selected"';
							else $pilih2='';
							echo '<option value="'.$i.'" '.$pilih2.'>'.$status_umum[$i].'</option>';
						}
						
						?>
						</select>
				</div>
		</div>			
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_update" name="submit_update" value="update" class="btn btn-primary">UPDATE</button>
			</div>
		</div>
		<input type="hidden" name="user_nip" value="<?php echo $user_nip;?>" />
</fieldset>
</form>
</div>