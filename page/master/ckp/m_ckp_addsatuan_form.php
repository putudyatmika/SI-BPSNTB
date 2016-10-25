	<legend>Tambah Satuan CKP</legend>
		<form id="formCKPSatuan" name="formCKPSatuan" action="<?php echo $url.'/'.$page.'/'.$act;?>/savesatuan/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="ckp_sat_nama" class="col-sm-2 control-label">Nama Satuan</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="ckp_sat_nama" class="form-control" placeholder="" />
				</div>
				</div>
		</div>
	<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_ckp_satuan" name="submit_ckp_satuan" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
</form>
