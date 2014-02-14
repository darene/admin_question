<?php

$config = array(
				'host' => 'localhost',
				'password' => '',
				'username' => 'root',
				'database' => 'onlineexamination'
			);

$db = new mysqli(
				$config['host'],
				$config['username'],
				$config['password'],
				$config['database']
			);

if (mysqli_connect_errno()) {
	echo "Database not connected";
}


?>