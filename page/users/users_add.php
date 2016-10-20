
		<form id="formAddUser" action="<?php echo $url;?>/users/simpan/"  method="post" role="form">
		
		<legend>
			Add User
		</legend>
		<div class="col-xs-6 col-sm-6">
		<div class="form-group">
			<label for="users_id" class="control-label">Username</label>
			<input type="text" name="users_id" class="form-control" placeholder="Username" />
		</div>
		<div class="form-group">
			<label for="users_passwd" class="control-label">Password</label>
			<input type="password" name="users_passwd" class="form-control" placeholder="Password" />
		</div>
		<div class="form-group">
			<label for="users_passwd_2" class="control-label">Ulangi Password</label>
			<input type="password" name="users_passwd_2" class="form-control" placeholder="Ulangi Password" />
		</div>
		<div class="form-group">
			<label for="users_nama" class="control-label">Nama</label>
			<input type="text" name="users_nama" class="form-control" placeholder="Nama" />
		</div>
		</div>
		<div class="col-xs-4 col-sm-4">
		<div class="form-group">
			<label for="users_level" class="control-label">Level</label>
			<select name="users_level" class="form-control">
				<option value="">Pilih Level</option>
				<option value="USER">USER</option>
				<?php if ($_SESSION['sesi_level']=="SUPERUSER") { ?>
				<option value="ADMIN">ADMIN</option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="users_status" class="control-label">Status</label>
			<select name="users_status" class="form-control">
				<option value="">Pilih Status</option>
				<option value="AKTIF">AKTIF</option>
				<option value="TIDAK AKTIF">TIDAK AKTIF</option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" id="submit_agenda" name="users_submit" value="simpan" class="btn btn-primary pull-right">Simpan</button>
		</div>
		</div>
		
</form>
