<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_save']) {

	$user_nip =$_POST['user_nip'];
	$user_id = $_POST['user_id'];
	$user_passwd = $_POST['user_passwd'];
	$user_passwd2 = $_POST['user_passwd2'];
	$user_level = $_POST['user_level'];
	$user_status = $_POST['user_status'];
	$waktu_lokal=date("Y-m-d H:i:s");

	//$tipe_nama= strtoupper(strtolower($tipe_nama));
	//$tipe_kode= strtoupper(strtolower($tipe_kode));

	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_unit= $conn -> query("select * from users where user_nip='$user_nip' or user_id='$user_id'");
	$cek=$sql_unit -> num_rows;
	if ($cek>0) {
			echo 'ERROR : User '.$user_nip.' ('.$user_id.') tidak tersedia';
	}
	else {
		$sql_peg=$conn -> query("select pegawai_unit,pegawai_nama from m_pegawai where pegawai_nip='$user_nip'");
		$r=$sql_peg -> fetch_object();
		$user_unit=$r->pegawai_unit;
		$user_nama=$r->pegawai_nama;
		$sql_users_save=$conn -> query("insert into users(user_nip,user_id,user_nama,user_passwd,user_unit,user_level,user_dibuat_oleh,user_dibuat_waktu,user_diupdate_oleh,user_diupdate_waktu,user_status) values('$user_nip','$user_id','$user_nama','$user_passwd','$user_unit','$user_level','$created','$waktu_lokal','$created','$waktu_lokal','$user_status')");
		$sql_update_peg= $conn -> query("update m_pegawai set pegawai_users='1' where pegawai_nip='$user_nip'");
		if ($sql_users_save) echo 'SUCCESS : data user berhasil diupdate';
		else echo 'ERROR : data tidak bisa diupdate';
	}
	$conn -> close();
}
else {
	echo 'ERORR';
}

?>
</div>
