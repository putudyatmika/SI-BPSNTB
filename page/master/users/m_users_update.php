<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_update']) {
	
	$user_nip =$_POST['user_nip'];
	$user_id = $_POST['user_id'];
	$user_passwd = $_POST['user_passwd'];
	$user_passwd2 = $_POST['user_passwd2'];
	$user_unit = $_POST['user_unit'];
	$user_level = $_POST['user_level'];
	$user_status = $_POST['user_status'];
	$waktu_lokal=date("Y-m-d H:i:s");
		
	//$tipe_nama= strtoupper(strtolower($tipe_nama));
	//$tipe_kode= strtoupper(strtolower($tipe_kode));
	
	if ($user_passwd=='' or $user_passwd2==''){
		$ganti_passwd=1;
	}
	elseif ($user_passwd != $user_passwd2) {
		$ganti_passwd=1;
	}
	else {
		$ganti_passwd=2;
	}
	
	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_unit= $conn -> query("select * from users where user_nip='$user_nip'");
	$cek=$sql_unit -> num_rows;
	if ($cek>0) {
		 if ($ganti_passwd==1) {
			$sql_users_save = $conn -> query("update users set user_id='$user_id',user_diupdate_oleh='$created',user_unit='$user_unit',user_status='$user_status',user_diupdate_waktu='$waktu_lokal' where user_nip='$user_nip'");
		 }
		 else {
			 $sql_users_save = $conn -> query("update users set user_id='$user_id',user_diupdate_oleh='$created',user_unit='$user_unit',user_status='$user_status',user_diupdate_waktu='$waktu_lokal',user_passwd='$user_passwd' where user_nip='$user_nip'");
		 }
		 if ($sql_users_save) echo 'SUCCESS : data user berhasil diupdate';
		 else echo 'ERROR : data tidak bisa diupdate';
	}
	else {
		
		 echo 'ERROR : User '.$user_nip.' ('.$user_nama.') tidak tersedia';
	}
	$conn -> close();
}
else {
	echo 'ERORR';
}

?>
</div>