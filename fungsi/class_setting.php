<?php
class SettingWeb
{
	public $settingNama;
	public function setSetting($var) {
		$this->settingNama=$var;
	}
	public function getSetting() {
		//$db = new mysqli(db_host,db_user,db_pass,db_name);
		$db = new db();
		$conn = $db->connect();
		$sql_nilai_setting = $conn -> query("select * from settings where setting_nama='".$this->settingNama."'");
		$r = $sql_nilai_setting ->fetch_object();
		$this->settingNilai= $r->setting_nilai;
		return $this->settingNilai;
		$conn -> close();
	}
}
?>