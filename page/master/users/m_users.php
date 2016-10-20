<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				
				<a href="<?php echo $url; ?>/master/users/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah User</a>
				<a href="<?php echo $url; ?>/master/users/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List User</a>
			</div>
		</div>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='add') {
				include 'page/master/users/m_users_form.php';
			}
			elseif ($lvl3=='save') {
				include 'page/master/users/m_users_save.php';
			}
			elseif ($lvl3=='edit') {
				include 'page/master/users/m_users_form_edit.php';
			}
			elseif ($lvl3=='update') {
				include 'page/master/users/m_users_update.php';
			}
			elseif ($lvl3=='view') {
				include 'page/master/users/m_users_view.php';
			}
			elseif ($lvl3=='delete') {
				include 'page/master/users/m_users_delete.php';
			}
			else {
				include 'page/master/users/m_users_list.php';
			}
		?>
</div>	