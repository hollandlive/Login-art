<?php
include_once ('user.php');
if(isset($_POST['submit'])) {

	switch ($_POST['submit']) {
		case "login":
		include ('login.php');
		break;

		case "register":
		include ('register.php');
		break;

		case "update";
		include ('update.php');
		break;

		default:
			include ('home.php');
		
	}


}
?>

<br><br><h3>What Would You like to do?</h3><br><br>
<p>I have Login details, I would like to login</p>
<a href="index.php?content=login" class="btn btn-large btn-danger" id="alertMe">Login</a><br><br>
<p>I don't have Login details, I would like to Register</p>
<a href="index.php?content=register" class="btn btn-large btn-info" id="registerMe">Register</a><br><br>
<p>I have Login details, and I would like to Update them</p>
<a href="index.php?content=update" class="btn btn-large btn-primary" id="registerMe">Update</a>

