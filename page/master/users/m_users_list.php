<?php
$db = new db();
$conn = $db -> connect();
$sql_users = $conn -> query("select * from users order by user_nip, user_id asc");
$cek= $sql_users -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-hover table-striped table-condensed">
	<tr>
	<th>NIP</th>
	<th>User ID</th>
	<th>Lastlogin</th>
	<th>Last IP</th>
	<th>Status</th>
	<th colspan="3">&nbsp;</th>
	</tr>
	<?php
	 while ($r=$sql_users->fetch_object()) {
		 echo '
		 <tr>
			<td>'.$r->user_nip.'</td>
			<td>'.$r->user_id.'</td>
			<td>'.$r->user_lastlogin.'</td>
			<td>'.$r->user_ip.'</td>
			<td>'.$status_umum[$r->user_status].'</td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/view/'.$r->user_nip.'"><i class="fa fa-search text-success" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/edit/'.$r->user_nip.'"><i class="fa fa-pencil-square text-info" aria-hidden="true"></i></a></td>
			<td><a href="'.$url.'/'.$page.'/'.$act.'/delete/'.$r->user_nip.'" data-confirm="Apakah data ('.$r->user_nip.') '.$r->user_nama.' ini akan di hapus?"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a></td>
		 </tr>
		 ';
	 }
	?>
</table>
<?php }
else {
	echo 'Data users masih kosong';
} ?>
</div>
