<div class="col-lg-12 col-sm-12">
<?php
  $unit_kode=$lvl4;
  if ($unit_kode==$bps_kode->getSetting()) {
    echo 'Data Unit utama tidak bisa dihapus';
  }
  else {
  $db = new db();
	$conn = $db -> connect();
	$sql_unit= $conn -> query("select * from m_unitkerja where unit_kode='$unit_kode'");
	$cek=$sql_unit -> num_rows;
	if ($cek>0) {
		$r=$sql_unit ->fetch_object();
		$parent_unit=get_nama_unit($r->unit_parent);
		$nama_unit ='('.$unit_kode.') '. $r->unit_nama .' '.$parent_unit;
		$sql_delete=$conn->query("delete from m_unitkerja where unit_kode='$unit_kode'");
		if ($sql_delete) echo '(SUCCESS) Data Unit : '.$nama_unit.' telah dihapus';
		else echo '(ERROR) Data unit : '.$nama_unit.' tidak dihapus';
	}
	else {
		 echo 'ERROR : Kode Unit '.$unit_kode.' ('.$unit_nama.') tidak ada';
	}
	$conn -> close();
}
?>
</div>
