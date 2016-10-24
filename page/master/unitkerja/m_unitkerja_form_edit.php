<?php
$unit_kode=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_unitkerja = $conn -> query("select * from m_unitkerja where unit_kode='$unit_kode'");
$cek = $sql_unitkerja -> num_rows;
if ($cek>0) {
$r = $sql_unitkerja ->fetch_object();
$parent_unit=$r->unit_parent;
?>
<legend>Edit unit kerja <strong><?php echo '['.$r->unit_kode .'] '.$r->unit_nama;?></strong></legend>
		<form id="formUnitKerja" name="formUnitKerja" action="<?php echo $url.'/'.$page.'/'.$act;?>/update/"  method="post" class="form-horizontal well" role="form">
		<fieldset>


		<div class="form-group">
			<label for="unit_kode" class="col-sm-2 control-label">Kode Unit</label>

				<div class="col-lg-3 col-sm-3">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="unit_kode" class="form-control" value="<?php echo $r->unit_kode;?>" placeholder="cth : 52720 (BPS Kota Bima)" disabled/>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_nama" class="col-sm-2 control-label">Nama Unit</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>


					<input type="text" name="unit_nama" class="form-control" value="<?php echo $r->unit_nama;?>" placeholder="nama unit" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="unit_parent" class="col-sm-2 control-label">Parent Unit</label>

				<div class="col-sm-7">
					<select class="form-control" name="unit_parent" id="unit_parent" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$db_unit = new db();
						$conn_unit = $db_unit -> connect();
						$sql_unit = $conn_unit->query("select * from m_unitkerja where SUBSTRING(unit_kode,5,1)=0 order by unit_jenis,unit_kode asc");
						$pilih='';
						while ($t = $sql_unit ->fetch_object()) {
							if ($t->unit_kode==$r->unit_parent) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$t->unit_kode.'" '.$pilih.'>['.$t->unit_kode.'] '.$t->unit_nama.'</option>'."\n";

						}
						$conn_unit->close();

						?>
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
								if ($r->unit_jenis==$i) {
									$pilih2='selected="selected"';
								}
								else {
									$pilih2='';
								}
								echo '<option value="'.$i.'" '.$pilih2.'>'.$JenisUnit[$i].'</option>';
							}
						?>
						</select>
				</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_unit" name="submit_unit" value="update" class="btn btn-primary">UPDATE</button>
			</div>
		</div>
		<input type="hidden" name="unit_kode" value="<?php echo $unit_kode;?>" />
</fieldset>
</form>
<?php }
else {
	echo 'Data unit kerja ['.$unit_kode.'] tidak tersedia';
} ?>
