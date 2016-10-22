<?php
$db = new db();
$conn = $db -> connect();
$sql_unitkerja = $conn -> query("select * from m_unitkerja order by unit_jenis,unit_kode asc");
$cek= $sql_unitkerja -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr>
	<th>Kode</th>
	<th>Nama Unit</th>
	<th>Parent</th>
	<th>Jenis</th>
	<th colspan="3">Aksi</th>
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
