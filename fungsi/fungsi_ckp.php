<?php
function get_nama_satuan($ckp_sat) {
	//(user_id) kode_jabtan
	$db_ckp = new db();
	$conn_ckp = $db_ckp->connect();
	$sql_ckp_sat = $conn_ckp -> query("select * from ckp_satuan where ckp_sat_id='".$ckp_sat."'");
	$cek=$sql_ckp_sat->num_rows;
	if ($cek>0) {
	   $ckp_sat_nama='';
	   $r=$sql_ckp_sat->fetch_object();
	   $ckp_sat_nama=$r->ckp_sat_nama;
	}
	else {
	 $ckp_sat_nama='';
	}
	return $ckp_sat_nama;
	$conn_ckp->close();
	}
?>
