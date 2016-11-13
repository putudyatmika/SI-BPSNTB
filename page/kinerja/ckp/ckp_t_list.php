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
$sql_ckpt = $conn -> query("select * from ckp_t where ckp_t_pegnip='$ckp_t_pegnip' and ckp_t_bulan='$bln' and ckp_t_tahun='$thn' and ckp_t_tipe='1' order by ckp_t_id asc");
$cek= $sql_ckpt -> num_rows;
if ($cek > 0) {
	$tgl_periode=tgl_periode_ckp($bln,$thn);
	$sql_peg = $conn -> query("select * from m_pegawai where pegawai_nip='$ckp_t_pegnip'");
	$p = $sql_peg ->fetch_object();
	$nama_unit=get_nama_unit($p->pegawai_unit);
	$parent_nama=get_parent_unit($p->pegawai_unit);
?>
<div class="row">
	<div class="col-lg-2 col-sm-2">Satuan organisasi</div>
	<div class="col-lg-10 col-sm-2">: <?php echo $nama_unit; ?></div>
</div>
<div class="row">
	<div class="col-lg-2 col-sm-2">Nama</div>
	<div class="col-lg-10 col-sm-2">: <?php echo $_SESSION['sesi_nama']; ?></div>
</div>
<div class="row">
	<div class="col-lg-2 col-sm-2">Jabatan</div>
	<div class="col-lg-10 col-sm-2">: <?php echo $jabatanPegawai[$p->pegawai_jabatan] .' '. $nama_unit; ?></div>
</div>
<div class="row">
	<div class="col-lg-2 col-sm-2">Periode</div>
	<div class="col-lg-10 col-sm-2">: <?php echo $tgl_periode; ?></div>
</div>
<form name="formCKPCheck" id="formCKPCheck" action="<?php echo $url.'/'.$page.'/'.$act;?>/ckptcheck/" method="post">
<input id="ckp_post_status" name="ckpt_status" type="hidden">
	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Menu
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#" onclick="$('#ckp_post_status').val('draft'); $('#formCKPCheck').submit()"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Draft</a></li>
	    <li><a href="#" onclick="$('#ckp_post_status').val('ajukan'); $('#formCKPCheck').submit()"><i class="fa fa-check text-primary" aria-hidden="true"></i> Diajukan</a></li>
			<li class="divider"></li>
	    <li><a href="#" onclick="$('#ckp_post_status').val('delete'); $('#formCKPCheck').submit()"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i> Hapus</a></li>
	  </ul>
	</div>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed table-bordered">
	<tr class="info">
	<th><input type="checkbox" name="pilihsemua" id="pilihsemua"></th>
	<th class="text-center">#</th>
	<th class="text-center">Uraian Kegiatan</th>
	<th class="text-center">Satuan</th>
	<th class="text-center">Target</th>
	<th class="text-center">Status</th>
	<th colspan="4" class="text-center">Aksi</th>
	</tr>
	<tr class="info">
	<th>&nbsp;</th>
	<th class="text-center">(1)</th>
	<th class="text-center">(2)</th>
	<th class="text-center">(3)</th>
	<th class="text-center">(4)</th>
	<th class="text-center">(5)</th>
	<th colspan="4" class="text-center">(6)</th>
	</tr>
	<tr>
		<td colspan="10"><strong>UTAMA</strong></td>
	</tr>
	<?php
	$c=1;
	while ($r = $sql_ckpt ->fetch_object()) {
		$ckp_satuan=get_nama_satuan($r->ckp_t_satuan);
		//$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
		//$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
		if ($r->ckp_t_status!=3) {
			$chk_box='<input type="checkbox" class="pilih" name="check[]" value="'.$r->ckp_t_id.';'.$r->ckp_t_keg.'">';
			if ($r->ckp_t_status==2) {
					$stat_box='<a href="'.$url.'/'.$page.'/'.$act.'/ajukanckpt/'.$r->ckp_t_id.'" id="statbox" data-confirm="Apakah data '.$r->ckp_t_keg.' ini akan diubah statusnya?"><i class="fa fa-check text-primary" aria-hidden="true"></i></a>';
					$edit_box='';
					$del_box='';
			}
			else {
			$edit_box='<a href="'.$url.'/'.$page.'/'.$act.'/editckpt/'.$r->ckp_t_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a>';
			$del_box='<a href="'.$url.'/'.$page.'/'.$act.'/deleteckpt/'.$r->ckp_t_id.'" id="delbox" data-confirm="Apakah data '.$r->ckp_t_keg.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>';
			$stat_box='<a href="'.$url.'/'.$page.'/'.$act.'/ajukanckpt/'.$r->ckp_t_id.'" id="statbox" data-confirm="Apakah data '.$r->ckp_t_keg.' ini akan diubah statusnya?"><i class="fa fa-check text-primary" aria-hidden="true"></i></a>';
			}
		}
		else {
			$chk_box='';
			$edit_box='';
			$del_box='';
			$stat_box='';
		}
		echo '
		<tr>
			<td>'.$chk_box.'</td>
			<td>'.$c.'</td>
			<td>'.$r->ckp_t_keg.'</td>
			<td>'.$ckp_satuan.'</td>
			<td>'.$r->ckp_t_target.'</td>
			<td>'.$ckpStatus[$r->ckp_t_status].' - <strong>['.$ckpStatDok[$r->ckp_t_status_dok].']</strong></td>
			<td>'.$stat_box.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/viewckpt/'.$r->ckp_t_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td>'.$edit_box.'</td>
			<td>'.$del_box.'</td>
		</tr>
		';
		$c++;
	}
	$sql_ckpt_tmbh = $conn -> query("select * from ckp_t where ckp_t_pegnip='$ckp_t_pegnip' and ckp_t_bulan='$bln' and ckp_t_tahun='$thn' and ckp_t_tipe='2' order by ckp_t_id asc");
	$cek2=$sql_ckpt_tmbh->num_rows;
	echo '
	<tr>
	<td colspan="10"><strong>TAMBAHAN</strong></td>
	</tr>
	';
	if ($cek2>0) {

	$t=1;
	while ($r2= $sql_ckpt_tmbh->fetch_object()) {
		$ckp_satuan=get_nama_satuan($r2->ckp_t_satuan);
		if ($r2->ckp_t_status!=3) {
			$chk_box='<input type="checkbox" class="pilih" name="check[]" value="'.$r2->ckp_t_id.';'.$r2->ckp_t_keg.'">';
			if ($r2->ckp_t_status==2) {
					$stat_box='<a href="'.$url.'/'.$page.'/'.$act.'/ajukanckpt/'.$r2->ckp_t_id.'" id="statbox" data-confirm="Apakah data '.$r2->ckp_t_keg.' ini akan diubah statusnya?"><i class="fa fa-check text-primary" aria-hidden="true"></i></a>';
					$edit_box='';
					$del_box='';
			}
			else {
			$edit_box='<a href="'.$url.'/'.$page.'/'.$act.'/editckpt/'.$r2->ckp_t_id.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a>';
			$del_box='<a href="'.$url.'/'.$page.'/'.$act.'/deleteckpt/'.$r2->ckp_t_id.'" id="delbox" data-confirm="Apakah data '.$r2->ckp_t_keg.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>';
			$stat_box='<a href="'.$url.'/'.$page.'/'.$act.'/ajukanckpt/'.$r2->ckp_t_id.'" id="statbox" data-confirm="Apakah data '.$r2->ckp_t_keg.' ini akan diubah statusnya?"><i class="fa fa-check text-primary" aria-hidden="true"></i></a>';
			}
		}
		else {
			$chk_box='';
			$edit_box='';
			$del_box='';
			$stat_box='';
		}
		echo '
		<tr>
			<td>'.$chk_box.'</td>
			<td>'.$t.'</td>
			<td>'.$r2->ckp_t_keg.'</td>
			<td>'.$ckp_satuan.'</td>
			<td>'.$r2->ckp_t_target.'</td>
			<td>'.$ckpStatus[$r2->ckp_t_status].' - <strong>['.$ckpStatDok[$r2->ckp_t_status_dok].']</strong></td>
			<td>'.$stat_box.'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/viewckpt/'.$r2->ckp_t_id.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td>'.$edit_box.'</td>
			<td>'.$del_box.'</td>
		</tr>
		';
		$t++;
	}
}
else {
	echo '
<tr>
<td>&nbsp;</td>
	<td>1</td>
	<td colspan="8"></td>
	</tr>
';
}
	?>
</table>
	</div>
	<div class="dropup">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Menu
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#" onclick="$('#ckp_post_status').val('draft'); $('#formCKPCheck').submit()"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Draft</a></li>
	    <li><a href="#" onclick="$('#ckp_post_status').val('ajukan'); $('#formCKPCheck').submit()"><i class="fa fa-check text-primary" aria-hidden="true"></i> Diajukan</a></li>
			<li class="divider"></li>
	    <li><a href="#" onclick="$('#ckp_post_status').val('delete'); $('#formCKPCheck').submit()"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i> Hapus</a></li>
		</ul>
	</div>
</form>
<?php }
else {
	echo 'Data masih kosong';
}
$conn->close();
 ?>
