<?php
$ckp_t_id=$lvl4;
$ckp_t_unitkode=$_SESSION['sesi_unitkode'];
$db = new db();
$conn = $db ->connect();
$sql_edit_ckpt = $conn -> query("select * from ckp_t where ckp_t_id='$ckp_t_id' and ckp_t_unitkode='$ckp_t_unitkode' and ckp_t_edit='1'");
$cek=$sql_edit_ckpt->num_rows;
if ($cek>0) {
	$r=$sql_edit_ckpt->fetch_object();
?>
<legend>Edit target CKP-T <strong><?php echo $_SESSION['sesi_nama'];?></strong></legend>
		<form id="formAddCKP" name="formAddCKP" action="<?php echo $url.'/'.$page.'/'.$act;?>/updateckpt/"  method="post" class="form-horizontal well" role="form" autocomplete="off">
		<fieldset>
			<div class="form-group">
			<label for="ckp_t_keg" class="col-sm-3 control-label">Uraian Kegiatan</label>
				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="ckp_t_keg" class="form-control" placeholder="uraian kegiatan" value="<?php echo $r->ckp_t_keg; ?>" />
				 </div>
				</div>
		</div>
	<div class="form-group">
			<label for="ckp_t_satuan" class="col-sm-3 control-label">Satuan</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="ckp_t_satuan" id="ckp_t_satuan" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Satuan</option>
						<?php
						$db_satuan = new db();
						$conn_satuan = $db -> connect();
						$sql_sat = $conn_satuan->query("select * from ckp_satuan order by ckp_sat_id asc");
						while ($b = $sql_sat ->fetch_object()) {
							if ($r->ckp_t_satuan==$b->ckp_sat_id) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$b->ckp_sat_id.'" ' .$pilih.'>'.$b->ckp_sat_nama.'</option>'."\n";
						}
						$conn_satuan->close();
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="ckp_t_target" class="col-sm-3 control-label">Target</label>
				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
				<input type="text" name="ckp_t_target" class="form-control" placeholder="target kegiatan" value="<?php echo $r->ckp_t_target; ?>" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="ckp_t_tipe" class="col-sm-3 control-label">Tipe</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="ckp_t_tipe" id="ckp_t_tipe" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Tipe</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								if ($r->ckp_t_tipe==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" ' .$pilih.'>'.$ckpTipe[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="ckp_t_bulan" class="col-sm-3 control-label">Bulan</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="ckp_t_bulan" id="ckp_t_bulan" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Bulan</option>
						<?php
						//$bln=date('n');
						for ($i=1;$i<=12;$i++)
							{
								if ($r->ckp_t_bulan==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$nama_bulan_panjang[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="ckp_t_tahun" class="col-sm-3 control-label">Tahun</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="ckp_t_tahun" id="ckp_t_tahun" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Tahun</option>
						<?php
						$thn=date('Y');
						for ($i=$thn-2;$i<=$thn+1;$i++)
							{
								if ($r->ckp_t_tahun==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$i.'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
		<label for="ckp_t_ket" class="col-sm-3 control-label">Keterangan</label>
			<div class="col-lg-7 col-sm-7">
				<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
				<input type="text" name="ckp_t_ket" class="form-control" placeholder="keterangan kegiatan" value="<?php echo $r->ckp_t_ket; ?>"/>
			 </div>
			</div>
	</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="ckp_t_submit" name="ckp_t_submit" value="update" class="btn btn-primary">UPDATE</button>
			</div>
		</div>
</fieldset>
<input type="hidden" name="ckp_t_id" value="<?php echo $ckp_t_id; ?>" />
</form>
<?php }
else {
	echo 'Data CKP-T tidak tersedia atau Terkunci <strong>(Data CKP-T status Diajukan/Disetujui)</strong>';
}
?>
