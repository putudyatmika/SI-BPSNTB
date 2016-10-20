<?php
session_start();
require('setting-db.php');
require('fungsi/vars.php');
require('fungsi/class.php');
require('fungsi/fungsi.php');

require('page/settings/settings.php'); //setting web
//untuk mengetahui ip address pengakses
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
else $ip=$_SERVER['REMOTE_ADDR'];
/*
// 
// /page/act/lvl3/lvl4/lvl5
// /guest/add/
// /guest/list/1
// /fo/resv/new/
if (!isset($_GET['act'])) $act="";
else $act=$_GET['act'];
if (!isset($_GET['page'])) $page="";
else $page=$_GET['page'];
*/
$url=$bps_url->getSetting();
$url_asli = explode("/",$_SERVER["REQUEST_URI"]);

require('fungsi/fungsi_url_lokal.php');
//require('fungsi/fungsi_url_net.php');
if (!isset($_SESSION['sesi_user_id']) or empty($_SESSION['sesi_user_id']))
     {
		require ('page/login/login.php');
		exit();
	 }
	 
require('page/pengunjung/pengunjung-code.php');
require ('header.php');
require ('main.php');
require ('footer.php');
//untuk melihat url nya
echo '
	Segmen1 : '. $segmen1.' <br />
	Segmen2 : '. $segmen2.' <br />
	page : '.$page.' <br />
	act : '.$act.' <br />
	lvl3 : '.$lvl3.' <br />
	lvl4 : '.$lvl4.' <br />
	lvl5 : '.$lvl5.' <br />
	';
?>