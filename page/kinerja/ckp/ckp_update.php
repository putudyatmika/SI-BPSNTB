<div class="col-lg-12 col-sm-12">
<?php
if ($_POST['ckp_t_submit']) {
	$ckp_t_id =$_POST['ckp_t_id'];
	$ckp_t_keg =$_POST['ckp_t_keg'];
	$ckp_t_ket=$_POST['ckp_t_ket'];
	$ckp_t_satuan = $_POST['ckp_t_satuan'];
	$ckp_t_target = $_POST['ckp_t_target'];
	$ckp_t_bulan = $_POST['ckp_t_bulan'];
	$ckp_t_tahun = $_POST['ckp_t_tahun'];
	$ckp_t_tipe = $_POST['ckp_t_tipe'];
	$ckp_t_pegnip=$_SESSION['sesi_user_nip'];
	$waktu_lokal=date("Y-m-d H:i:s");
	$created=$_SESSION['sesi_user_nip'];
	$db = new db();
	$conn = $db -> connect();
	$sql_ckp= $conn -> query("select * from ckp_t where ckp_t_id='$ckp_t_id'");
	$cek=$sql_ckp -> num_rows;
	if ($cek>0) {
		 $sql_ckp_update = $conn -> query("update ckp_t set ckp_t_keg='$ckp_t_keg',ckp_t_satuan='$ckp_t_satuan', ckp_t_target='$ckp_t_target', ckp_t_ket='$ckp_t_ket', ckp_t_bulan='$ckp_t_bulan', ckp_t_tahun='$ckp_t_tahun', ckp_t_tipe='$ckp_t_tipe', ckp_t_status_dok='1', ckp_t_tgl_diupdate='$waktu_lokal', ckp_t_diupdate_oleh='$created' where ckp_t_id='$ckp_t_id'");
		 //$sql_ckp_kamus=$conn->query("insert into ckp_kamus(ckp_k_nama,ckp_k_unitkode,ckp_k_parent) values('$ckp_t_keg','$ckp_t_unitkode','$ckp_t_parent_kode')");
		 if ($sql_ckp_update) echo 'SUCCESS : data CKP berhasil diupdate';
		 else echo 'ERROR : data tidak bisa diupdate';
		 	$conn -> close();
	}
	else {
		echo 'ERROR : Kegiatan CKP-T tidak tersedia';
	}

}
else {
	echo 'ERORR';
}

?>
</div>
