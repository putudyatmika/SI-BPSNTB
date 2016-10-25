<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_ckp_satuan']) {

	$ckp_sat_nama = $_POST['ckp_sat_nama'];
	//$waktu_lokal=date("Y-m-d H:i:s");

	//$tipe_nama= strtoupper(strtolower($tipe_nama));
	//$tipe_kode= strtoupper(strtolower($tipe_kode));
	$ckp_sat_nama=ucwords(strtolower($ckp_sat_nama));
  $db = new db();
	$conn = $db -> connect();
	$sql_ckp_satuan= $conn -> query("select * from ckp_satuan where ckp_sat_nama='$ckp_sat_nama'");
	$cek=$sql_ckp_satuan -> num_rows;
	if ($cek>0) {
		echo 'ERROR : CKP Satuan '.$ckp_sat_nama.' sudah tersedia';
	}
	else {
		 $sql_unit_save = $conn -> query("insert into ckp_satuan(ckp_sat_nama) values('$ckp_sat_nama')");
		 if ($sql_unit_save) echo 'SUCCESS : data satuan berhasil disimpan';
		 else echo 'ERROR : data tidak bisa disimpan';
	}
	$conn -> close();
}
else {
	echo 'ERORR';
}

?>
</div>
