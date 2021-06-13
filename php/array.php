<?php
	$arr = array();//decleare
	$arr2= [];
	
	$arr3 = array("tanvir","sabbir","karim");
	$arr3[3] = "rafiq";
	$arr3[4] = "sattar";
	
	$arr3[] = "borkot"; //index 5
	$arr3[] = "jobbar"; //index 6
	
	$arr[] = 1; // 0
	$arr[] = 145; // 1
	
	$arr2[] = "asw";
	$arr2[] = "ase";
	
	for($i=0;$i<count($arr3);$i++){
		echo $arr3[$i].'<br>';
	}
	
	foreach($arr3 as $e){
		echo $e.'<br>';
	}
	
	//associate array
	$arr4= array();
	$arr5 = [];
	
	
	
	
	
?>