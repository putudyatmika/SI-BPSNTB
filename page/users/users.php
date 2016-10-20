<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-2">
			<div class="list-group">
				<a href="#" class="list-group-item active">PENGGUNA</a>
				<?php if ($_SESSION['sesi_level']!="USER") { ?>
				<a href="<?php echo $url_bps->getSetting(); ?>/users/add" class="list-group-item">Add User</a>
                <a href="<?php echo $url_bps->getSetting(); ?>/users" class="list-group-item">List Users</a>
				<a href="<?php echo $url_bps->getSetting(); ?>/users/import" class="list-group-item">Import</a>
				<?php } ?>
				<a href="<?php echo $url_bps->getSetting(); ?>/users/gantipasswd" class="list-group-item">Ganti Password</a>
			</div>
		</div>
		<div class="col-xs-8 col-sm-10">
			<?php 
				if ($act=="add") {
					include 'page/users/users_add.php';
				}
				elseif ($act=="simpan") {
					include 'page/users/users_simpan.php';
				}
				elseif ($act=="edit") {
					include 'page/users/users_edit.php';
				}
				elseif ($act=="update") {
					include 'page/users/users_update.php';
				}
				elseif ($act=="hapus") {
					include 'page/users/users_hapus.php';
				}
				elseif ($act=="gantipasswd") {
					include 'page/users/users_form_passwd.php';
				}
				elseif ($act=="updatepasswd") {
					include 'page/users/users_update_passwd.php';
				}
				else {
					include 'page/users/users_list.php';
				}
			?>
		</div>
	</div>
</div>