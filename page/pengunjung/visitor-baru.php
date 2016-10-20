<div class="Box-Kotak" style="margin-top:10px;">
	<div class="judul-kotak">Statistik Pengunjung</div>
		<div class="BoxKonten">
			<div class="row-visitor">
				<span class="item-1">Total</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($total_kunjungan,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Bulan Lalu</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_bulan_lalu,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Bulan ini</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_bulan,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Minggu ini</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_mgg_ini,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Kemarin</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_kmrn,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Hari ini</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_hari_ini,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Online</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($jumlah_pengunjung,0, ',', '.'); ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">IP Anda	</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo $_SESSION['ip']; ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Browser</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo "$browser $browser_ver"; ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">OS</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo "$os $os_ver"; ?></span>
			</div>
			<div class="row-visitor">
				<span class="item-1">Robot</span>
				<span class="item-2">:</span>
				<span class="item-3"><?php echo number_format($total_robot,0, ',', '.'); ?></span>
			</div>
			<div class="foot-visitor">Sejak 1 Oktober 2013</div>
		</div>

</div>