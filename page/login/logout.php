<div class="container">
	<div class="row konten">
		<div class="col-xs-12 col-sm-12 text-center">
		  <div class="alert alert-danger">Anda sudah logout dari sistem</div>
<?php
	unset($_SESSION['sesi_user_id']);
	unset($_SESSION['sesi_passwd']);
	unset($_SESSION['sesi_nama']);
	unset($_SESSION['sesi_level']);
	unset($_SESSION['sesi_user_nip']);
	unset($_SESSION['sesi_unitkode']);
	print "<meta http-equiv=\"refresh\" content=\"3; URL=".$bps_url->getSetting()."\">";
?>
		</div>
	</div>
</div>
