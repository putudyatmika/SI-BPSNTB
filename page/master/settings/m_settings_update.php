<?php
if ($_POST['submit']) {
$setting_nama=$_POST['setting_nama'];
$setting_nilai=$_POST['setting_nilai'];
$db = new db();
$conn = $db -> connect();
$hasil = $conn -> query("update settings set setting_nilai='$setting_nilai' where setting_nama='$setting_nama'");

if ($hasil) { 
echo "Setting berhasil diupdate";
print "<meta http-equiv=\"refresh\" content=\"1; URL=".$url."/".$page."/".$act."\">";
}
else echo "ERROR";
}


?>