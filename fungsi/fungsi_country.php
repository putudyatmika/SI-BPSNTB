<?php
function list_country($country_id) {
	global $listCountry;
	if ($country_id=='') $negara_id='';
	else $negara_id=$country_id;
	$db = new db();
	$conn = $db->connect();
	$sql_list_country = $conn -> query("select * from negara order by negara_nama asc");
	$cek=$sql_list_country->num_rows;
	if ($cek>0) {
		$listCountry='';
	   while ($r=$sql_list_country->fetch_object()) { 
			if ($r->negara_kode==$negara_id)  $selected='selected="selected"';
			else $selected='';
			$listCountry .= '<option value="'.$r->negara_kode.'" '.$selected.'>'.$r->negara_nama.'</option>';	   
	   }
	}
	else {
	 $listCountry='';
	}
	return $listCountry;
}
function get_nama_country($country_id) {
	global $nama_country;
	$db = new db();
	$conn = $db->connect();
	$sql_nama_country = $conn -> query("select * from negara where negara_kode='".$country_id."'");
	$cek=$sql_nama_country->num_rows;
	if ($cek>0) {
	   $nama_country='';
	   while ($r=$sql_nama_country->fetch_object()) { 
			$nama_country = $r->negara_nama;	   
	   }
	}
	else {
	 $nama_country='';
	}
	return $nama_country;
}
?>