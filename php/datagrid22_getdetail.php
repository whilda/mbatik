<?php

	include 'conn.php';
	
	$transid = mysqli_real_escape_string($conn,$_REQUEST['transaction_id']);
	
	$rs = mysqli_query($conn,"select * from detail_transactions d,items i where d.item_id=i.id and d.trans_id=".$transid);
	$items = array();
	while($row = mysqli_fetch_assoc($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);


?>
