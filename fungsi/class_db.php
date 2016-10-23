<?php
class db
{
	public function connect() {
		$mysqli = new mysqli(db_host,db_user,db_pass,db_name);
	if (mysqli_connect_errno()) {
			printf("Connection Error : %s", mysqli_connect_errno());
			exit();
	}
		return $mysqli;
	}
}
?>
