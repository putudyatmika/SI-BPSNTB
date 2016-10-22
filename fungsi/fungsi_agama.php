<?php
function get_agama($kodeagama) {
	$db_agama = new db();
	$conn_agama = $db_agama->connect();
	$sql_agama = $conn_agama -> query("select * from m_agama where agama_kode='".$kodeagama."'");
	$cek=$sql_agama->num_rows;
	if ($cek>0) {
	   $nama_agama='';
	   $r=$sql_agama->fetch_object();
	   $nama_agama=$r->agama_nama;
	}
	else {
	 $nama_agama='';
	}
	return $nama_agama;
	$conn_agama->close();
	}
?>
