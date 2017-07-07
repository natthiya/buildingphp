<?php 
	include('config.php');
	session_start();
	
			
		echo ''.$_POST["building_name"].'<br>';
		echo ''.$_POST["class_num"].'<br>';
		echo ''.$_POST["classroom_type"].'<br>';
		echo ''.$_POST["seating"].'<br>';
		echo ''.$_POST["room_num"].'<br>';
		
		
		$sql = "INSERT INTO `classroom` (`building_name`, class_num, `classroom_type`, `seating`, `room_num`) 
				VALUES('".$_POST["building_name"]."','".$_POST["class_num"]."','".$_POST["classroom_type"]."','".$_POST["seating"]."',
				'".$_POST["room_num"]."')";
		$query = mysqli_query($conn,$sql) or die ($conn->error);
		header("Location:adddata.php");
     	exit;
	

?>
