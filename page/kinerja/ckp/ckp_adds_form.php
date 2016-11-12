	<legend>Tambah target CKP-T <strong><?php echo $_SESSION['sesi_nama'];?></strong></legend>
		<form id="formAddCKP" name="formAddCKPStaf" action="<?php echo $url.'/'.$page.'/'.$act;?>/save/"  method="post" class="form-horizontal" role="form" autocomplete="off">
		<fieldset>
			<div class="form-group">
				<label for="ckp_t_tahun" class="col-sm-2 control-label">Tahun</label>
					<div class="col-sm-4">
						<div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="ckp_t_tahun" id="ckp_t_tahun" style="font-family:'FontAwesome', Arial;">
							<option value="">Pilih Tahun</option>
							<?php
							$thn=date('Y');
							for ($i=$thn-2;$i<=$thn+1;$i++)
								{
									if ($thn==$i) $pilih='selected="selected"';
									else $pilih='';
									echo '<option value="'.$i.'" '.$pilih.'>'.$i.'</option>';
								}
							?>
							</select>
						</div>
					</div>
			</div>
			<div class="form-group">
				<label for="ckp_t_bulan" class="col-sm-2 control-label">Bulan</label>
					<div class="col-sm-4">
						<div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="ckp_t_bulan" id="ckp_t_bulan" style="font-family:'FontAwesome', Arial;">
							<option value="">Pilih Bulan</option>
							<?php
							$bln=date('n');
							$thn=date(Y);
							for ($i=1;$i<=12;$i++)
								{
									//$tgl_periode=tgl_periode_ckp($i,$thn);
									if ($bln==$i) $pilih='selected="selected"';
									else $pilih='';
									echo '<option value="'.$i.'" '.$pilih.'>'.$nama_bulan_panjang[$i].'</option>';
								}
							?>
							</select>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-12">
			<div class="table-responsive">
			<table class="table table-hover table-striped table-condensed table-bordered">
				<tr class="info">
				<th class="text-center">#</th>
				<th class="text-center">Uraian Kegiatan</th>
				<th class="text-center">Satuan</th>
				<th class="text-center">Target</th>
				<th class="text-center">Tipe</th>
				<th class="text-center">Keterangan</th>
				</tr>
				<tr class="info">
				<th class="text-center">(1)</th>
				<th class="text-center">(2)</th>
				<th class="text-center">(3)</th>
				<th class="text-center">(4)</th>
				<th class="text-center">(5)</th>
				<th class="text-center">(6)</th>
				</tr>
				<tr>
					<td>1</td>
					<td>

								<input type="text" name="ckp_t_keg" class="form-control" placeholder="uraian" />


			</div>
	</td>
	<td>			<select class="form-control" style="max-width:150px;" name="ckp_t_satuan" id="ckp_t_satuan">
						<option value="">Pilih Satuan</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_sat = $conn->query("select * from ckp_satuan order by ckp_sat_id asc");
						while ($r = $sql_sat ->fetch_object()) {
							echo '<option value="'.$r->ckp_sat_id.'">'.$r->ckp_sat_nama.'</option>'."\n";

						}
						$conn->close();
						?>
					</select>

	</td>
		<td>

				<input type="text" name="ckp_t_target" class="form-control" size="3" placeholder="target" />

	</td>
	<td>
					<select class="form-control" name="ckp_t_bulan" id="ckp_t_bulan" >
						<option value="">Pilih Tipe</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								echo '<option value="'.$i.'">'.$ckpTipe[$i].'</option>';
							}
						?>
						</select>

	</td>
	<td>

				<input type="text" name="ckp_t_ket" class="form-control" placeholder="keterangan kegiatan" />

</td>
</tr>
</table></div></div>
		<div class="form-group">
			<div class="col-sm-offset-1 col-sm-7 col-xs-offset-1 col-xs-7">
				<a id="add_row" class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Baris</a>
				<a id='delete_row' class="btn btn-danger"><i class="fa fa-minus fa-fw"></i> Baris</a>
			</div>
			<div class="col-sm-4 col-xs-4">
			  <button type="submit" id="ckp_t_submit" name="ckp_t_submit" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
</form>
