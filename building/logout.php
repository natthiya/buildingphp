<?php
	SESSION_START();
	if( isset($_GET["logout"]) )
	{
		unset( $_SESSION["user"] );
		header("Location:login.php");
	}
	else
	{
		header("Location:login.php");
	}
?>