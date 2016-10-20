<?php
$db = new db();
$conn = $db -> connect();
$sql_unitkerja = $conn -> query("select * from m_unitkerja order by unit_jenis,unit_kode asc");
$cek= $sql_unitkerja -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
	<th width="5%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Kode</th>
	<th width="45%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nama Unit</th>
	<th width="30%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Parent</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Jenis</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;" colspan="3">&nbsp;</th>
	</tr>
	<?php
	while ($r = $sql_unitkerja ->fetch_object()) {
		$nama_unit=get_nama_unit($r->unit_parent);
		echo '
		<tr>
			<td>'.$r->unit_kode.'</td>
			<td>'.$r->unit_nama.'</td>
			<td>'.$nama_unit.'</td>
			<td>'.$JenisUnit[$r->unit_jenis].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->unit_kode.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->unit_kode.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->unit_kode.'" data-confirm="Apakah data ('.$r->unit_kode.') '.$r->unit_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		</tr>
		';
	}
	?>
</table>
</div>
<?php }
else {
	echo 'Data masih kosong';
}
?>