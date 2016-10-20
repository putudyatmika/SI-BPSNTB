<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_unit']) {
	
	$unit_kode =$_POST['unit_kode'];
	$unit_nama = $_POST['unit_nama'];
	$unit_parent = $_POST['unit_parent'];
	$unit_jenis = $_POST['unit_jenis'];
	$waktu_lokal=date("Y-m-d H:i:s");
		
	//$tipe_nama= strtoupper(strtolower($tipe_nama));
	//$tipe_kode= strtoupper(strtolower($tipe_kode));
	if ($unit_parent=='') {
		$unit_parent=NULL;
	}
	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_unit= $conn -> query("select * from m_unitkerja where unit_kode='$unit_kode'");
	$cek=$sql_unit -> num_rows;
	if ($cek>0) {
		echo 'ERROR : Kode Unit '.$unit_kode.' ('.$unit_nama.') sudah tersedia';
	}
	else {
		 if ($unit_parent==NULL) {
		 $sql_unit_save = $conn -> query("insert into m_unitkerja(unit_kode,unit_nama,unit_dibuat_oleh,unit_dibuat_waktu,unit_diupdate_oleh,unit_jenis) values('$unit_kode','$unit_nama','$created','$waktu_lokal','$created','$unit_jenis')");
		 }
		 else {
			 $sql_unit_save = $conn -> query("insert into m_unitkerja(unit_kode,unit_nama,unit_parent,unit_dibuat_oleh,unit_dibuat_waktu,unit_diupdate_oleh,unit_jenis) values('$unit_kode','$unit_nama','$unit_parent','$created','$waktu_lokal','$created','$unit_jenis')");
		 }
		 if ($sql_unit_save) echo 'SUCCESS : data unit berhasil disimpan';
		 else echo 'ERROR : data tidak bisa disimpan';
	}
	$conn -> close();
}
else {
	echo 'ERORR';
}

?>
</div>