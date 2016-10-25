<?php
$ckp_sat_id=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_ckp_satuan = $conn -> query("select * from ckp_satuan where ckp_sat_id='$ckp_sat_id'");
$cek= $sql_ckp_satuan -> num_rows;
if ($cek > 0) {
	$r=$sql_ckp_satuan->fetch_object();
?>
<legend>Tambah Satuan CKP</legend>
		<form id="formCKPSatuan" name="formCKPSatuan" action="<?php echo $url.'/'.$page.'/'.$act;?>/updatesatuan/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="unit_kode" class="col-sm-2 control-label">Nama Satuan</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="ckp_satuan" class="form-control" value="<?php echo $r->ckp_sat_nama;?>" placeholder="" />
				</div>
				</div>
		</div>
	<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_ckp_satuan" name="submit_ckp_satuan" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
<input type="hidden" value="<?php echo $ckp_sat_id; ?>" name="ckp_sat_id" />
</form>
<?php }
else {
	echo 'Data satuan CKP tidak tersedia';
} ?>
