<?php
	session_start();
	if( isset($_SESSION["user"]) ) 
	{
		
		header("Location:home.php");
		exit;
			
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Building</title>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="files/css/style1.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
</head>
<body>
<form name="login" method="post" action="config_login.php">
	<div class="sidebar-menu-container" id="sidebar-menu-container">
		<div class="sidebar-menu-push">
			<div class="sidebar-menu-overlay"></div>
			<div class="disable_select">
				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="home1.php">Building</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="home1.php">Home</a></li>
									<li><a href="login.php">Login</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>	
			</div>
		</div>
	</div>
	<div class="form">
	<div class="forceColor"></div>
	<div class="topbar">
    <div class="spanColor"></div>
    <input type="username" class="input" id="user" placeholder="username"name="user" required />
	<input type="password" class="input" id="password" placeholder="Password"name="password" required />
	</div>
	<button type="submit"  value="Submit" class="submit" id="submit" >Login</button>
	</form>
	</div>
</body>
</html>