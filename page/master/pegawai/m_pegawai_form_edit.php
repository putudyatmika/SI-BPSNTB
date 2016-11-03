<?php
$pegawai_nip=$lvl4;
$db = new db();
$conn = $db ->connect();
$sql_edit_peg = $conn -> query("select * from m_pegawai where pegawai_nip='$pegawai_nip'");
$cek=$sql_edit_peg->num_rows;
if ($cek>0) {
	$r=$sql_edit_peg->fetch_object();
?>
		<legend>Edit pegawai <strong><?php echo $r->pegawai_nama;?></strong></legend>
		<form id="formAddPegawai" name="formAddPegawai" action="<?php echo $url.'/'.$page.'/'.$act;?>/update/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="pegawai_nip" class="col-sm-3 control-label">NIP</label>
				<div class="col-lg-6 col-sm-6">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nip" class="form-control" value="<?php echo $r->pegawai_nip;?>" placeholder="NIP Baru" disabled />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Lengkap</label>
				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama" class="form-control" value="<?php echo $r->pegawai_nama;?>" placeholder="nama lengkap tanpa gelar" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Panggilan</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama_panggilan" class="form-control" value="<?php echo $r->pegawai_nama_panggilan;?>" placeholder="nama panggilan" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nip_lama" class="col-sm-3 control-label">NIP Lama</label>
				<div class="col-lg-6 col-sm-6">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nip_lama" class="form-control" value="<?php echo $r->pegawai_nip_lama;?>" placeholder="NIP lama BPS" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_agama" class="col-sm-3 control-label">Agama</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_agama" id="pegawai_agama" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$sql_agama = $conn->query("select * from m_agama order by agama_kode asc");
						while ($a = $sql_agama ->fetch_object()) {
							if ($r->pegawai_agama==$a->agama_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$a->agama_kode.'" '.$pilih.'>'.$a->agama_nama.'</option>'."\n";
						}
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_jk" id="pegawai_jk" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								if ($r->pegawai_jk==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$JenisKelamin[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Tempat Lahir</label>
				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_tempat_lahir" class="form-control" value="<?php echo $r->pegawai_tempat_lahir;?>" placeholder="Kota tempat lahir" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">
					<input type="text" name="pegawai_tgl_lahir" id="pegawai_tgl_lahir" value="<?php echo $r->pegawai_tgl_lahir;?>" class="form-control" placeholder="Tanggal Lahir"/>
					<span class="input-group-addon date" id="tanggal" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_cpns" class="col-sm-3 control-label">TMT CPNS</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">

					<input type="text" name="pegawai_tmt_cpns" id="pegawai_tmt_cpns" value="<?php echo $r->pegawai_tmt_cpns;?>" readonly="readonly" class="form-control" placeholder="TMT CPNS"/>
					<span class="input-group-addon date" id="tgl_cpns" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_cpns" class="col-sm-3 control-label">Pangkat/Gol CPNS</label>
				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_cpns" id="pegawai_gol_cpns" >
						<option value="">Pilih</option>
						<?php
						$sql_gol_cpns = $conn->query("select * from m_gol order by gol_kode asc");
						while ($g = $sql_gol_cpns ->fetch_object()) {
							if ($r->pegawai_gol_cpns==$g->gol_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$g->gol_kode.'" '.$pilih.'>('.$g->gol_nama.') '.$g->gol_jabatan.'</option>'."\n";
						}
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_pns" class="col-sm-3 control-label">TMT PNS</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">

					<input type="text" name="pegawai_tmt_pns" id="pegawai_tmt_pns" value="<?php echo $r->pegawai_tmt_pns;?>" readonly="readonly" class="form-control" placeholder="TMT PNS"/>
					<span class="input-group-addon date" id="tgl_pns" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_pns" class="col-sm-3 control-label">Pangkat/Gol Sekarang</label>
				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_pns" id="pegawai_gol_pns" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$sql_gol_pns = $conn->query("select * from m_gol order by gol_kode asc");
						while ($g2 = $sql_gol_pns ->fetch_object()) {
							if ($r->pegawai_gol_pns==$g2->gol_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$g2->gol_kode.'" '.$pilih.'>('.$g2->gol_nama.') '.$g2->gol_jabatan.'</option>'."\n"; }
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_unit" class="col-sm-3 control-label">Unit Kerja</label>
				<div class="col-sm-8">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_unit" id="pegawai_unit" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih</option>
						<?php
						$sql_unit = $conn->query("select * from m_unitkerja order by unit_jenis,unit_kode asc");
						while ($u = $sql_unit ->fetch_object()) {
							if ($r->pegawai_unit==$u->unit_kode) $pilih='selected="selected"';
							else $pilih='';
							echo '<option value="'.$u->unit_kode.'" '.$pilih.'>['.$u->unit_kode.'] '.$u->unit_nama.'</option>'."\n";
						}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_jabatan" class="col-sm-3 control-label">Jabatan Terakhir</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_jabatan" id="pegawai_jabatan" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Jabatan Terakhir</option>
						<?php
						for ($i=1;$i<=4;$i++)
							{
								if ($r->pegawai_jabatan==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$jabatanPegawai[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_status" class="col-sm-3 control-label">Status Pegawai</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_status" id="pegawai_status" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Status Pegawai</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								if ($r->pegawai_status==$i) $pilih='selected="selected"';
								else $pilih='';
								echo '<option value="'.$i.'" '.$pilih.'>'.$statusPNS[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_pegawai" name="submit_pegawai" value="update" class="btn btn-primary">UPDATE</button>
			</div>
		</div>
		<input type="hidden" name="pegawai_nip" value="<?php echo $pegawai_nip;?>" />
</fieldset>
</form>

<?php }
else {
	echo 'NIP Pegawai salah / data belum tersedia';
}
$conn->close();
?>
