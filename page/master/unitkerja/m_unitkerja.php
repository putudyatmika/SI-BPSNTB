<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<a href="<?php echo $url; ?>/master/unitkerja/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Unit</a>
				<a href="<?php echo $url; ?>/master/unitkerja/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List Unit</a>
				<a href="<?php echo $url; ?>/master/unitkerja/provinsi/" class="btn btn-danger"><span class="glyphicon glyphicon-th"></span> Provinsi</a>
				<a href="<?php echo $url; ?>/master/unitkerja/kabupaten/" class="btn btn-info"><span class="glyphicon glyphicon-education"></span> Kabupaten</a>
			</div>
		</div>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='add') {
				include 'page/master/unitkerja/m_unitkerja_form.php';
			}
			elseif ($lvl3=='save') {
				include 'page/master/unitkerja/m_unitkerja_save.php';
			}
			elseif ($lvl3=='edit') {
				include 'page/master/unitkerja/m_unitkerja_form_edit.php';
			}
			elseif ($lvl3=='update') {
				include 'page/master/unitkerja/m_unitkerja_update.php';
			}
			elseif ($lvl3=='view') {
				include 'page/master/unitkerja/m_unitkerja_view.php';
			}
			elseif ($lvl3=='delete') {
				include 'page/master/unitkerja/m_unitkerja_delete.php';
			}
			elseif ($lvl3=='provinsi') {
				include 'page/master/unitkerja/m_unitkerja_provinsi.php';
			}
			elseif ($lvl3=='kabupaten') {
				include 'page/master/unitkerja/m_unitkerja_kabupaten.php';
			}
			else {
				include 'page/master/unitkerja/m_unitkerja_list.php';
			}
		?>
</div>
