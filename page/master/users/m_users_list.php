<?php
$db = new db();
$conn = $db -> connect();
$sql_users = $conn -> query("select * from users order by user_nip, user_id asc");
$cek= $sql_users -> num_rows;
if ($cek > 0) {
?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
	<th width="15%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">NIP</th>
	<th width="25%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">User ID</th>
	<th width="30%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Lastlogin</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Last IP</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Status</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;" colspan="3">&nbsp;</th>
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