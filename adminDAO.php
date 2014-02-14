<?php
include_once('dbconfig.php');

class adminDAO{

	public static function viewListOfExaminee(){
		$query = 'SELECT * FROM examinee';
	}
}

?>