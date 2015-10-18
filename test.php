<?php
session_start();
include ('header.php');
include_once ('user2.class.php');

//$_SESSION['user'] = $user_session;

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
			<form action="test2.php" method="post">

				<div class="field">
					<label for="username">First Name</label>
					<input type="text" name="firstname" id="firstname" value="" autocomplete="off">
				
				</div>

				<div class="field">
					<label for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" value="" autocomplete="off">
				</div>

				<div class="field">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" value="" autocomplete="off">
				</div>

				<div class="field">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" value="" autocomplete="off">
				</div>

				<div class="field">
					<label for="password">Choose a password</label>
					<input type="password" name="password" id="password">
				</div>

				<div class="field">
					<label for="password2">Password again</label>
					<input type="password" name="password2" id="password2">
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
<?php
$_SESSION['user_session'] = array (
$_SESSION['username'] = $username,
$_SESSION['password'] = 'password',
	);
?>