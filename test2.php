<?php

include ('header.php');
include_once ('user2.class.php');
//$user_session = $_SESSION['user'];
//echo($_SESSION['user_session'][0]);

?>



		<!--begin .row #bigCallout-->
		<div class="row" id="bigCallout">
	<div class="col-12">
		
		<div class="alert alert-success alert-block fade in" id="successAlert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			
			<h4>Cookies</h4>
			<p>This webs-ite is using cookies. 
			<button class="btn btn-small btn-danger close" data-dismiss="alert">Understand</button></p>
		</div><!-- end alert -->



<!--this snippet is not workine yet-->
		<!--begin #registerMe-->
		<div class="alert alert-success alert-block fade in" id="registerSucces">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			
			<h4>Registration Form</h4>
			<p>This webs-ite is using cookies. 
			<button class="btn btn-small btn-danger close" data-dismiss="alert">Understand</button></p>
		</div><!-- end alert -->


		
		<!-- Visible only on small devices -->
		<div class="well well-small visible-sm">
			<a href="http://arthem.info/#contact" class="btn btn-large btn-block btn-default"><span class="glyphicon glyphicon-phone"></span> Give us a call!</a>
		</div><!-- end well-small -->
		
		<div class="well">
			<div class="page-header">
				<h1>Welcome to this simple registration page <br><small style="color: white"> in PHP/CSS/HTML</small></h1>
			</div><!-- end page-header -->
			
			<p class="lead">You can try it yourself NOW</p>
			
			<a href="register.php" class="btn btn-large btn-danger" id="alertMe">More Info</a>
			<a href="index.php?content=register" class="btn btn-large btn-link" id="registerMe">REGISTER NOW!</a>
		

		<div id="content" class="row">
<div id="nav" class="col-sm-3">
	<?php include("nav.php"); ?>
</div>

		<div id = "main" class="col-sm-6">
			<form action="test2" method="post">

				<div class="field">
					<h3>Your FirstName is: </h3>
				<h3><?php echo ($user->getFirstName($user)); ?></h3>
				</div>

				<div class="field">
					<h3>Your LastName is: </h3>
					<h3><?php echo ($user->getLastName($user)); ?></h3>
				</div>

				<div class="field">
					<h3>Your Email is:</h3>
					<h3><?php echo ($user->getEmail($user)); ?></h3>
				</div>

				<div class="field">
					<h3>Your Username is: </h3>
					<h3><?php echo ($user->getUsername($user)); ?></h3>
				</div>

				<div class="field">
					<h3>Your Password is:</h3>
					<h3><?php echo ($user->getPassword($user)); ?></h3>
				</div>

				<input type="submit" value="Register">
			</form>

		</div>
		<div id="sidebar" class="col-sm-3">
	<?php include("sidebar.php"); ?>
</div>
		</div>
	</div><!-- end well -->
		
	</div><!-- end col-12 -->
</div>
	
</div><!-- end container -->
<?php include ('footer.php'); ?>