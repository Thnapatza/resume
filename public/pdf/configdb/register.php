<?php
	$db = mysqli_connect('','admin','root1234','fulluser');
	if (!$db) {
		echo "Database connection faild";
	}

	$serialnumber = $_POST['serialnumber'];
	$password = $_POST['password'];

	$sql = "SELECT serialnumber FROM user WHERE serialnumber = '".$serialnumber."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$insert = "INSERT INTO user(serialnumber,password)VALUES('".$serialnumber."','".$password."')";
		$query = mysqli_query($db,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}

?>