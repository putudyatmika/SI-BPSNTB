<?php
	if ($_POST['submit_update']) {
		$users_passwd=$_POST['users_passwd'];
		$users_passwd_baru=$_POST['users_passwd_baru'];
		$users_passwd_baru_2=$_POST['users_passwd_baru_2'];
			if ($users_passwd == $_SESSION['sesi_passwd']) {
				if ($users_passwd_baru == $users_passwd_baru_2) {
					$hasil=mysql_query("update users set user_passwd='$users_passwd_baru' where user_id='".$_SESSION['sesi_user_id']."'");
					if ($hasil) { 
						echo "(BERHASIL) : Password berhasil di rubah 
						<br />dalam 5 detik anda akan logout dari sisetm";
						print "<meta http-equiv=\"refresh\" content=\"3; URL=".$url_bps->getSetting()."/logout\">";
						}
					else echo "(ERROR) : password tidak berhasil dirubah";
					
				}
				else {
					echo '(ERROR) : Password baru tidak sama dengan ulangi password baru';
				}
			}
			else {
				echo '(ERROR) : Password lama tidak sama';
			}
	}
	else {
		echo '(ERROR) : ada kesalahan dalam submit form';
	
	}
?>