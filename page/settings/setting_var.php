<?php
//get setting
$timezone_toko= new SettingWeb;
$timezone_toko -> setSetting("timezone_toko");

$email_toko= new SettingWeb;
$email_toko -> setSetting("email_toko");

$nama_toko= new SettingWeb;
$nama_toko -> setSetting("nama_toko");

$alamat_toko= new SettingWeb;
$alamat_toko -> setSetting("alamat_toko");

$telpon_toko= new SettingWeb;
$telpon_toko -> setSetting("telpon_toko");

$fax_toko= new SettingWeb;
$fax_toko -> setSetting("fax_toko");

$url_toko= new SettingWeb;
$url_toko -> setSetting("url_toko");

$hp_toko= new SettingWeb;
$hp_toko -> setSetting("hp_toko");

//batas setting

date_default_timezone_set($timezone_toko->getSetting());
$text_email=str_replace("@","[at]",$email_toko->getSetting());
$tgl_skrg=tgl_hari_ini();
?>