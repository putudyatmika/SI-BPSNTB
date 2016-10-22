<?php
function get_pangkat_gol($kodegol) {
	$db_gol = new db();
	$conn_gol = $db_gol->connect();
	$sql_gol = $conn_gol -> query("select * from m_gol where gol_kode='".$kodegol."'");
	$cek=$sql_gol->num_rows;
	if ($cek>0) {
	   $nama_gol='';
	   $r=$sql_gol->fetch_object();
	   $nama_gol=$r->gol_jabatan .' ('. $r->gol_nama .')';
	}
	else {
	 $nama_gol='';
	}
	return $nama_gol;
	$conn_gol->close();
	}
?>
