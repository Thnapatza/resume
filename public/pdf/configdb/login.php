<?php
$db = mysqli_connect('','admin','root1234','fulluser');

	$serialnumber = $_POST['serialnumber'];
	$password 	  = $_POST['password'];

	$sql = "SELECT * FROM fulluser WHERE serialnumber = '".$serialnumber."' AND password = '".$password."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);
	if ($count == 1) {
		echo json_encode("Success");
	}else{
		echo json_encode("False");
	}



?>