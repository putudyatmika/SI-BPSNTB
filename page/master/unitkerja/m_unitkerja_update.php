<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_unit']) {

	$unit_kode =$_POST['unit_kode'];
	$unit_nama = $_POST['unit_nama'];
	$unit_parent = $_POST['unit_parent'];
	$unit_jenis = $_POST['unit_jenis'];
	$unit_eselon = $_POST['unit_eselon'];
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
		 if ($unit_parent==NULL) {
			$sql_unit_save = $conn -> query("update m_unitkerja set unit_nama='$unit_nama',unit_diupdate_oleh='$created',unit_jenis='$unit_jenis', unit_eselon='$unit_eselon' where unit_kode='$unit_kode'");
		 }
		 else {
			 $sql_unit_save = $conn -> query("update m_unitkerja set unit_nama='$unit_nama',unit_diupdate_oleh='$created',unit_jenis='$unit_jenis',unit_parent='$unit_parent',unit_eselon='$unit_eselon' where unit_kode='$unit_kode'");
		 }
		 if ($sql_unit_save) echo 'SUCCESS : data unit berhasil diupdate';
		 else echo 'ERROR : data tidak bisa diupdate';
	}
	else {

		 echo 'ERROR : Kode Unit '.$unit_kode.' ('.$unit_nama.') tidak tersedia';
	}
	$conn -> close();
}
else {
	echo 'ERORR';
}

?>
</div>
