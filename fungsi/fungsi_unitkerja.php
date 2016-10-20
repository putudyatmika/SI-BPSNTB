<?php
function get_nama_unit($kode_unit) {
	$db_unit = new db();
	$conn_unit = $db_unit->connect();
	$sql_namaunit = $conn_unit -> query("select * from m_unitkerja where unit_kode='".$kode_unit."'");
	$cek=$sql_namaunit->num_rows;
	if ($cek>0) {
	   $nama_unit='';
	   $r=$sql_namaunit->fetch_object();
	   $nama_unit=$r->unit_nama;
	}
	else {
	 $nama_unit='';
	}
	return $nama_unit;
	$conn_unit->close();
	}
?>