	<legend>Tambah unit kerja baru</legend>
		<form id="formUnitKerja" name="formUnitKerja" action="<?php echo $url.'/'.$page.'/'.$act;?>/save/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="unit_kode" class="col-sm-2 control-label">Kode Unit</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="unit_kode" class="form-control" placeholder="cth : 52720 (BPS Kota Bima)" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_nama" class="col-sm-2 control-label">Nama Unit</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="unit_nama" class="form-control" placeholder="nama unit" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_parent" class="col-sm-2 control-label">Parent Unit</label>
				<div class="col-sm-6">
					<select class="form-control" name="unit_parent" id="unit_parent" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_unit = $conn->query("select * from m_unitkerja where SUBSTRING(unit_kode,5,1)=0 order by unit_jenis,unit_kode asc");
						while ($r = $sql_unit ->fetch_object()) {
							echo '<option value="'.$r->unit_kode.'">['.$r->unit_kode.'] '.$r->unit_nama.'</option>'."\n";

						}	?>
						</select>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_jenis" class="col-sm-2 control-label">Jenis Unit</label>
				<div class="col-sm-3">
					<select class="form-control" name="unit_jenis" id="unit_jenis" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								echo '<option value="'.$i.'">'.$JenisUnit[$i].'</option>';
							}
						?>
						</select>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_eselon" class="col-sm-2 control-label">Eselon</label>
				<div class="col-sm-3">
					<select class="form-control" name="unit_eselon" id="unit_eselon" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Unit Eselon</option>
						<?php
						for ($i=1;$i<=4;$i++)
							{
								echo '<option value="'.$i.'">'.$unit_eselon[$i].'</option>';
							}
						?>
						</select>
				</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_unit" name="submit_unit" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
</form>
