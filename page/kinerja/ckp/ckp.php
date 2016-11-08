<div class="col-lg-12 col-sm-12">
				<a href="<?php echo $url; ?>/kinerja/ckp/add/" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
				<a href="<?php echo $url; ?>/kinerja/ckp/adds/" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
				<a href="<?php echo $url; ?>/kinerja/ckp/ckpt/" class="btn btn-info"><i class="fa fa-server" aria-hidden="true"></i> CKP-T</a>
				<a href="<?php echo $url; ?>/kinerja/ckp/ckpr/" class="btn btn-info"><i class="fa fa-server" aria-hidden="true"></i> CKP-R</a>
				<a href="<?php echo $url; ?>/kinerja/ckp/ckptstaf/" class="btn btn-info"><i class="fa fa-server" aria-hidden="true"></i> CKP-T Staf</a>
				<a href="<?php echo $url; ?>/kinerja/ckp/ckprstaf/" class="btn btn-info"><i class="fa fa-server" aria-hidden="true"></i> CKP-R Staf</a>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='add') {
				include 'page/kinerja/ckp/ckp_add_form.php';
			}
			elseif ($lvl3=='adds') {
				include 'page/kinerja/ckp/ckp_adds_form.php';
			}
			elseif ($lvl3=='save') {
				include 'page/kinerja/ckp/ckp_save.php';
			}
			elseif ($lvl3=='saves') {
				include 'page/kinerja/ckp/ckp_save.php';
			}
			elseif ($lvl3=='edit') {
				include 'page/kinerja/ckp/ckp_edit_form.php';
			}
			elseif ($lvl3=='update') {
				include 'page/kinerja/ckp/ckp_update.php';
			}
			elseif ($lvl3=='ckpt') {
				include 'page/kinerja/ckp/ckp_t_list.php';
			}
			elseif ($lvl3=='ckptstaf') {
				include 'page/kinerja/ckp/ckp_t_staf_list.php';
			}
			else {
				echo 'List CKP Bulan Berjalan';
			}
		?>
</div>
