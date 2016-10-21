<?php
$db = new db();
$conn = $db -> connect();
$sql_pegawai = $conn -> query("select * from m_pegawai order by pegawai_nip,pegawai_unit asc");
$cek= $sql_pegawai -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
	<th width="5%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">NIP</th>
	<th width="25%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nama</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Jenis Kelamin</th>
	<th width="35%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Unit</th>
	<th width="15%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Tgl Lahir</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;" colspan="3">&nbsp;</th>
	</tr>
	<?php
	while ($r = $sql_pegawai ->fetch_object()) {
		$nama_unit=get_nama_unit($r->pegawai_unit);
		echo '
		<tr>
			<td>'.$r->pegawai_nip.'</td>
			<td>'.$r->pegawai_nama.'</td>
			<td>'.$JenisKelamin[$r->pegawai_jk].'</td>
			<td>'.$nama_unit.'</td>
			<td>'.$r->pegawai_tgl_lahir.'</td>
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