<?php 

	
include 'database.php';

	$result = $link->query("SELECT * FROM fulluser ORDER BY id DESC");
	$list = array();
	if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$list[] = $row;
		}
	echo json_encode($list);
}









































// include 'database.php';

// 	$query = $link->query('SELECT * FROM person');
// 	$result = array();

// 	while ($rowdata = $query->fetch_assoc()) {
// 		$result[] = $rowdata;
// 	}
// 	echo json_encode($result);