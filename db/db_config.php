<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="wt_sum21_b";
	
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	
	if($conn){
		/*$query = "insert into users values (NULL,'Fahim haque','fahim01','12357')";
		if(!mysqli_query($conn,$query )){
			echo mysqli_error($conn);
		}
		else{
			echo "Success";
		}*/
	}
	else {
		echo "not connected";
	}
?>