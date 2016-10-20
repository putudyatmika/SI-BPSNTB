<div class="col-xs-6 col-sm-6">
<form id="formGantiPassword" action="<?php echo $url;?>/users/updatepasswd/"  method="post" role="form">
		<div class="form-group">
			<label for="users_passwd" class="control-label">Password Lama</label>
			<input type="password" name="users_passwd" class="form-control" placeholder="Password Lama" />
		</div>
		<div class="form-group">
			<label for="users_passwd_baru" class="control-label">Password Baru</label>
			<input type="password" name="users_passwd_baru" class="form-control" placeholder="Password Baru" />
		</div>
		<div class="form-group">
			<label for="users_passwd_baru_2" class="control-label">Ulangi Password Baru</label>
			<input type="password" name="users_passwd_baru_2" class="form-control" placeholder="Ulangi Password Baru" />
		</div>
		<div class="form-group">
			<button type="submit" id="submit_agenda" name="submit_update" value="update" class="btn btn-primary pull-right">Update</button>
		</div>
		
</form>
</div>