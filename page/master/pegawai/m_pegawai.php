<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<a href="<?php echo $url; ?>/master/pegawai/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
				<a href="<?php echo $url; ?>/master/pegawai/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> Semua</a>
				<a href="<?php echo $url; ?>/master/pegawai/provinsi/" class="btn btn-danger"><span class="glyphicon glyphicon-th"></span> Provinsi</a>
				<a href="<?php echo $url; ?>/master/pegawai/kabupaten/" class="btn btn-info"><span class="glyphicon glyphicon-education"></span> Kabupaten</a>
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
			elseif ($lvl3=='provinsi') {
				include 'page/master/pegawai/m_pegawai_provinsi.php';
			}
			elseif ($lvl3=='kabupaten') {
				include 'page/master/pegawai/m_pegawai_kabupaten.php';
			}
			else {
				include 'page/master/pegawai/m_pegawai_list.php';
			}
		?>
</div>
