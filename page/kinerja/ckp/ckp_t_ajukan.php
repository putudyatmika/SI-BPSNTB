<?php
$ckp_t_id=$lvl4;
$ckp_t_unitkode=$_SESSION['sesi_unitkode'];
$db = new db();
$conn = $db ->connect();
$sql_edit_ckpt = $conn -> query("select * from ckp_t where ckp_t_id='$ckp_t_id' and ckp_t_unitkode='$ckp_t_unitkode' and ckp_t_status<>'3'");
$cek=$sql_edit_ckpt->num_rows;
if ($cek>0) {
	$r=$sql_edit_ckpt->fetch_object();
	$ckp_status=$r->ckp_t_status;
	if ($ckp_status==1) { $set_ckp_status=2; $set_ckp_dok=2;}
	else { $set_ckp_status=1;$set_ckp_dok_status=1;}
	$sql_ckpt_stat=$conn->query("update ckp_t set ckp_t_status='$set_ckp_status', ckp_t_status_dok='$set_ckp_dok_status' where ckp_t_id='$ckp_t_id'");
	if ($sql_ckpt_stat) echo '(BERHASIL) Data Status Kegiatan CKP-T berhasil diubah';
	else echo 'ERROR : data status kegiatan CKP-T tidak berhasil diubah';
 }
else {
	echo 'Data CKP-T tidak tersedia atau Terkunci <strong>(Data CKP-T status Disetujui)</strong>';
}
?>
