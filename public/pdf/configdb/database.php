<?php 

	$hostname = '';
	$username = 'admin';
	$pass = 'root1234';
	$dbname = 'fulluser';

	$link = new mysqli($hostname,$username,$pass,$dbname);

	if ($link->connect_errno) {
		printf('faild database connect',$link->connect_errno);
		exit();
	}

?>