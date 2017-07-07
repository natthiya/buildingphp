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
	<link rel="stylesheet" href="back_mem.css">
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
</head>
<body>
	<div class="sidebar-menu-container" id="sidebar-menu-container">
	<div class="sidebar-menu-push">
		<link rel="stylesheet" href="files/css/show.css">
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
	</div>
	</div>
				    <div class="container">
						<div class="page-name">
							<h1>Member</h1>
							
						</div>
					</div>
			<br><br><br><br><br><br>
<center>
    <div class="well" style="width:90%;">
			<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="blog-item">
									<img src="files/images/4.jpg"width="100" height="500" ></a>
									<center><h3>นางสาวณัฐฑิญา  หัตถากรณ์ 001-5</h3></center>
								</div>
							</div>
							<div class="col-md-4">
								<div class="blog-item">
									<img src="files/images/3.jpg" width="100" height="500"  ></a>
									<center><h3>นางสาวสุวิณี  ศรีภูวงษ์  017-1</h3></center>
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="blog-item">
									<img src="files/images/2.jpg" width="100" height="500" ></a>
									<center><h3>นางสาวปภัสรา  อิสสรา 033-8</h3></center>
								</div>
							</div>
						</div>			
			</div>	
	</div>	
</body>
</html>
