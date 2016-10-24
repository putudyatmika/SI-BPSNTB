<?php
  $pegawai_nip=$lvl4;
	$db = new db();
	$conn = $db -> connect();
  $sql_user=$conn-> query("select * from users where user_nip='$pegawai_nip'");
  $cek_user=$sql_user -> num_rows;
  if ($cek_user>0) {
    echo '<strong>(ERROR)</strong> data pegawai nip '.$pegawai_nip.' masih ada akses sistem.<br />silakan hapus terlebih dahulu data username nya';
  }
  else {
    $sql_peg= $conn -> query("select * from m_pegawai where pegawai_nip='$pegawai_nip'");
  	$cek=$sql_peg -> num_rows;
      	if ($cek>0) {
      		$r=$sql_peg ->fetch_object();
      		$parent_unit=get_nama_unit($r->pegawai_unit);
      		$peg_nama ='<strong>('.$pegawai_nip.') '. $r->pegawai_nama .'</strong> '.$parent_unit;
      		$sql_delete=$conn->query("delete from m_pegawai where pegawai_nip='$pegawai_nip'");
      		if ($sql_delete) echo '(SUCCESS) Data Pegawai : '.$peg_nama.' telah dihapus';
      		else echo '(ERROR) Data Pegawai : '.$peg_nama.' tidak dihapus';
      	}
      	else {
      		 echo 'ERROR : NIP Pegawai '.$pegawai_nip.' tidak ada';
      	}
  }
  	$conn -> close();
?>
