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
<legend>CKP-T Bulan <strong><?php echo $nama_bulan_panjang[$bln] .' '. $thn .' - '. $_SESSION['sesi_nama']; ?></strong> </legend>
<form name="formCKPCheck" id="formCKPCheck" action="<?php echo $url.'/'.$page.'/'.$act;?>/ckptcheck/" method="post">
	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Menu
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Draft</a></li>
	    <li><a href="#"><i class="fa fa-check text-primary" aria-hidden="true"></i> Diajukan</a></li>
			<li class="divider"></li>
	    <li><a href="#"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i> Hapus</a></li>
	  </ul>
	</div>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr class="info">
	<th><input type="checkbox" name="pilihsemua" id="pilihsemua"></th>
	<th>#</th>
	<th>Uraian Kegiatan</th>
	<th>Satuan</th>
	<th>Target</th>
	<th>Status</th>
	<th colspan="4">Aksi</th>
	</tr>
	<?php
	$c=1;
	while ($r = $sql_ckpt ->fetch_object()) {
		$ckp_satuan=get_nama_satuan($r->ckp_t_satuan);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		echo '
		<tr>
			<td><input type="checkbox" class="pilih" name="check[]" value="'.$r->ckp_t_id.'"></td>
			<td>'.$c.'</td>
			<td>'.$r->ckp_t_keg.'</td>
			<td>'.$ckp_satuan.'</td>
			<td>'.$r->ckp_t_target.'</td>
			<td>'.$ckpStatus[$r->ckp_t_status].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/ajukan/'.$r->ckp_t_id.'"><i class="fa fa-check text-primary" aria-hidden="true"></i></a></td>
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
	<div class="dropup">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Menu
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#">Draft</a></li>
			<li><a href="#">Diajukan</a></li>
			<li><a href="#">Hapus</a></li>
		</ul>
	</div>
</form>
<?php }
else {
	echo 'Data masih kosong';
}
$conn->close();
 ?>
