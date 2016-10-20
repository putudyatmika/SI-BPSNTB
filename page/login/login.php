<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Bli Mika - I Putu Dyatmika <pdyatmika@gmail.com>">
	<meta name="language" content="id,en" />
    <link rel="shortcut icon" href="<?php echo $bps_url->getSetting(); ?>/images/bps.ico">

    <title>Sistem BPS Provinsi NTB</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/normalize.css" rel="stylesheet">-->
	<link href="<?php echo $bps_url->getSetting(); ?>/addons/bootstrap/css/bootstrap.css" rel="stylesheet">
	
    <!-- Add custom CSS here -->
    <link href="<?php echo $bps_url->getSetting(); ?>/addons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $bps_url->getSetting(); ?>/css/animate.css" rel="stylesheet" media="screen">
	<style>
.redborder {
    border:2px solid #f96145;
    border-radius:2px;
}

.hidden {
    display: none;
}

.visible {
    display: normal;
}
body {
	background-color: #F0EEEE;
}
.colored {
    background-color: #F0EEEE;
}

.row {
    padding: 20px 0px;
}

.bigicon {
    font-size: 97px;
    color: #f96145;
}

.medicon {
    font-size: 30px;
    color: #007208;
}

.contcustom {
    text-align: center;
    width: 300px;
    border-radius: 0.5rem;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
}

input {
    width: 100%;
    margin-bottom: 17px;
    padding: 15px;
    background-color: #ECF4F4;
    border-radius: 2px;
    border: none;
}

h2 {
    margin-bottom: 20px;
    font-weight: bold;
    color: #ABABAB;
}

.btn {
    border-radius: 2px;
    padding: 10px;
}

.med {
    font-size: 27px;
    color: white;
}

.medhidden {
    font-size: 27px;
    color: #f96145;
    padding: 10px;
    width:100%;
}

.wide {
    background-color: #8EB7E4;
    width: 100%;
    -webkit-border-top-right-radius: 0;
    -webkit-border-bottom-right-radius: 0;
    -moz-border-radius-topright: 0;
    -moz-border-radius-bottomright: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.brand-word {
	font-family: 'Roboto', sans-serif;
	font-size: 20px;
	color: #f35626;
    background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-animation: gantiwarna 10s infinite linear;
	animation: gantiwarna 10s infinite linear;
}
@-webkit-keyframes gantiwarna {
  from {
    -webkit-filter: hue-rotate(0deg);
  }

  to {
    -webkit-filter: hue-rotate(-360deg);
  }
}

/* Standard syntax */
@keyframes gantiwarna {
    from {
    filter: hue-rotate(0deg);
  }

  to {
    filter: hue-rotate(-360deg);
  }
} 
</style>
</head>

<body>
	
<div class="container">
    <?php
		$login_ku="";
		$text_alert="";
		if (isset($_POST['submit'])) {
				$user_id=$_POST['user_id'];
				$passwd=$_POST['passwd'];
				$db = new db();
				$conn = $db->connect();
				$sql_cek = $conn -> query("select * from users where user_id='$user_id' and user_passwd='$passwd'");
				
				//$sql_cek=mysql_query("select * from users where user_id='$user_id' and user_passwd='$passwd'");
				//$cek=mysql_num_rows($sql_cek);
				$cek = $sql_cek -> num_rows;
				if ($cek>0) {
					$waktu_lokal=date("Y-m-d H:i:s");
					$r=$sql_cek->fetch_object();
					$_SESSION['sesi_user_id']=$user_id;
					$_SESSION['sesi_user_nip']=$r->user_nip;
					$_SESSION['sesi_passwd']=$passwd;	
					$_SESSION['sesi_nama']=$r->user_nama;
					$_SESSION['sesi_level']=$r->user_level;
					$login_ku="sukses";
					$sql_update_login=$conn -> query("update users set user_ip='$ip', user_lastlogin='$waktu_lokal' where user_id='$user_id'");
					$text_alert="Selamat Datang <b>".$r->user_nama."</b>, dalam 5 detik akan di bawa ke halaman depan";
					print "<meta http-equiv=\"refresh\" content=\"3; URL=".$bps_url->getSetting()."\">";
				}
				else {
					$text_alert= "username / password masih ada yang salah";
					$login_ku="";
				}
				$conn->close();
				
	
}
	?>
	<div class="row colored">
        <div id="contentdiv" class="contcustom">
            <h2>Login</h2>
            <div>
				<?php
				if ($login_ku=="") { ?>
				<form class="form-horizontal" role="form" method="post" action="<?php echo $bps_url->getSetting(); ?>/login/ceklogin">
                <input id="username" name="user_id" type="text" placeholder="username" required>
                <input id="password" name="passwd" type="password" placeholder="password" required>
                <button type="submit" name="submit" id="submit" class="btn btn-sm wide colored">
                    <i class="fa fa-lock medicon"></i> </button>
				</form>
				<?php } 
				?>
            </div>
        </div>
    </div>
	
	<div class="row">
		<?php if ($text_alert!="") { ?><div class="col-sm-offset-3 col-sm-6"><div class="alert alert-danger text-center" role="alert"><?php echo $text_alert; ?></div></div><?php } ?>
		
	</div>
</div>

<!-- JavaScript -->
    <script src="<?php echo $bps_url->getSetting(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo $bps_url->getSetting(); ?>/addons/bootstrap/js/bootstrap.min.js"></script>
		
</body>
<?php //tutup_db($con); ?>
</html>    