<?php
$ckp_t_id=$lvl4;
$ckp_t_unitkode=$_SESSION['sesi_unitkode'];
$db = new db();
$conn = $db ->connect();
$sql_edit_ckpt = $conn -> query("select * from ckp_t where ckp_t_id='$ckp_t_id' and ckp_t_unitkode='$ckp_t_unitkode' and ckp_t_edit='1'");
$cek=$sql_edit_ckpt->num_rows;
if ($cek>0) {
	$sql_del= $conn-> query("delete from ckp_t where ckp_t_id='$ckp_t_id'");
	if ($sql_del) echo 'Data kegiatan CKP-T berhasil dihapus';
	else echo 'Data kegiatan CKP-T error dihapus'; 
	}
else {
	echo 'Data CKP-T tidak tersedia atau Terkunci <strong>(Data CKP-T status Disetujui)</strong>';
}
?>
