<?php
  $user_nip=$lvl4;
	$db = new db();
	$conn = $db -> connect();
  $sql_user=$conn-> query("select * from users where user_nip='$user_nip'");
  $cek_user=$sql_user -> num_rows;
  if ($cek_user>0) {
    $r=$sql_user ->fetch_object();
    $user_del='('.$r->user_id .') '. $r->user_nama;
    $sql_delete=$conn->query("delete from users where user_nip='$user_nip'");
    if ($sql_delete) echo '<strong>(SUCCESS)</strong> Data user : '.$user_del.' telah dihapus';
    else echo '<strong>(ERROR)</strong> Data user : '.$user_del.' tidak dihapus';

  }
  else {
    echo '<strong>(ERROR)</strong> data username tidak tersedia';
    }
  	$conn -> close();
?>
