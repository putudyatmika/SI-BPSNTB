<?php
//kumpulan fungsi-fungsi
require 'fungsi_gencode.php';

function tgl_hari_ini() {
	global $hari_ini,$hari_english,$nama_bulan;
	$hari=date('l');
	$bln=date('n');
	$tgl=date('j');
	$tahun=date('Y');
	$hari_ini="$hari_english[$hari], $tgl $nama_bulan[$bln] $tahun";
	return $hari_ini;
}

function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

//fungsi buat thumb produk
function ThumbProduk($NamaFile) {
	$vdir_upload = "../photo_pub/";
	$vfile_upload = $vdir_upload . $NamaFile;
	
	$im_src = imagecreatefromjpeg($vfile_upload);
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);
	
	//simpan thumb 200x200
	if ($src_width > $src_height) {
	  $y = 0;
	  $x = ($src_width - $src_height) / 2;
	  $smallestSide = $src_height;
	} else {
	  $x = 0;
	  $y = ($src_height - $src_width) / 2;
	  $smallestSide = $src_width;
	}

	$dst_width = 200;
	//$dst_height = ($dst_width/$src_width)*$src_height;
	$dst_height = 200;

	//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, $x, $y, $dst_width, $dst_height, $smallestSide, $smallestSide);
	//imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);

	//Simpan gambar
	$dir_thumb="../pic_produk/thumb/";
	imagejpeg($im,$dir_thumb . "thumb_" . $NamaFile);
	
	//buat untuk display 650px 
	if ($src_width<900) { $dst_width=$src_width; $dst_height = ($dst_width/$src_width)*$src_height; }
	else {
		$dst_width = 900;
		$dst_height = ($dst_width/$src_width)*$src_height; 
		if ($src_width < $src_height) { 
		   $dst_height = 900;
		   $dst_width = ($dst_height/$src_height)*$src_width;
		}
	}
	//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	//Simpan gambar
	$dir_display="../pic_produk/display/";
	imagejpeg($im,$dir_display . "display_" . $NamaFile);
	
	//destroy aslinya
	imagedestroy($im_src);
	imagedestroy($im);
}
function ListHalaman($current_hal,$total_hal,$page,$produk_tipe,$produk_kat) {
   $viewHalaman='<ul class="pagination">';
    if ($current_hal>1) $viewHalaman .='<li><a href="index.php?page='.$page.'&produk_tipe='.$produk_tipe.'&produk_kat='.$produk_kat.'&hal='.($current_hal-1).'"><span class="glyphicon glyphicon-backward"></span></a></li>';
   $showPage='';
   for ($hal=1; $hal<=$total_hal; $hal++) {
	if ((($hal >= $current_hal - 3) && ($hal <= $current_hal + 3)) || ($hal == 1) || ($hal == $total_hal))
				 {
					if (($showPage == 1) && ($hal != 2))  $viewHalaman .= '<li><a href="index.php?page='.$page.'&produk_tipe='.$produk_tipe.'&produk_kat='.$produk_kat.'&hal='.($current_hal-5).'">...</a></li>';
					if (($showPage != ($total_hal - 1)) && ($hal == $total_hal))  $viewHalaman .= '<li><a href="index.php?page='.$page.'&produk_tipe='.$produk_tipe.'&produk_kat='.$produk_kat.'&hal='.($current_hal+5).'">...</a></li>';
					if ($hal == $current_hal) $viewHalaman .= '<li class="active"><a href="#">'.$hal.'</a></li>';
					else $viewHalaman .= '<li><a href="index.php?page='.$page.'&produk_tipe='.$produk_tipe.'&produk_kat='.$produk_kat.'&hal='.$hal.'">'.$hal.'</a></li>';
                                        
					$showPage = $hal;
				 }
		}
    if ($current_hal < $total_hal) $viewHalaman .='<li><a href="index.php?page='.$page.'&produk_tipe='.$produk_tipe.'&produk_kat='.$produk_kat.'&hal='.($current_hal+1).'"><span class="glyphicon glyphicon-forward"></span></a></li>';
	$viewHalaman .='</ul>';
    return $viewHalaman;
}
function ListHalamanUrl($url,$current_hal,$total_hal,$page,$act,$url_kategori,$url_tipe) {
   $viewHalaman='<ul class="pagination">';
    if ($current_hal>1) $viewHalaman .='<li><a href="'.$url.'/'.$page.'/'.$act.'/'.$url_kategori.'/'.$url_tipe.'/'.($current_hal-1).'"><span class="glyphicon glyphicon-backward"></span></a></li>';
   $showPage='';
   for ($hal=1; $hal<=$total_hal; $hal++) {
	if ((($hal >= $current_hal - 3) && ($hal <= $current_hal + 3)) || ($hal == 1) || ($hal == $total_hal))
				 {
					if (($showPage == 1) && ($hal != 2))  $viewHalaman .= '<li><a href="'.$url.'/'.$page.'/'.$act.'/'.$url_kategori.'/'.$url_tipe.'/'.($current_hal-5).'">...</a></li>';
					if (($showPage != ($total_hal - 1)) && ($hal == $total_hal))  $viewHalaman .= '<li><a href="'.$url.'/'.$page.'/'.$act.'/'.$url_kategori.'/'.$url_tipe.'/'.($current_hal+5).'">...</a></li>';
					if ($hal == $current_hal) $viewHalaman .= '<li class="active"><a href="#">'.$hal.'</a></li>';
					else $viewHalaman .= '<li><a href="'.$url.'/'.$page.'/'.$act.'/'.$url_kategori.'/'.$url_tipe.'/'.$hal.'">'.$hal.'</a></li>';
                                        
					$showPage = $hal;
				 }
		}
    if ($current_hal < $total_hal) $viewHalaman .='<li><a href="'.$url.'/'.$page.'/'.$act.'/'.$url_kategori.'/'.$url_tipe.'/'.($current_hal+1).'"><span class="glyphicon glyphicon-forward"></span></a></li>';
	$viewHalaman .='</ul>';
    return $viewHalaman;
}

function url_seo($string)
{
 $c = array (' ');
 $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
 $string = str_replace($d, '', $string); // Hilangkan karakter yang telah disebutkan di array $d
 $string = strtolower(str_replace($c, '-', $string)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
 return $string;
}
function hapus_spasi($str)
{
            $res = strtolower($str);
            $res = preg_replace('/[[:space:]]+/', '', $res);
            return trim($res);
}
?>