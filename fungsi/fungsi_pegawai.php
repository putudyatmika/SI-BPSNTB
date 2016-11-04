<?php
function get_jabatan_nip($pegawai_nip) {
	//(user_id) kode_jabtan
	$db_users = new db();
	$conn_users = $db_users->connect();
	$sql_users = $conn_users -> query("select * from m_pegawai where pegawai_nip='".$pegawai_nip."'");
	$cek=$sql_users->num_rows;
	if ($cek>0) {
	   $peg_jab='';
	   $r=$sql_users->fetch_object();
	   $peg_jab=$r->pegawai_jabatan;
	}
	else {
	 $peg_jab='';
	}
	return $peg_jab;
	$conn_users->close();
	}
?>
