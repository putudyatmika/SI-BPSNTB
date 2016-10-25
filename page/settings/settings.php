<?php
/*
$maintenance= new SettingWeb;
$maintenance -> setSetting("maintenance");

if ($maintenance->getSetting()=="ON")
{
include '404.php';
exit();
}
*/
//get setting
$bps_timezone = new SettingWeb;
$bps_timezone -> setSetting("bps_timezone");

$bps_nama = new SettingWeb;
$bps_nama -> setSetting("bps_nama");

$bps_telepon = new SettingWeb;
$bps_telepon -> setSetting("bps_telepon");

$bps_url = new SettingWeb;
$bps_url -> setSetting("bps_url");

$bps_alamat = new SettingWeb;
$bps_alamat -> setSetting("bps_alamat");

$bps_email = new SettingWeb;
$bps_email -> setSetting("bps_email");

$bps_fax = new SettingWeb;
$bps_fax -> setSetting("bps_fax");

$bps_kode = new SettingWeb;
$bps_kode -> setSetting("bps_kode");

//batas setting

date_default_timezone_set($bps_timezone->getSetting());
$text_email=str_replace("@","[at]",$bps_email->getSetting());
$tgl_skrg=tgl_hari_ini();
?>
