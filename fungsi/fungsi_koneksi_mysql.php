<?php
function koneksi_db() {
    $koneksi=mysql_connect(db_host,db_user,db_pass) or die("koneksi ke database MySQL error");
    mysql_select_db(db_name) or die("Database error");
  return $koneksi;
}
function tutup_db($koneksi){
	mysql_close($koneksi);
}
?>