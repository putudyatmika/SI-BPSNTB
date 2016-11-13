<div class="col-lg-12 col-sm-12">
<?php
if (isset($_POST['check'])== '') {
	echo "Data kegiatan belum ada dicentang";
}
else {
	//$ckp_t_item=implode(',', $_POST['check']);
	$db = new db();
	$conn = $db ->connect();
	$i=1;
	echo '
	<legend>CKP-T <strong>'.$_SESSION['sesi_nama'].'</strong></legend>
	<div class="table-responsive">
	<table class="table table-hover table-striped table-condensed table-bordered">
		<tr class="info">
		<th class="text-center">#</th>
		<th class="text-center">CKP-T ID</th>
		<th class="text-center">Kegiatan</th>
		<th class="text-center">Status</th>
		</tr>
		<tr class="info">
		<th class="text-center">(1)</th>
		<th class="text-center">(2)</th>
		<th class="text-center">(3)</th>
		<th class="text-center">(4)</th>
		</tr>
	';
	foreach ($_POST['check'] as $key => $ckp_t_item) {
		$ckp_t_item = $_POST['check'][$key];
		$ckp_t_item=explode(';',$ckp_t_item);
		$ckp_t_id=$ckp_t_item[0];
		$ckp_t_keg=$ckp_t_item[1];
		if ($_POST['ckpt_status']=='draft') {
			$sql_ajukan= $conn->query("update ckp_t set ckp_t_status='1',ckp_t_edit='1', ckp_t_status_dok='1' where ckp_t_id='$ckp_t_id'");
		 	if ($sql_ajukan)	echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Draft <strong>(berhasil)</strong></td></tr>';
		 	else echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Draft <strong>(error)</strong></td></tr>';
		}
		elseif ($_POST['ckpt_status']=='ajukan') {
			$sql_ajukan= $conn->query("update ckp_t set ckp_t_status='2',ckp_t_edit='2', ckp_t_status_dok='2' where ckp_t_id='$ckp_t_id'");
		 	if ($sql_ajukan)	echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Diajukan <strong>(berhasil)</strong></td></tr>';
		 	else echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Diajukan <strong>(error)</strong></td></tr>';
		}
		elseif ($_POST['ckpt_status']=='delete') {
			$sql_ajukan= $conn->query("delete from ckp_t where ckp_t_id='$ckp_t_id'");
		 	if ($sql_ajukan)	echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Dihapus <strong>(berhasil)</strong></td></tr>';
		 	else echo '<tr><td>'.$i. '</td><td>'. $ckp_t_id .'</td><td>'. $ckp_t_keg .'</td><td>Dihapus <strong>(error)</strong></td></tr>';
		}
		$i++;
	}
	echo '</table></div>';

}
?>
</div>
