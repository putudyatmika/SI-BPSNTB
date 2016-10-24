<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['submit_pegawai']) {

	$pegawai_nip =$_POST['pegawai_nip'];
	$pegawai_nama = $_POST['pegawai_nama'];
	$pegawai_nama_panggilan = $_POST['pegawai_nama_panggilan'];
	$pegawai_nip_lama = $_POST['pegawai_nip_lama'];
	$pegawai_agama = $_POST['pegawai_agama'];
	$pegawai_jk = $_POST['pegawai_jk'];
	$pegawai_tempat_lahir = $_POST['pegawai_tempat_lahir'];
	$pegawai_tgl_lahir = $_POST['pegawai_tgl_lahir'];
	$pegawai_tmt_cpns = $_POST['pegawai_tmt_cpns'];
	$pegawai_tmt_pns = $_POST['pegawai_tmt_pns'];
	$pegawai_gol_cpns = $_POST['pegawai_gol_cpns'];
	$pegawai_gol_pns = $_POST['pegawai_gol_pns'];
	$pegawai_unit = $_POST['pegawai_unit'];
	$pegawai_jabatan = $_POST['pegawai_jabatan'];
	$pegawai_status = $_POST['pegawai_status'];
	$tipe_unit=get_jenis_unit($pegawai_unit);
	$waktu_lokal=date("Y-m-d H:i:s");

	$pegawai_nama= strtoupper(strtolower($pegawai_nama));
	$pegawai_nama_panggilan= strtoupper(strtolower($pegawai_nama_panggilan));
	$pegawai_tempat_lahir= strtoupper(strtolower($pegawai_tempat_lahir));
	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_pegawai= $conn -> query("select * from m_pegawai where pegawai_nip='$pegawai_nip'");
	$sql_user= $conn -> query("select * from users where user_nip='$pegawai_nip'");
	$hsl_cek=$sql_user -> num_rows;
	$cek=$sql_pegawai -> num_rows;
	if ($cek>0) {
		$sql_unit_update = $conn -> query("update m_pegawai set pegawai_nama='$pegawai_nama', pegawai_nama_panggilan='$pegawai_nama_panggilan', pegawai_nip_lama='$pegawai_nip_lama', pegawai_agama='$pegawai_agama', pegawai_jk='$pegawai_jk', pegawai_tempat_lahir='$pegawai_tempat_lahir', pegawai_tgl_lahir='$pegawai_tgl_lahir', pegawai_tmt_cpns='$pegawai_tmt_cpns', pegawai_tmt_pns='$pegawai_tmt_pns', pegawai_gol_cpns='$pegawai_gol_cpns', pegawai_gol_pns='$pegawai_gol_pns', pegawai_unit='$pegawai_unit', pegawai_jabatan='$pegawai_jabatan', pegawai_diupdate_oleh='$created', pegawai_status='$pegawai_status', pegawai_prov='$tipe_unit', pegawai_users='$hsl_cek' where pegawai_nip='$pegawai_nip'");

		if ($sql_unit_update) echo 'SUCCESS : data pegawai berhasil diupdate';
		else echo 'ERROR : data tidak bisa diupdate';

	}
	else {
		echo 'ERROR : NIP '.$pegawai_nip.' ('.$pegawai_nama.') tidak tersedia';
	}
	$conn -> close();

}
else {
	echo 'ERORR';
}

?>
</div>
