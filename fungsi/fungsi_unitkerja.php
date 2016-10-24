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

function get_jenis_unit($kode_unit) {
$db_unit = new db();
$conn_unit = $db_unit->connect();
$sql_namaunit = $conn_unit -> query("select * from m_unitkerja where unit_kode='".$kode_unit."'");
$cek=$sql_namaunit->num_rows;
if ($cek>0) {
$jenis_unit='';
$r=$sql_namaunit->fetch_object();
$jenis_unit=$r->unit_jenis;
}
else {
$jenis_unit='';
}
return $jenis_unit;
$conn_unit->close();
}

function get_parent_unit($kode_unit) {
	//$kode_parent=substr($kode_unit,0,-1).'0';
	$db_unit = new db();
	$conn_unit = $db_unit->connect();
	$sql_namaunit = $conn_unit -> query("select * from m_unitkerja where unit_kode='".$kode_unit."'");
	$cek=$sql_namaunit->num_rows;
	if ($cek>0) {
			$nama_parent='';
		  $r=$sql_namaunit->fetch_object();
			$kode_parent=$r->unit_parent;
			$nama_parent=get_nama_unit($kode_parent);
	}
	else {
	 $nama_parent='';
	}
	return $nama_parent;
	$conn_unit->close();
	}
?>
