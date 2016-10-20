<?php
require('setting-db.php');

$users_id = $_POST['users_id'];
$hasil=mysql_query("select * from users where user_id='$users_id'");
$cek=mysql_num_rows($hasil);
if ($cek>0) $isAvailable = false;
else $isAvailable = true;

echo json_encode(array(
    'valid' => $isAvailable,
));
?>