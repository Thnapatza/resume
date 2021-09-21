<?php 

	$hostname = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'reg17';

	$link = new mysqli($hostname,$username,$pass,$dbname);

	if ($link->connect_errno) {
		printf('faild database connect',$link->connect_errno);
		exit();
	}

?>