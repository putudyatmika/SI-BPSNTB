	<legend>Tambah data pegawai baru</legend>
		<form id="formAddPegawai" name="formAddPegawai" action="<?php echo $url.'/'.$page.'/'.$act;?>/save/"  method="post" class="form-horizontal well" role="form">
		<fieldset>
		<div class="form-group">
			<label for="pegawai_nip" class="col-sm-3 control-label">NIP</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nip" class="form-control" placeholder="NIP Baru" />
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Lengkap</label>

				<div class="col-lg-7 col-sm-7">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama" class="form-control" placeholder="nama lengkap tanpa gelar" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nama" class="col-sm-3 control-label">Nama Panggilan</label>

				<div class="col-lg-4 col-sm-4">
					<div class="input-group margin-bottom-sm">
				<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<input type="text" name="pegawai_nama_panggilan" class="form-control" placeholder="nama panggilan" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_nip_lama" class="col-sm-3 control-label">NIP Lama</label>
				<div class="col-lg-4 col-sm-4">
						<div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
								<input type="text" name="pegawai_nip_lama" class="form-control" placeholder="NIP lama BPS" />
						</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_agama" class="col-sm-3 control-label">Agama</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
							<select class="form-control" name="pegawai_agama" id="pegawai_agama" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Agama</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_agama = $conn->query("select * from m_agama order by agama_kode asc");
						while ($r = $sql_agama ->fetch_object()) {
							echo '<option value="'.$r->agama_kode.'">'.$r->agama_nama.'</option>'."\n";

						}
						$conn->close();
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
				<div class="col-sm-4">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						<select class="form-control" name="pegawai_jk" id="pegawai_jk" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Jenis Kelamin</option>
						<?php
						for ($i=1;$i<=2;$i++)
							{
								echo '<option value="'.$i.'">'.$JenisKelamin[$i].'</option>';
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


					<input type="text" name="pegawai_tempat_lahir" class="form-control" placeholder="Kota tempat lahir" />
				 </div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">
					<input type="text" name="pegawai_tgl_lahir" id="pegawai_tgl_lahir" class="form-control" placeholder="YYYY-MM-DD"/>
					<span class="input-group-addon date" id="tanggal" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_cpns" class="col-sm-3 control-label">TMT CPNS</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">
					<input type="text" name="pegawai_tmt_cpns" id="pegawai_tmt_cpns" readonly="readonly" class="form-control" placeholder="TMT CPNS"/>
					<span class="input-group-addon date" id="tgl_cpns" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_cpns" class="col-sm-3 control-label">Pangkat/Gol CPNS</label>

				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_cpns" id="pegawai_gol_cpns" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Pangkat/Golongan CPNS</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_agama = $conn->query("select * from m_gol order by gol_kode asc");
						while ($r = $sql_agama ->fetch_object()) {
							echo '<option value="'.$r->gol_kode.'">('.$r->gol_nama.') '.$r->gol_jabatan.'</option>'."\n";

						}
						$conn->close();
						?>
					</select>
				</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_tmt_pns" class="col-sm-3 control-label">TMT PNS</label>
				<div class="col-sm-3">
				<div class="input-group margin-bottom-sm">
					<input type="text" name="pegawai_tmt_pns" id="pegawai_tmt_pns" readonly="readonly" class="form-control" placeholder="TMT PNS"/>
					<span class="input-group-addon date" id="tgl_pns" style="cursor:pointer;"><i class="fa fa-calendar fa-fw"></i></span>
					</div>
				</div>
		</div>
		<div class="form-group">
			<label for="pegawai_gol_pns" class="col-sm-3 control-label">Pangkat/Gol Terakhir</label>

				<div class="col-sm-5">
					<div class="input-group margin-bottom-sm">
						<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
					<select class="form-control" name="pegawai_gol_pns" id="pegawai_gol_pns" style="font-family:'FontAwesome', Arial;">
						<option value="">Pilih Pangkat/Golongan Terakhir</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_agama = $conn->query("select * from m_gol order by gol_kode asc");
						while ($r = $sql_agama ->fetch_object()) {
							echo '<option value="'.$r->gol_kode.'">('.$r->gol_nama.') '.$r->gol_jabatan.'</option>'."\n";

						}
						$conn->close();
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
						<option value="">Pilih Unit Kerja Terakhir</option>
						<?php
						$db = new db();
						$conn = $db -> connect();
						$sql_unit = $conn->query("select * from m_unitkerja order by unit_jenis,unit_kode asc");
						while ($r = $sql_unit ->fetch_object()) {
							echo '<option value="'.$r->unit_kode.'">['.$r->unit_kode.'] '.$r->unit_nama.'</option>'."\n";

						}
						$conn->close();

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
								echo '<option value="'.$i.'">'.$jabatanPegawai[$i].'</option>';
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
								echo '<option value="'.$i.'">'.$statusPNS[$i].'</option>';
							}
						?>
						</select>
					</div>
				</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
			  <button type="submit" id="submit_pegawai" name="submit_pegawai" value="save" class="btn btn-primary">SAVE</button>
			</div>
		</div>
</fieldset>
</form>
