<?php
$user_nip=$lvl4;
$db = new db();
$conn = $db -> connect();
$sql_user = $conn -> query("select * from users where user_nip='$user_nip'");
$r = $sql_user ->fetch_object();
$lastlog=tgl_convert_waktu(1,$r->user_lastlogin);
$nama_unit=get_nama_unit($r->user_unit);
$nama_user_buat=get_idnama_users($r->user_dibuat_oleh);
$nama_user_update=get_idnama_users($r->user_diupdate_oleh);
$dibuat_tgl=tgl_convert_waktu(1,$r->user_dibuat_waktu);
$diupdate_tgl=tgl_convert_waktu(1,$r->user_diupdate_waktu);
?>
<div class="col-lg-12 col-sm-12">
<legend>User <strong><?php echo $r->user_id;?></strong> Detil</legend>
<div class="alert alert-info" role="alert">
		<dl class="dl-horizontal">
			<dt>NIP</dt>
			<dd><?php echo $r->user_nip;?></dd>
			<dt>ID</dt>
			<dd><?php echo $r->user_id;?></dd>
			<dt>Password</dt>
			<dd><?php echo $r->user_passwd;?></dd>
			<dt>Nama</dt>
			<dd><?php echo $r->user_nama;?></dd>
			<dt>Unit Kerja</dt>
			<dd><?php echo $nama_unit;?></dd>
			<dt>Level</dt>
			<dd><?php echo $user_level[$r->user_level];?></dd>
			<dt>Lastlogin</dt>
			<dd><?php echo $lastlog;?></dd>
			<dt>IP</dt>
			<dd><?php echo $r->user_ip;?></dd>
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
		<a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->user_nip.'" class="btn btn-success"><i class="fa fa-pencil fa-lg"></i></a>
		<a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->user_nip.'" class="btn btn-danger" data-confirm="Apakah data ('.$r->user_nip.') '.$r->user_nama.' ini akan di hapus?"><i class="fa fa-trash fa-lg"></i></a>';
		?>
		</div>
		</div>
</div>
</div>