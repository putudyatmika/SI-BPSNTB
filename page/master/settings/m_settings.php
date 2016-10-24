<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group">
				<a href="<?php echo $url; ?>/master/settings/" class="btn btn-success"><span class="glyphicon glyphicon-th"></span> List</a>
			</div>
		</div>
</div>

<div class="col-lg-12 col-sm-12" style="margin-top:20px;">
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
<div class="table-responsive">
	<table class="table table-hover table-striped table-condensed">
	<tr class="warning">
	<th>No</th>
	<th>Nama Setting</th>
	<th>Nilai Setting</th>
	<th>Action</th>
	</tr>
	<?php
		$i=1;
		while ($r = $sql_settings ->fetch_object()) {
			echo '
			<tr>
				<td>'.$i.'</td>
				<td>'.$r->setting_nama.'</td>
				<td>'.$r->setting_nilai.'</td>
				<td align="center"><a href="'.$url.'/master/settings/edit/'.$r->setting_nama.'" ><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
			</tr>
			';
			$i++;
		}
	?>
	</table>
</div>
<?php
$conn -> close();
} ?>
</div>
