<?php
$unit_kode=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_unitkerja = $conn -> query("select * from m_unitkerja where unit_kode='$unit_kode'");
$r = $sql_unitkerja ->fetch_object();
$nama_unit=get_nama_unit($r->unit_parent);
$nama_user_buat=get_idnama_users($r->unit_dibuat_oleh);
$nama_user_update=get_idnama_users($r->unit_diupdate_oleh);
$dibuat_tgl=tgl_convert_waktu(1,$r->unit_dibuat_waktu);
$diupdate_tgl=tgl_convert_waktu(1,$r->unit_diupdate_waktu);
?>
<legend>Unit Kerja Detil</legend>
<div class="alert alert-info" role="alert">
		<dl class="dl-horizontal">
							<dt>Unit Kode</dt>
							<dd><?php echo $r->unit_kode;?></dd>
							<dt>Nama Unit</dt>
							<dd><?php echo $r->unit_nama;?></dd>
							<dt>Parent</dt>
							<dd><?php echo $nama_unit;?></dd>
							<dt>Dibuat Oleh</dt>
							<dd><?php echo $nama_user_buat;?></dd>
							<dt>Dibuat tanggal</dt>
							<dd><?php echo $dibuat_tgl;?></dd>
							<dt>Diupdate Oleh</dt>
							<dd><?php echo $nama_user_update;?></dd>
							<dt>Diupdate tanggal</dt>
							<dd><?php echo $diupdate_tgl;?></dd>
							<dt>Jenis</dt>
							<dd><?php echo $JenisUnit[$r->unit_jenis];?></dd>
							<dt>Eselon Unit</dt>
							<dd><?php echo $unit_eselon[$r->unit_eselon];?></dd>

					</dl>
		<div class="row">
		<div class="container">
		<?php
		echo '
		<a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->unit_kode.'" class="btn btn-success"><i class="fa fa-pencil fa-lg"></i></a>
		<a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->unit_kode.'" class="btn btn-danger" data-confirm="Apakah data ('.$r->unit_kode.') '.$r->unit_nama.' ini akan di hapus?"><i class="fa fa-trash fa-lg"></i></a>';
		?>
		</div>
		</div>
</div>
