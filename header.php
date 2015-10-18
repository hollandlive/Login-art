<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title></title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">
		<!--<link rel="stylesheet/less" type="text/css" href="less/bootstrap.less" />-->
		
		<!--Extra Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		<script src="includes/js/less.min.js"></script>
		
	</head>
	<body>
	<!--begin .container #main-->
	<div class="container" id="main">

<div class="navbar navbar-fixed-top">
	<div class="container">
		
		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	
		<a class="navbar-brand" href="/"><img src="images/logo.png" alt="Your Logo"></a>
		
		<div class="nav-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				
			</ul>
			
				<form class="navbar-form pull-left">
					<input type="text" class="form-control" placeholder="Search" id="searchInput"></li>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				</form><!-- end navbar-form -->

			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" id="myAccount"></span>My account<strong class="caret"></strong></a>
					
					<ul class="dropdown-menu">
						<li>
							<a href="index.php?content=login"><span class="glyphicon glyphicon-wrench"></span> Login</a>
						</li>
						<li>
							<a href="index.php?content=register"><span class="glyphicon glyphicon-briefcase"></span> Register</a>
						</li>
						
						<li>
							<a href="index.php?content=update"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
						</li>						
						<li class="divider"></li>
						
						<li>
							<a href="index.php?content=home"><span class="glyphicon glyphicon-off"></span> Sign out</a>
						</li>


					</ul>
				</li>
			</ul><!-- end nav pull-right -->
		</div><!-- end nav-collapse -->
	
	</div><!-- end container -->
</div><!-- end navbar -->



		<!--begin .carousel slide #myCarousel-->
		<div class="carousel slide" id="myCarousel">

			<!--indicators-->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
			</ol>

			<!--Wrapper for slides-->
			<div class="carousel-inner">
				<div class="item active" id="slide1">
					<div class="carousel-caption">
						<h4>Arthemis Bootstrap template</h4>
						<p>Use this simple Bootstrap Template for your projects</p>
					</div>
				</div>

				<div class="item" id="slide2">
					<div class="carousel-caption">
						<h4>Very Simple in Customization</h4>
						<p>Customize this template for your business or blog homepage or marketing landing page</p>
					</div>
				</div>

				<div class="item" id="slide3">
					<div class="carousel-caption">
						<h4>Use it for an ecommecre</h4>
						<p>Customize this template and add some code chuncks in PHP to turn it into the ecommerce platform</p>
					</div>
				</div>
			</div><!--/.end carousel-inner-->

			<!--Controls-->
			<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
			<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>

		</div><!--/.end .carousel slide #myCarousel-->