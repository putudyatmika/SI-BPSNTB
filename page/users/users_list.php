<?php
	if ($_SESSION['sesi_level']!="USER") $sql_list=mysql_query("select * from users order by user_id asc");
	else $sql_list=mysql_query("select * from users where user_id='".$_SESSION['sesi_user_id']."'");
	$cek=mysql_num_rows($sql_list);
	
	if ($cek>0) {
		echo '<table class="table table-hover">
			<tr>
				<th>user_id</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Level</th>
				<th>Lastlogin</th>
				<th>IP Login</th>
				<th>Status</th>
				<th colspan="2">&nbsp;</th>
			</tr>';
		while ($r=mysql_fetch_array($sql_list)) {
			echo '
				<tr>
					<td>'.$r['user_id'].'</td>
					<td>'.$r['user_passwd'].'</td>
					<td>'.$r['user_nama'].'</td>
					<td>'.$r['user_level'].'</td>
					<td>'.$r['user_tgl_lastlogin'].'</td>
					<td>'.$r['user_ip_login'].'</td>
					<td>'.$r['user_status'].'</td>';
					
				if ($_SESSION['sesi_level']!="USER") {
					echo '<td><a href="'.$url_bps->getSetting().'/users/edit/'.$r['user_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a></td>
					<td><a href="'.$url_bps->getSetting().'/users/hapus/'.$r['user_id'].'/'.$r['user_nama'].'" class="btn btn-danger" data-confirm="Apakah Data Bidang '.$r['user_nama'].' ('.$r['user_id'].') akan di hapus?"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>';
				}
				else {
					echo '<td colspan="2"></td></tr>';
				 }
		}
		echo '</table>';
	}
	else {
		echo 'data bidang belum tersedia';
	}
	
?>