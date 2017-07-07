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

	<link rel="stylesheet" href="files/css/show.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	  
    <link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
			</div>
		</div>
					
					
				</header>
		<br><br><br><br><br>
		<center>
	<div class="well" style="width:50%;">
	<h2>เพิ่มข้อมูลของอาคารเรียน</h2>
	<form name="adddata" method="post" action="con_add.php">
    <div class="form-group">
      <label for="sel1">อาคาร</label>
      <select class="form-control" id="sel1" name="building_name" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
      <br>
	  <label for="sel1">จำนวนชั้น</label>
      <select class="form-control" id="sel1" name="class_num">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
		<option>5</option>
        <option>6</option>
        <option>7</option>
		<option>8</option>
      </select>
      <br>
	<label for="sel1">ประเภทห้อง</label>
     <select class="form-control" id="sel1" name="classroom_type">
      <option>ห้องหมวดวิชาคณิตศาสตร์</option>
      <option>ห้องหมวดวิชาสังคมศึกษา</option>
	  <option>ห้องหมวดวิชาวิทยาศาสตร์</option>
      <option>ห้องหมวดวิชาภาษาอังกฤษ</option>
	  <option>ห้องหมวดวิชาภาษาไทย</option>
      <option>ห้องหมวดวิชาคอมพิวเตอร์</option>
	  <option>ห้องหมวดวิชาศิลปะ</option>
      <option>ห้องหมวดวิชาสุขศึกษา</option>
      </select>
      <br>
	  <label for="sel1">จำนวนที่นั่ง</label>
      <select class="form-control" id="sel1" name="seating">
      <option>30</option>
      <option>50</option>
	  <option>100</option>
      <option>500</option>
	  <option>1000</option>
      </select>
      <br>
	  
	  
    <div class="form-group">
      <label for="usr">หมายเลขห้อง :</label>
      <input type="text" class="form-control" id="usr" name="room_num" required>
    </div>
	<button type="submit" class="btn btn-default">เพิ่มข้อมูล </button>
	</form>
	</div>
	</div>
    </div>
	</center>
</body>


</html>