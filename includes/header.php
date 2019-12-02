<!DOCTYPE>
<html>

<head>
	<title>E-car leasing service | Home :: Nigeria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<!--start-main-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html">
						<h1>E-CAR LEASING SERVICE <img src="images/bk71.jpg" alt=""></h1>
					</a>
				</div>
				<div class="search">
					<form method="post" action="grab.php">
						<input type="text" name="search" placeholder="Search Customer" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" name="submit" value="">
					</form>
				</div>
				<div class="social">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="facebook twitter"> </a></li>
						<li><a href="#" class="facebook chrome"> </a></li>
						<li><a href="#" class="facebook in"> </a></li>
						<li><a href="#" class="facebook beh"> </a></li>
						<li><a href="#" class="facebook vem"> </a></li>
						<li><a href="#" class="facebook yout"> </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<!--head-bottom-->
		<div class="head-bottom">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<?php if (isset($_SESSION['is_log_in'])) : ?>
							<li><a href="index.php">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
							<li><a href="register.php">REGISTER CAR</a></li>
							<li><a href="world.php">world</a></li>
							<li><a href="view.php">View order</a></li>
							<li><a href="logout.php">Log out</a></li>
							<li><a href="contact.php">Contact</a></li>
						<?php else : ?>
							<li><a href="login.php">Verify Code</a></li>
							<li><a href="world.php">NEW PRODUCT</a></li>
							<li><a href="business.php">Business</a></li>
							<li><a href="world.php">world</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php">login</a></li>
						<?php endif; ?>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			</nav>
		</div>
		<!--head-bottom-->
	</div>