<?php
$pegawai_nip=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_peg = $conn -> query("select * from m_pegawai where pegawai_nip='$pegawai_nip'");
$cek=$sql_peg->num_rows;
if ($cek>0) {
	$r = $sql_peg ->fetch_object();
	$nama_unit=get_nama_unit($r->pegawai_unit);
	$nama_user_buat=get_idnama_users($r->pegawai_dibuat_oleh);
	$nama_user_update=get_idnama_users($r->pegawai_diupdate_oleh);
	$dibuat_tgl=tgl_convert_waktu(1,$r->pegawai_dibuat_waktu);
	$diupdate_tgl=tgl_convert_waktu(1,$r->pegawai_diupdate_waktu);
	$tgl_lahir=tgl_convert_pendek(1,$r->pegawai_tgl_lahir);
	$tgl_lahir=$r->pegawai_tempat_lahir.', '. $tgl_lahir;
	$agama=get_agama($r->pegawai_agama);
	$tmtcpns=tgl_convert_pendek(1,$r->pegawai_tmt_cpns);
	$tmtpns=tgl_convert_pendek(1,$r->pegawai_tmt_pns);
	$namagol=get_pangkat_gol($r->pegawai_gol_pns);
	$parent_nama=get_parent_unit($r->pegawai_unit);
	$unit_eselon=get_eselon_unit($r->pegawai_unit);
	if ($unit_eselon==2) $unit_pegawai=$nama_unit;
	else $unit_pegawai=$nama_unit .' '. $parent_nama;
	$nip_atasan=get_nip_atasan($r->pegawai_unit,$r->pegawai_jabatan);
	?>
	<legend><strong><?php echo $r->pegawai_nama;?></strong> - <?php echo $parent_nama; ?></legend>
	<div class="alert alert-info" role="alert">
			<dl class="dl-horizontal">
				<dt>NIP</dt>
				<dd><?php echo $r->pegawai_nip_lama .' - '. $r->pegawai_nip;?></dd>
				<dt>Nama Lengkap</dt>
				<dd><?php echo $r->pegawai_nama;?></dd>
				<dt>Panggilan</dt>
				<dd><?php echo $r->pegawai_nama_panggilan;?></dd>
				<dt>Tempat/Tanggal Lahir</dt>
				<dd><?php echo $tgl_lahir;?></dd>
				<dt>Jenis Kelamin</dt>
				<dd><?php echo $JenisKelamin[$r->pegawai_jk];?></dd>
				<dt>Agama</dt>
				<dd><?php echo $agama;?></dd>
				<dt>Unit Kerja</dt>
				<dd><?php echo $unit_pegawai;?></dd>
				<dt>Jabatan</dt>
				<dd><?php echo $jabatanPegawai[$r->pegawai_jabatan] .' '. $nama_unit;?></dd>
				<dt>Atasan</dt>
				<dd><?php echo $nip_atasan;?></dd>
				<dt>TMT CPNS</dt>
				<dd><?php echo $tmtcpns;?></dd>
				<dt>TMT PNS</dt>
				<dd><?php echo $tmtpns;?></dd>
				<dt>Pangkat/Gol. Akhir</dt>
				<dd><?php echo $namagol;?></dd>
				<dt>Dibuat Oleh</dt>
				<dd><?php echo $nama_user_buat;?></dd>
				<dt>Dibuat tanggal</dt>
				<dd><?php echo $dibuat_tgl;?></dd>
				<dt>Diupdate Oleh</dt>
				<dd><?php echo $nama_user_update;?></dd>
				<dt>Diupdate tanggal</dt>
				<dd><?php echo $diupdate_tgl;?></dd>
			</dl>
			<div class="row">
			<div class="container">
			<?php
			echo '
			<a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->pegawai_nip.'" class="btn btn-success"><i class="fa fa-pencil fa-lg"></i></a>
			<a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->pegawai_nip.'" class="btn btn-danger" data-confirm="Apakah data ('.$r->pegawai_nip.') '.$r->pegawai_nama.' ini akan di hapus?"><i class="fa fa-trash fa-lg"></i></a>';
			?>
			</div>
			</div>
	</div>
<?php }
else {
	echo 'Data pegawai tidak ditemukan';
}
?>
