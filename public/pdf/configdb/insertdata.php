<?php 
	$db = mysqli_connect('localhost','root','','reg17');
	if(!$db){
		echo "Faild";
	}
	$serialnumber = $_POST['serialnumber'];
	$password =  $_POST['password'];
	$fristname = $_POST['fristname'];
	$lastname = $_POST['lastname'];
	$image = $_POST['image'];
	$rank = $_POST['rank'];
	$agency = $_POST['agency'];
	$brithday = $_POST['brithday'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
 	$pdf = $_POST['pdf'];
	$sql = "SELECT * FROM fulluser WHERE serialnumber = '".$serialnumber."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);
	//print($count);
	if($count == 1){
		echo json_encode("error555");
	}else{
		$insert = "INSERT INTO fulluser(serialnumber,password,fristname,lastname,image,rank,agency,brithday,tel,email,pdf)VALUES 
		('".$serialnumber."'
		,'".$password."'
		,'".$fristname."'
		,'".$lastname."'
		,'".$image."'
		,'".$rank."'
		,'".$agency."'
		,'".$brithday."'
		,'".$tel."'
		,'".$email."'
		,'".$pdf."')";
		$query = mysqli_query($db,$insert);
		if($query){
			echo json_encode("Success");
		}
	}
?>