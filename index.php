<?php
session_start();
include ('header.php');
include_once ('user.php');
if(isset($_POST['submit'])) {
$nextpage = "test";
}


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
				<?php
					if(!isset($_REQUEST['content'])) include('home.php');
						else {
							$content = $_REQUEST['content'];
							$nextpage = $content . '.php';
							include($nextpage);
						}
				?>
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