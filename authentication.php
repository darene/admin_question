<?php 
$adminPassword = 'pass';
$adminUsername = 'admin';

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(($username == $adminUsername) && ($password == $adminPassword)){
		header('Location: home.php');
	}else{
		echo "sorry";
	}

}else{
	echo "sorry";
}




?>