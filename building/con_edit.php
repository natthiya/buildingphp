<?php
		include('config.php');
		$sql = "UPDATE classroom SET building_name = '".$_POST["building_name"]."',
				class_num = '".$_POST["class_num"]."',
				classroom_type = '".$_POST["classroom_type"]."' ,
				seating = '".$_POST["seating"]."',
				room_num = '".$_POST["room_num"]."'
				WHERE id = '".$_POST["id"]."'";
		$query = mysqli_query($conn,$sql);
		
		header("Location: edit.php");
		exit;
					
						
?>
