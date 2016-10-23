<?php
$db = new db();
$conn = $db -> connect();
$sql_pegawai = $conn -> query("select * from m_pegawai where pegawai_prov='1' order by pegawai_nip,pegawai_unit asc");
$cek= $sql_pegawai -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th>NIP</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Unit Kerja</th>
	<th colspan="3">Aksi</th>
	</tr>
	<?php
	while ($r = $sql_pegawai ->fetch_object()) {
		$nama_unit=get_nama_unit($r->pegawai_unit);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		echo '
		<tr>
			<td>'.$r->pegawai_nip.'</td>
			<td>'.$r->pegawai_nama.'</td>
			<td>'.$JenisKelamin[$r->pegawai_jk].'</td>
			<td>'.$nama_unit.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->pegawai_nip.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->pegawai_nip.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->pegawai_nip.'" data-confirm="Apakah data ('.$r->pegawai_nip.') '.$r->pegawai_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
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
