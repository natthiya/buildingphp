<?php 
session_start();
if( !isset($_SESSION["user"]) )
{
	header("Location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<title>Building</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="files/css/show.css">

	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
<link rel="stylesheet" href="files/rs-plugin/css/settings.css">

	

	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
	
</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="home.php">Building</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="home.php">Home</a></li>
									<li><a href="ERD.php">ERD</a></li>
									<li><a href="show.php">Report</a></li>
									<li><a href="adddata.php">Adddata</a></li>
									<li><a href="editdata.php">Edit</a></li>
									<li><a href="member.php">Member</a></li>
									<li><a href="logout.php?logout=">Log out</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>
<br><br><br><br><br>
<center>
<div class="well" style="width:80%;">
  <h2>ข้อมูลห้องเรียน</h2><br>
    <table class="table">
    <thead>
       <tr class="info">
        <th>อาคาร</th>
        <th>ชั้น</th>
        <th>ประเภทห้อง</th>
        <th>จำนวนที่นั่ง</th>
        <th>หมายเลขห้อง</th>
        </tr>
    </thead>
<?php
include("config.php");
$query = mysqli_query($conn, "SELECT * FROM classroom ");
			while($row = mysqli_fetch_array($query))
			{
				echo'
					<form action="adddata.php" method="post" name="addtocart">	
						<tbody>
						  <tr>
							<td>'.$row['building_name'].'</td>
							<td>'.$row['class_num'].'</td>
							<td>'.$row['classroom_type'].'</td>
							<td>'.$row['seating'].'</td>
							<td>'.$row['room_num'].'</td>
						  </tr>
						
					</form>';

			}
?>
						</tbody>
	</table>
</div>
</center>
</body>
</html>