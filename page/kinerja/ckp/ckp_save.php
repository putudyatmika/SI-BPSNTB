<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['ckp_t_submit']) {

	$ckp_t_keg =$_POST['ckp_t_keg'];
	$ckp_t_ket=$_POST['ckp_t_ket'];
	$ckp_t_satuan = $_POST['ckp_t_satuan'];
	$ckp_t_target = $_POST['ckp_t_target'];
	$ckp_t_bulan = $_POST['ckp_t_bulan'];
	$ckp_t_tahun = $_POST['ckp_t_tahun'];
	$ckp_t_tipe = $_POST['ckp_t_tipe'];
	$ckp_t_pegnip=$_SESSION['sesi_user_nip'];
	$ckp_t_unitkode=$_SESSION['sesi_unitkode'];
	$ckp_t_parent_kode=get_parent_kode($ckp_t_unitkode);
	$ckp_t_edit=1;
	$ckp_t_status=1;
	//$ckp_t_tipe=1;
  $ckp_t_peg_jabatan=get_jabatan_nip($ckp_t_pegnip);
	$ckp_t_nip_atasan=get_nip_atasan($ckp_t_unitkode,$ckp_t_peg_jabatan);
	$ckp_t_nama_atasan=get_nama_nip($ckp_t_nip_atasan);
	$ckp_t_unitkode_atasan=get_unitkode_nip($ckp_t_nip_atasan);
	$waktu_lokal=date("Y-m-d H:i:s");
	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_ckp= $conn -> query("select * from ckp_t where ckp_t_keg='$ckp_t_keg' and ckp_t_pegnip='$ckp_t_pegnip' and ckp_t_bulan='$ckp_t_bulan' and ckp_t_tahun='$ckp_t_tahun'");
	$cek=$sql_ckp -> num_rows;
	if ($cek>0) {
		echo 'ERROR : kegiatan '.$ckp_t_keg.' sudah tersedia';
	}
	else {
		 $sql_ckp_save = $conn -> query("insert into ckp_t(ckp_t_keg, ckp_t_satuan, ckp_t_target, ckp_t_ket, ckp_t_bulan, ckp_t_tahun, ckp_t_peg_jabatan, ckp_t_pegnip, ckp_t_unitkode, ckp_t_nip_atasan, ckp_t_unitkode_atasan, ckp_t_nama_atasan, ckp_t_edit, ckp_t_status, ckp_t_tipe, ckp_t_tgl_dibuat, ckp_t_tgl_diupdate, ckp_t_dibuat_oleh, ckp_t_diupdate_oleh) values('$ckp_t_keg','$ckp_t_satuan','$ckp_t_target','$ckp_t_ket', '$ckp_t_bulan', '$ckp_t_tahun', '$ckp_t_peg_jabatan', '$ckp_t_pegnip', '$ckp_t_unitkode', '$ckp_t_nip_atasan', '$ckp_t_unitkode_atasan', '$ckp_t_nama_atasan','$ckp_t_edit', '$ckp_t_status','$ckp_t_tipe', '$waktu_lokal','$waktu_lokal', '$created', '$created')");
		 //$sql_ckp_kamus=$conn->query("insert into ckp_kamus(ckp_k_nama,ckp_k_unitkode,ckp_k_parent) values('$ckp_t_keg','$ckp_t_unitkode','$ckp_t_parent_kode')");
		 if ($sql_ckp_save) echo 'SUCCESS : data CKP berhasil disimpan';
		 else echo 'ERROR : data tidak bisa disimpan';
	}
	$conn -> close();

}
else {
	echo 'ERORR';
}

?>
</div>
