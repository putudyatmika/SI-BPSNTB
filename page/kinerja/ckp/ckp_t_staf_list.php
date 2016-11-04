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
$ckp_t_pegnip=$_SESSION['sesi_user_nip'];
$unit_kode=$_SESSION['sesi_unitkode'];
$unit_eselon=get_eselon_unit($unit_kode);
$peg_jab=get_jabatan_nip($ckp_t_pegnip);
$db = new db();
$conn = $db -> connect();
if ($unit_eselon==4) {
	$sql_pegawai_staf = $conn -> query("select * from m_pegawai where pegawai_unit='$unit_kode' and pegawai_jabatan='2'");
	$cek= $sql_pegawai_staf -> num_rows;
}
else {
	$sql_pegawai_staf = $conn -> query("select * from m_pegawai,m_unitkerja where m_unitkerja.unit_parent='$unit_kode' and m_pegawai.pegawai_unit=m_unitkerja.unit_kode and m_pegawai.pegawai_jabatan='1' order by m_unitkerja.unit_kode asc");
	$cek= $sql_pegawai_staf -> num_rows;
}

if ($cek > 0) {
?>
<legend>CKP-T Bulan <strong><?php echo $nama_bulan_panjang[$bln] .' '. $thn .' - '. get_nama_unit($unit_kode); ?></strong> </legend>
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
	while ($r=$sql_pegawai_staf->fetch_object()) {
		if ($unit_eselon==4) $namaunit=get_nama_unit($unit_kode);
		else $namaunit=$r->unit_nama;
		$staf_nip=$r->pegawai_nip;
		$sql_ckpt = $conn -> query("select * from ckp_t where ckp_t_pegnip='$staf_nip' and ckp_t_bulan='$bln' and ckp_t_tahun='$thn'");
		$cek_ckp= $sql_ckpt -> num_rows;
		echo '
			<tr>
				<td colspan="9">'.$r->pegawai_nama.' - '.$namaunit.'</td>
			</tr>
			';
		if ($cek_ckp>0) {
			  $c=1;
				while ($s= $sql_ckpt->fetch_object()) {
					$ckp_satuan=get_nama_satuan($s->ckp_t_satuan);
					echo '
					<tr>
						<td><input type="checkbox" class="pilih" name="check[]" value="'.$s->ckp_t_id.'"></td>
						<td>'.$c.'</td>
						<td>'.$s->ckp_t_keg.'</td>
						<td>'.$ckp_satuan.'</td>
						<td>'.$s->ckp_t_target.'</td>
						<td>'.$ckpStatus[$s->ckp_t_status].'</td>
						<td><a href="'.$url.'/'.$page.'/'.$act.'/ajukan/'.$s->ckp_t_id.'"><i class="fa fa-check text-primary" aria-hidden="true"></i></a></td>
						<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$s->ckp_t_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
						<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$s->ckp_t_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
						<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$s->ckp_t_id.'" data-confirm="Apakah data '.$s->ckp_t_keg.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
					</tr>
					';
					$c++;
				}
		}
		else {
			echo '<tr>
				<td colspan="9">Data CKP masih kosong</td>
			</tr>';
		}
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
<?php
}
else {
	echo 'Data masing kosong';
}
$conn->close();
?>
