<div class="col-lg-12 col-sm-12">
				<a href="<?php echo $url; ?>/master/ckp/addsatuan/" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Satuan</a>
				<a href="<?php echo $url; ?>/master/ckp/satuan/" class="btn btn-info"><i class="fa fa-server" aria-hidden="true"></i> List Satuan</a>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
		<?php
			if ($lvl3=='addsatuan') {
				include 'page/master/ckp/m_ckp_addsatuan_form.php';
			}
			elseif ($lvl3=='savesatuan') {
				include 'page/master/ckp/m_ckp_savesatuan.php';
			}
			elseif ($lvl3=='editsatuan') {
				include 'page/master/ckp/m_ckp_form_editsatuan.php';
			}
			elseif ($lvl3=='updatesatuan') {
				include 'page/master/ckp/m_ckp_updatesatuan.php';
			}
			elseif ($lvl3=='deletesatuan') {
				include 'page/master/ckp/m_ckp_delete.php';
			}
			elseif ($lvl3=='satuan') {
				include 'page/master/ckp/m_ckp_satuan.php';
			}
			else {
				echo 'Master Data CKP';
			}
		?>
</div>
