<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Bli Mika - I Putu Dyatmika <pdyatmika@gmail.com>">
	<meta name="language" content="id,en" />
   <link rel="shortcut icon" href="<?php echo $bps_url->getSetting(); ?>/img/bps.ico">

   <title>Sistem Informasi BPS Provinsi NTB (SI-BPSNTB)</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/normalize.css" rel="stylesheet">-->
	<link href="<?php echo $bps_url->getSetting(); ?>/addons/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $bps_url->getSetting(); ?>/addons/validator/css/bootstrapValidator.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="<?php echo $bps_url->getSetting(); ?>/addons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $bps_url->getSetting(); ?>/css/animate.css" rel="stylesheet" media="screen">
	<link href="<?php echo $bps_url->getSetting(); ?>/css/bps.css" rel="stylesheet" media="screen">
	<link href="<?php echo $bps_url->getSetting(); ?>/addons/datepicker/css/datepicker3.css" rel="stylesheet">

</head>

<body>
	<header id="header">
		<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $bps_url->getSetting(); ?>"><img src="<?php echo $bps_url->getSetting(); ?>/images/logo.png" class="img-responsive" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $bps_url->getSetting(); ?>">DEPAN</a></li>
        <li><a href="<?php echo $bps_url->getSetting(); ?>/pegawai/">PEGAWAI</a></li>
        <li><a href="<?php echo $bps_url->getSetting(); ?>/jadwal/">JADWAL</a></li>
        <li><a href="<?php echo $bps_url->getSetting(); ?>/surat/">SURAT</a></li>
		<li><a href="<?php echo $bps_url->getSetting(); ?>/kinerja/">KINERJA</a></li>
		<li><a href="<?php echo $bps_url->getSetting(); ?>/master/">MASTER</a></li>
		<li><a href="<?php echo $bps_url->getSetting(); ?>/profil/">PROFIL</a></li>
		<li><a href="<?php echo $bps_url->getSetting(); ?>/logout/"><i class="fa fa-power-off" aria-hidden="true"></i> </a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
