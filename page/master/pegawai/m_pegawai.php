<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				
				<a href="<?php echo $url; ?>/master/pegawai/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Pegawai</a>
				<a href="<?php echo $url; ?>/master/pegawai/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List Pegawai</a>
				<a href="<?php echo $url; ?>/master/pegawai/agama/" class="btn btn-danger"><span class="glyphicon glyphicon-th"></span> Agama</a>
				<a href="<?php echo $url; ?>/master/pegawai/gol/" class="btn btn-info"><span class="glyphicon glyphicon-education"></span> Pangkat/Gol</a>
			</div>
		</div>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='add') {
				include 'page/master/pegawai/m_pegawai_form.php';
			}
			elseif ($lvl3=='save') {
				include 'page/master/pegawai/m_pegawai_save.php';
			}
			elseif ($lvl3=='edit') {
				include 'page/master/pegawai/m_pegawai_form_edit.php';
			}
			elseif ($lvl3=='update') {
				include 'page/master/pegawai/m_pegawai_update.php';
			}
			elseif ($lvl3=='view') {
				include 'page/master/pegawai/m_pegawai_view.php';
			}
			elseif ($lvl3=='delete') {
				include 'page/master/pegawai/m_pegawai_delete.php';
			}
			else {
				include 'page/master/pegawai/m_pegawai_list.php';
			}
		?>
</div>	