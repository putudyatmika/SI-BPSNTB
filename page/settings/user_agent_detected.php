<?php
/* detect OS, Browser dari User Agent sebuah browser
*/

function detect_browser($user_agent) {
   global $browser,$browser_ver,$tipe;
   switch (true) {
   
		//GoogleBot
		case (preg_match('/Googlebot/i',$user_agent)); 
		$browser = 'Google Bot';
		$tipe='bot';
		break;
		
		//GoogleBot
		case (preg_match('/Butterfly/i',$user_agent)); 
		$browser = 'Butterfly Bot';
		$tipe='bot';
		break;
		
		//Opera Mini
		case (preg_match('/OPR/i',$user_agent)); 
		$browser = 'Opera';
		$tipe='OPR';
		break;
		
		//Opera Mini
		case (preg_match('/Opera Mini/i',$user_agent)); 
		$browser = 'Opera Mini';
		$tipe='Opera Mini';
		break;
		
		//Opera Mini
		case (preg_match('/Opera/i',$user_agent)); 
		$browser = 'Opera';
		$tipe='Opera';
		break;
		
		//Internet Explorer
		case (preg_match('/BlackBerry/i',$user_agent)); 
		$browser = 'BlackBerry';
		$tipe='BlackBerry ';
		break;
		
		//Opera Mini
		case (preg_match('/SymbianOS/i',$user_agent)); 
		$browser = 'SymbianOS';
		$tipe='Series';
		break;
		
		//Internet Explorer
		case (preg_match('/MSIE/i',$user_agent)); 
		$browser = 'Internet Explorer';
		$tipe='MSIE';
		break;
		
		//SeaMonkey
		case (preg_match('/SeaMonkey/i',$user_agent)); 
		$browser = 'SeaMonkey';
		$tipe='SeaMonkey';
		break;

		//Firefox
		case (preg_match('/Firefox/i',$user_agent)); 
		$browser = 'Mozilla Firefox';
		$tipe='Firefox';
		break; 
		
		//Chrome
		case (preg_match('/Chrome/i',$user_agent)); 
		$browser = 'Google Chrome';
		$tipe='Chrome';
		break; 
		
		//Safari
		case (preg_match('/Safari/i',$user_agent)); 
		$browser = 'Safari';
		$tipe='Version';
		break;
		
		//BingBot
		case (preg_match('/bingbot/i',$user_agent)); 
		$browser = 'Bing Bot';
		$tipe='bot';
		break;
		
		//YandexBot
		case (preg_match('/YandexBot/i',$user_agent)); 
		$browser = 'Yandex Bot';
		$tipe='bot';
		break;
		
		//YandexBot
		case (preg_match('/YandexImages/i',$user_agent)); 
		$browser = 'YandexImages Bot';
		$tipe='bot';
		break;
		
		//Baiduspider
		case (preg_match('/Baiduspider/i',$user_agent)); 
		$browser = 'Baidu Bot';
		$tipe='bot';
		break;
		
		//AhrefsBot
		case (preg_match('/AhrefsBot/i',$user_agent)); 
		$browser = 'Ahrefs Bot';
		$tipe='bot';
		break;
		
		//MSNBot
		case (preg_match('/msnbot/i',$user_agent)); 
		$browser = 'MSN Bot';
		$tipe='bot';
		break;
		
		case (preg_match('/Ezooms/i',$user_agent)); 
		$browser = 'Ezooms Bot';
		$tipe='bot';
		break;
		
		case (preg_match('/BingPreview/i',$user_agent)); 
		$browser = 'BingPreview Bot';
		$tipe='bot';
		break;
		
		case (preg_match('/tigerbot/i',$user_agent)); 
		$browser = 'tigerbot Bot';
		$tipe='bot';
		break;
		
		case (preg_match('/TweetmemeBot/i',$user_agent)); 
		$browser = 'TweetmemeBot';
		$tipe='bot';
		break;
		
		case (preg_match('/SISTRIX/i',$user_agent)); 
		$browser = 'SISTRIX Bot';
		$tipe='bot';
		break;
		
		case (preg_match('/Twitterbot/i',$user_agent)); 
		$browser = 'Twitterbot';
		$tipe='bot';
		break;
		
		case (preg_match('/YesupBot/i',$user_agent)); 
		$browser = 'YesupBot';
		$tipe='bot';
		break;
		
		case (preg_match('/Exabot/i',$user_agent)); 
		$browser = 'Exabot';
		$tipe='bot';
		break;
		
		case (preg_match('/oBot/i',$user_agent)); 
		$browser = 'oBot';
		$tipe='bot';
		break;
		
		default;
		$browser='Lainnya';
		$tipe='bot';
		break;
   }
   if ($tipe=='bot') {
		$browser_ver='';
   }
   else {
			$start_pos=strpos($user_agent,$tipe);
			$bnyk_user_agent=strlen($user_agent);
			$string_agent = substr( $user_agent, $start_pos, $bnyk_user_agent );
        if (($tipe=='MSIE') or ($tipe=='BlackBerry ')) {
			$awal_tanda = strcspn($string_agent, ' ');
			$akhir=strcspn($string_agent, ';');
		}
		elseif ($tipe=="Opera Mini") {
			$awal_tanda = strcspn($string_agent, '/');
			$akhir=strcspn($string_agent, ';');
		}
		else {
			$awal_tanda = strcspn($string_agent, '/');
			$akhir=strcspn($string_agent, ' ');
		}
			
			//$awal_tanda = strcspn($string_agent, '/');
			//$akhir=strcspn($string_agent, ' ');
	  
			$bnyk_str_tipe=strlen($string_agent);
			$string_browser=substr($user_agent,$start_pos,$akhir);
	  
			$browser_ver=substr($string_browser,$awal_tanda+1,$akhir);
			if ($tipe=='BlackBerry ') {
			   if (strlen($browser_ver)>10) {
			      $browser_ver=substr($user_agent,10,4);
			   }
			}
			if ($tipe=='Opera Mini') 
			   {
				$awal_tanda = strcspn($browser_ver, '/');
				$browser_ver=substr($browser_ver,0,$awal_tanda);
				
			   }
			
   }
}
function detect_os($user_agent) {
	global $os, $os_ver,$tipe_os;
	switch (true) {
		
		//GoogleBot
		case (preg_match('/Googlebot/i',$user_agent)); 
		$os = 'GoogleBot';
		$tipe_os='Googlebot';
		break;
		//GoogleBot
		case (preg_match('/Ezooms/i',$user_agent)); 
		$os = 'Ezooms';
		$tipe_os='Ezooms';
		break;
		
		case (preg_match('/J2ME\/MIDP/i',$user_agent)); 
		$os = 'Java Mobile';
		$tipe_os='java';
		break;
		
		//Windows
		case (preg_match('/iPhone/i',$user_agent)); 
		$os = 'iPhone';
		$tipe_os='iPhone OS';
		break;
		
		case (preg_match('/Mac OS X/i',$user_agent)); 
		$os = 'Mac OS X';
		$tipe_os='OS X';
		break;
		
		case (preg_match('/Windows Phone/i',$user_agent)); 
		$os = 'Windows Phone';
		$tipe_os='Windows Phone';
		break;
		
		case (preg_match('/Windows/i',$user_agent)); 
		$os = 'Windows';
		$tipe_os='Windows NT';
		break;
		
		case (preg_match('/FreeBSD i/i',$user_agent)); 
		$os = 'FreeBSD';
		$tipe_os='FreeBSD i';
		break;
		
		case (preg_match('/FreeBSD x/i',$user_agent)); 
		$os = 'FreeBSD';
		$tipe_os='FreeBSD x';
		break;
		
		case (preg_match('/BlackBerry/i',$user_agent)); 
		$os = 'BlackBerry';
		$tipe_os='Version';
		break;
		
		case (preg_match('/Nokia/i',$user_agent)); 
		$os = 'Nokia';
		$tipe_os='Nokia';
		break;
		
		//Butterfly
		case (preg_match('/Butterfly/i',$user_agent)); 
		$os = 'Butterfly Bot';
		$tipe_os='Butterfly';
		break;
		
		case (preg_match('/Android/i',$user_agent)); 
		$os = 'Android';
		$tipe_os='Android';
		break;
		
		case (preg_match('/Linux i/i',$user_agent)); 
		$os = 'Linux';
		$tipe_os='Linux i';
		break;
		
		case (preg_match('/Linux x/i',$user_agent)); 
		$os = 'Linux';
		$tipe_os='Linux x';
		break;
		
		//BingBot
		case (preg_match('/bingbot/i',$user_agent)); 
		$os = 'BingBot';
		$tipe_os='bingbot';
		break;
		
		//YandexBot
		case (preg_match('/YandexBot/i',$user_agent)); 
		$os = 'YandexBot';
		$tipe_os='YandexBot';
		break;
		
		//Baiduspider
		case (preg_match('/Baiduspider/i',$user_agent)); 
		$os = 'Baidu';
		$tipe_os='Baiduspider';
		break;
		
		//MSNBot
		case (preg_match('/msnbot/i',$user_agent)); 
		$os = 'MSNBot';
		$tipe_os='msnbot';
		break;
		
		//AhrefsBot
		case (preg_match('/AhrefsBot/i',$user_agent)); 
		$os = 'Ahrefs Bot';
		$tipe_os='AhrefsBot';
		break;
		
		default;
		$os='Tidak Tahu';
		$tipe_os='bot';
		break;
		
	}
		if ($tipe_os=='bot') {
			$os_ver='';
	   }
	   else {
				$start_pos=strpos($user_agent,$tipe_os);
				$bnyk_user_agent=strlen($user_agent);
				$string_agent = substr( $user_agent, $start_pos, $bnyk_user_agent );
			if ($tipe_os=='Windows NT') {
				$awal_tanda = 10;
				$akhir=14;
			}
			elseif ($tipe_os=='OS X') {
				$awal_tanda = 4;
				$akhir=11;
			}
			elseif ($tipe_os=='iPhone OS') {
				$awal_tanda = 9;
				$akhir=13;
			}
			elseif ($tipe_os=='Windows Phone') {
				//$awal_tanda = strcspn($string_agent, ' ');
				$akhir=strcspn($string_agent, ';');
				$awal_tanda=$akhir-5;
				//$akhir=3;
			}
			elseif ($tipe_os=='Android') {
				$awal_tanda = strcspn($string_agent, ' ');
				$akhir=strcspn($string_agent, ';');
				//$akhir=$awal_tanda+5;
			}
			elseif ($tipe_os=='Linux i') {
				$awal_tanda = strcspn($string_agent, ' ');
				// $akhir=strcspn($string_agent, ';');
				$akhir=$awal_tanda+5;
			}
			elseif ($tipe_os=='Linux x') {
				$awal_tanda = strcspn($string_agent, ' ');
				//$akhir=strcspn($string_agent, ')');
				$akhir=$awal_tanda+7;
			}
			elseif ($tipe_os=='FreeBSD i') {
				$awal_tanda = strcspn($string_agent, ' ');
				// $akhir=strcspn($string_agent, ';');
				$akhir=$awal_tanda+5;
			}
			elseif ($tipe_os=='FreeBSD x') {
				$awal_tanda = strcspn($string_agent, ' ');
				//$akhir=strcspn($string_agent, ')');
				$akhir=$awal_tanda+7;
			}
			elseif ($tipe_os=='Nokia') {
				$awal_tanda = strcspn($string_agent, ' ');
				$akhir=strcspn($string_agent, '/');
			}
			elseif (($tipe_os=='Ezooms') || ($tipe_os=='bingbot') or ($tipe_os=='Googlebot') or ($tipe_os=='YandexBot') or ($tipe_os=='Baiduspider') or ($tipe_os=='AhrefsBot') or ($tipe_os=='Butterfly')) {
				$awal_tanda = strcspn($string_agent, '/');
				$akhir=strcspn($string_agent, ';');
			}
			else {
				$awal_tanda = strcspn($string_agent, '/');
				$akhir=strcspn($string_agent, ' ');
			}
				
				//$awal_tanda = strcspn($string_agent, '/');
				//$akhir=strcspn($string_agent, ' ');
		  
				$bnyk_str_tipe=strlen($string_agent);
				$string_os=substr($user_agent,$start_pos,$akhir);
		  
				$os_ver=substr($string_os,$awal_tanda+1,$akhir);
				//ubah versi os
				if ($tipe_os=='Windows NT') {
					if (preg_match('/WOW64/i',$user_agent)) $arch="(64 bit)";
					else $arch="(32 bit)";
					
						if ($os_ver=='6.1') {
							$os_ver="7 $arch";
						}
						elseif ($os_ver=='6.2') {
							$os_ver="8 $arch";
						}
						elseif ($os_ver=='6.3') {
							$os_ver="8.1 $arch";
						}
						elseif ($os_ver=='7.0') {
							$os_ver='2010';
						}
						elseif ($os_ver=='6.0') {
							$os_ver='Vista';
						}
						elseif ($os_ver=='5.2') {
							$os_ver='Server 2003';
						}
						elseif ($os_ver=='5.1') {
							$os_ver='XP';
						}
						elseif ($os_ver=='5.0') {
							$os_ver='2000';
						}
						elseif ($os_ver=='4.0') {
							$os_ver='NT 4';
						}
						else {
							$os_ver='Lainnya';
						}
				}
				elseif ($tipe_os=='Nokia') {
					 $os_ver=substr($string_os,5,$akhir);
				}
				elseif (($tipe_os=='OS X') or ($tipe_os=='iPhone OS')) {
					$cek_os_ver=trim(substr($os_ver,-2));
					if (($cek_os_ver==';') or ($cek_os_ver==")")) {
					     $os_ver=substr($os_ver,0,-2);
					}
					$os_ver=str_replace( '_', '.', $os_ver );
				}
				
		}
}
?>