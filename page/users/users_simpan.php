<?php
	if ($_POST['users_submit']) {
		$users_id=$_POST['users_id'];
		$users_passwd=$_POST['users_passwd'];
		$users_passwd_2=$_POST['users_passwd_2'];
		$users_nama=$_POST['users_nama'];
		$users_level=$_POST['users_level'];
		$users_status=$_POST['users_status'];
		$waktu_lokal=date("Y-m-d H:i:s");
		if ($_SESSION['sesi_level'] != "SUPERUSER") { //bukan superuser tidak bisa add admin
			if ($users_level=="ADMIN") {
				$users_level="USER";
			}
		}
		if ($users_passwd==$users_passwd_2) {
			$hasil=mysql_query("insert into users(user_id,user_passwd,user_nama,user_level,user_tgl_add,user_status) values('$users_id','$users_passwd','$users_nama','$users_level','$waktu_lokal','$users_status')") or die(mysql_error());
			if ($hasil) echo "(BERHASIL) : user ".$users_nama." (".$users_nama.") sudah di add.";
			else echo "(ERROR) : ada kesalahan dalam menyimpan ke database";
		}
		else {
			echo "(ERROR) : password dan ulang password tidak sama. silakan gunakan tombol back untuk edit";
		}
	}
	else {
		echo '(ERROR) : ada kesalahan dalam submit form';
	
	}
?>