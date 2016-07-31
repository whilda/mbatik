<?php

	include 'conn.php';
	
	$rs = mysqli_query($conn,"select * from transactions");
	
	$items = array();
	while($row = mysqli_fetch_assoc($rs)){
		array_push($items, $row);
	}
	
	echo json_encode($items);
?>