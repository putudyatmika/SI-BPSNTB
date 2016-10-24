<?php
$setting_nama=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_settings = $conn -> query("select * from settings where setting_nama='$setting_nama'");
$r = $sql_settings ->fetch_object()
?>
<legend>Edit setting <strong><?php echo $r->setting_nama;?></strong></legend>
<form name="settingan" action="<?php echo $url;?>/master/settings/update/" method="post" id="formku" class="form-horizontal" role="form">
<div class="form-group">
<label for="setting_nama" class="col-sm-3 control-label">Nama Settingan</label>
<div class="col-sm-4">
<input type="text" name="setting_nama_fake" id="setting_nama" class="form-control" value="<?php echo $setting_nama; ?>" disabled>
</div>
</div>
<div class="form-group">
<label for="setting_nilai" class="col-sm-3 control-label">Nilai Settingan</label>
<div class="col-sm-9">
	<input type="text" name="setting_nilai" id="setting_nilai" class="form-control" value="<?php echo $r->setting_nilai; ?>">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-8"><button type="submit" id="submit_agenda" name="submit" value="simpan" class="btn btn-primary" />Submit</button>
</div>
</div>
<input type="hidden" name="setting_nama" id="setting_nama" value="<?php echo $setting_nama; ?>">
</form>
<?php $conn -> close(); ?>
