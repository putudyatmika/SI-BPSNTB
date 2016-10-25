<?php
$db = new db();
$conn = $db -> connect();
$sql_ckp_satuan = $conn -> query("select * from ckp_satuan order by ckp_sat_id asc");
$cek= $sql_ckp_satuan -> num_rows;
if ($cek > 0) {
?>
<div class="col-lg-4 col-sm-4">
<legend>Daftar satuan CKP</legend>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="success">
	<th>Kode</th>
	<th>Nama Satuan</th>
  <th colspan="2">Aksi</th>
	</tr>
	<?php
	$i=1;
	while ($r = $sql_ckp_satuan ->fetch_object()) {
		echo '
		<tr>
			<td>'.$r->ckp_sat_id.'</td>
			<td>'.$r->ckp_sat_nama.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/editsatuan/'.$r->ckp_sat_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/deletesatuan/'.$r->ckp_sat_id.'" data-confirm="Apakah data ('.$r->ckp_sat_id.') '.$r->ckp_sat_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		</tr>
		';
		$i++;
	}
	?>
</table>
</div>
</div>
<?php }
else {
	echo 'Data masih kosong';
}
?>
