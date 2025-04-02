<?php
	include "includes/db.php";
if(isset($_POST["view"])){
// $output = '';
	if($_POST["view"] != ''){
		$update_query="UPDATE bookings SET state = 1 WHERE state = 0";
		mysqli_query($connection,$update_query);
	}
	$query = "SELECT * FROM bookings ";
	$result=mysqli_query($connection,$query);
	$output = '';
	if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_array($result)){
			$product_id=$row['id'];
			
			$date=$row['date'];

	
			
			



			$output .='
			<li>
		
			
			<strong>'.$row["house_id"].'</strong><br/>
			<b>ID NO:</b><strong>'.$row["tenant_id"].'</strong>
			<small><em>'.$row["status"].'</em></small>
			<small><em>'.$row["date"].'</em></small>
			</a>

			</li>
			<li class ="divider"></li>

			';
		
		}
	}else{
		$output.='<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
	}

	
	
	$query_1="SELECT * FROM bookings WHERE state = 0 ";
	$result_1=mysqli_query($connection,$query_1);
	$count=mysqli_num_rows($result_1);
	$data=array(
		 'notification' => $output,
		'unseen_notification' => $count
	);

	echo json_encode($data);
}

?>