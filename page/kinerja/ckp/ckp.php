<div class="col-lg-12 col-sm-12">
				<a href="<?php echo $url; ?>/kinerja/ckp/add/" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
				<a href="<?php echo $url; ?>/kinerja/ckp/adds/" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
				<span class="dropdown">
					<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">CKP-T
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $url; ?>/kinerja/ckp/ckpt/"><i class="fa fa-server" aria-hidden="true"></i> Pribadi</a></li>
						<?php
						if ($_SESSION['sesi_level']>9) {
						echo '
						<li class="divider"></li>
						<li><a href="'.$url.'/kinerja/ckp/ckptstaf/"><i class="fa fa-server text-danger" aria-hidden="true"></i> Staf</a></li>';
						}
						?>
					</ul>
				</span>
				<span class="dropdown">
					<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">CKP-R
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $url; ?>/kinerja/ckp/ckpr/"><i class="fa fa-server" aria-hidden="true"></i> Pribadi</a></li>
						<?php
						if ($_SESSION['sesi_level']>9) {
						echo '
						<li class="divider"></li>
						<li><a href="'.$url.'/kinerja/ckp/ckprstaf/"><i class="fa fa-server text-danger" aria-hidden="true"></i> Staf</a></li>';
						}
						?>
					</ul>
				</span>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='add') {
				include 'page/kinerja/ckp/ckp_add_form.php';
			}
			elseif ($lvl3=='adds') {
				include 'page/kinerja/ckp/ckp_adds_form.php';
			}
			elseif ($lvl3=='saveckpt') {
				include 'page/kinerja/ckp/ckp_save.php';
			}
			elseif ($lvl3=='savesckpt') {
				include 'page/kinerja/ckp/ckp_saves.php';
			}
			elseif ($lvl3=='editckpt') {
				include 'page/kinerja/ckp/ckp_edit_form.php';
			}
			elseif ($lvl3=='updateckpt') {
				include 'page/kinerja/ckp/ckp_update.php';
			}
			elseif ($lvl3=='ajukanckpt') {
				include 'page/kinerja/ckp/ckp_t_ajukan.php';
			}
			elseif ($lvl3=='ckpt') {
				include 'page/kinerja/ckp/ckp_t_list.php';
			}
			elseif ($lvl3=='ckptstaf' and $_SESSION['sesi_level']>9) {
				include 'page/kinerja/ckp/ckp_t_staf_list.php';
			}
			elseif ($lvl3=='ckptcheck') {
				include 'page/kinerja/ckp/ckp_t_check.php';
			}
			elseif ($lvl3=='deleteckpt') {
				include 'page/kinerja/ckp/ckp_t_del.php';
			}
			else {
				echo 'List CKP Bulan Berjalan';
			}
		?>
</div>
