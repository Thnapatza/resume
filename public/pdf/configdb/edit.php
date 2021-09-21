<?php 

	include 'database.php';

	$edittextbox = $_POST['edittextbox'];

	$link->query("UPDATE fulluser SET edittextbox = '".$edittextbox."'");


?>