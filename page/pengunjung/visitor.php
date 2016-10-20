<table class="table">
	<tr>
		<td width="40%">Total</td>
		<td width="60%"><?php echo number_format($total_kunjungan,0, ',', '.'); ?></td>
	</tr>
	<tr>
		<td>Bulan lalu</td>
		<td><?php echo number_format($jumlah_bulan_lalu,0, ',', '.'); ?></td>
	
	</tr>
	<tr>
	<td>Bulan ini</td>
	<td><?php echo number_format($jumlah_bulan,0, ',', '.'); ?></td>
	</tr>
	<tr>
	<td>Minggu ini</td>
	<td><?php echo number_format($jumlah_mgg_ini,0, ',', '.'); ?></td>
	</tr>
	<tr>
	<td>Kemarin</td>
	<td><?php echo number_format($jumlah_kmrn,0, ',', '.'); ?></td>
	</tr>
	<tr>
	<td>Hari ini</td>
	<td><?php echo number_format($jumlah_hari_ini,0, ',', '.'); ?></td>
	</tr>
	<tr>
	<td>Online</td>
	<td><?php echo number_format($jumlah_pengunjung,0, ',', '.'); ?></td>
	</tr>
	<tr>
	<td>IP Anda</td>
	<td><?php echo $_SESSION['ip']; ?></td>
	</tr>
	<tr>
	<td>Browser</td>
	<td><?php echo $browser .' '. $browser_ver; ?></td>
	</tr>
	<tr>
	<td>OS</td>
	<td><?php echo $os .' '. $os_ver; ?></td>
	</tr>
	<tr>
	<td>Robot</td>
	<td><?php echo number_format($total_robot,0, ',', '.'); ?></td>
	</tr>
</table>