<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-5">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<a href="<?php echo $url; ?>/settings/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List</a>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-sm-8">
			<?php 
			if ($act=="edit") {
					$setting_nama=$lvl3; 
					$sql_setting=mysql_query("select * from settings where setting_nama='$setting_nama'");
					$r=mysql_fetch_array($sql_setting);
					?>
					<form name="settingan" action="<?php echo $url;?>/settings/update/" method="post" id="formku" class="form-horizontal" role="form">
					<legend>Edit Setting Website</legend>
					<div class="form-group">
						<label for="setting_nama" class="col-sm-3 control-label">Nama Settingan</label>
						<div class="col-sm-4">
							<input type="text" name="setting_nama_fake" id="setting_nama" class="form-control" value="<?php echo $setting_nama; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
					<?php
						if ($setting_nama=="maintenance") { 
						   if ($r['setting_nilai']=="OFF") {
								$nilai='<option value="OFF" selected="selected">OFF</option>
							<option value="ON">ON</option>';
						   }
						   else {
								$nilai='<option value="OFF">OFF</option>
							<option value="ON" selected="selected">ON</option>';
						   }
						echo '<label for="setting_nama" class="col-sm-3 control-label">Nilai Settingan</label>
						<div class="col-sm-2">
							<select name="setting_nilai" id="setting_nilai" class="required form-control">
							  '.$nilai.'
							</select>
						</div>';
						}
						else {
					?>
					
						<label for="setting_nilai" class="col-sm-3 control-label">Nilai Settingan</label>
						<div class="col-sm-9">
							<input type="text" name="setting_nilai" id="setting_nilai" class="form-control" value="<?php echo $r['setting_nilai']; ?>">
						</div>
					
					<?php } ?>
					</div>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8"><button type="submit" id="submit_agenda" name="submit" value="simpan" class="btn btn-primary" />Submit</button>
							</div>
						</div>
						<input type="hidden" name="setting_nama" id="setting_nama" value="<?php echo $setting_nama; ?>">
					</form>
			   <?php 
			}
			elseif ($act=="update") {
					if ($_POST['submit']) {
						$setting_nama=$_POST['setting_nama'];
						$setting_nilai=$_POST['setting_nilai'];
							
						$hasil=mysql_query("update settings set setting_nilai='$setting_nilai' where setting_nama='$setting_nama'") or die(mysql_error());
						if ($hasil) { 
							echo "Setting berhasil diupdate";
							print "<meta http-equiv=\"refresh\" content=\"1; URL=".$url."/settings\">";
							}
						else echo "ERROR";
					}
			}
			else {
			$sql_settingan=mysql_query("select * from settings");
			?>
			
					<table class="table table-bordered table-hover">
					<tr>
						<th width="5%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">No</th>
						<th width="25%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nama Setting</th>
						<th width="60%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nilai Setting</th>
						<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Action</th>
					</tr>
					<?php
					$no=1;
					while ($r=mysql_fetch_array($sql_settingan)) {
						echo '
							<tr>
						
						<td>'.$no.'</td>
						<td>'.$r['setting_nama'].'</td>
						<td>'.$r['setting_nilai'].'</td>
						<td><a href="'.$hotel_url->getSetting().'/settings/edit/'.$r['setting_nama'].'/" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
					</tr>
						
						';
						$no++;
					}
					?>
					
				</table>
			
			<?php
			}
			?>
			</div>
	</div>
</div>
