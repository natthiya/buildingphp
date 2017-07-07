<?php 
		include('config.php');
		
		$sql = "DELETE FROM classroom WHERE id = '".$_GET['id']."'";
		$query = mysqli_query($conn,$sql) or die($conn->error);
		header("Location: editdata.php");
		exit;
?>