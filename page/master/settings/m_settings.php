	<div class="row">
		
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<a href="<?php echo $url; ?>/master/settings/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List</a>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top:20px;">
<div class="col-sm-12">
<?php
if ($lvl3=="edit") {
	include 'page/master/settings/m_settings_edit.php';
}
elseif ($lvl3=="update") {
	include 'page/master/settings/m_settings_update.php';
}
else {
$db = new db();
$conn = $db -> connect();
$sql_settings = $conn -> query("select * from settings");
?>
	<table class="table table-bordered table-hover">
	<tr>
	<th width="5%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">No</th>
	<th width="25%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nama Setting</th>
	<th width="50%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Nilai Setting</th>
	<th width="10%" style="padding:20px 5px 20px 5px;text-align:center;background-color:#eaeaea;">Action</th>
	</tr>
	<?php
		$i=1;
		while ($r = $sql_settings ->fetch_object()) {
			echo '
			<tr>
				<td>'.$i.'</td>
				<td>'.$r->setting_nama.'</td>
				<td>'.$r->setting_nilai.'</td>
				<td align="center"><a href="'.$url.'/master/settings/edit/'.$r->setting_nama.'" ><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a></td>
			</tr>
			';
			$i++;
		}
	?>
	</table>
<?php 
$conn -> close();
} ?>
</div>
</div>