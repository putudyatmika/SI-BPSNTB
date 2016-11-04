<?php
$bln=date('n');
$thn=date('Y');

if (isset($_POST['ckpt_list'])) {
	$bln=$_POST['ckp_t_bulan'];
	$thn=$_POST['ckp_t_tahun'];
	if ($bln=='') $bln=date('n');
	if ($thn=='') $thn=date('Y');
}

?>
<form class="form-inline" action="<?php echo $url.'/'.$page.'/'.$act;?>/ckpt/" method="post">
  <div class="form-group">
    <label for="email">Pilih Bulan</label>
		<select class="form-control" name="ckp_t_bulan" id="ckp_t_bulan" style="font-family:'FontAwesome', Arial;">
		<option value="">Pilih Bulan</option>
		<?php

		for ($i=1;$i<=12;$i++)
			{
				if ($bln==$i) $pilih='selected="selected"';
				else $pilih='';
				echo '<option value="'.$i.'" '.$pilih.'>'.$nama_bulan_panjang[$i].'</option>';
			}
		?>
		</select>
  </div>
  <div class="form-group">
		<select class="form-control" name="ckp_t_tahun" id="ckp_t_tahun" style="font-family:'FontAwesome', Arial;">
		<option value="">Pilih Tahun</option>
		<?php

		for ($i=$thn-2;$i<=$thn+1;$i++)
			{
				if ($thn==$i) $pilih='selected="selected"';
				else $pilih='';
				echo '<option value="'.$i.'" '.$pilih.'>'.$i.'</option>';
			}
		?>
		</select>
  </div>
  <button type="submit" name="ckpt_list" class="btn btn-default">Get Data</button>
</form>
<?php
//list ckp
$db = new db();
$conn = $db -> connect();
$ckp_t_pegnip=$_SESSION['sesi_user_nip'];
$sql_ckpt = $conn -> query("select * from ckp_t where ckp_t_pegnip='$ckp_t_pegnip' and ckp_t_bulan='$bln' and ckp_t_tahun='$thn'");
$cek= $sql_ckpt -> num_rows;
if ($cek > 0) {
?>
<legend>CKP-T Bulan <strong><?php echo $nama_bulan_panjang[$bln] .' '. $thn; ?></strong> </legend>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th>#</th>
	<th>Uraian Kegiatan</th>
	<th>Satuan</th>
	<th>Target</th>
	<th>Ket</th>
	<th colspan="3">Aksi</th>
	</tr>
	<?php
	$c=1;
	while ($r = $sql_ckpt ->fetch_object()) {
		$ckp_satuan=get_nama_satuan($r->ckp_t_satuan);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		echo '
		<tr>
			<td>'.$c.'</td>
			<td>'.$r->ckp_t_keg.'</td>
			<td>'.$ckp_satuan.'</td>
			<td>'.$r->ckp_t_target.'</td>
			<td>'.$r->ckp_t_ket.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->ckp_t_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->ckp_t_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->ckp_t_id.'" data-confirm="Apakah data '.$r->ckp_t_keg.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		</tr>
		';
		$c++;
	}
	?>
</table>
</div>
<?php }
else {
	echo 'Data masih kosong';
}
 ?>
