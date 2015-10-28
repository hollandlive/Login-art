<?php
include_once ('user.php');
$object = new User();

if($object->isLoggedIn() && isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$object->Update();
	

} else {

	echo "Something is wrong";
}
	{
	$object->getUser();
					echo " Put into your updated details

<html>
<body>
<form method=\"post\" action=\"index.php\">
Firstname: <input type=\"text\" name=\"firstname\"/><br><br>
Lastname: <input type=\"text\" name=\"lastname\"/><br><br>
Email: <input type=\"text\" name=\"email\"/><br><br>
Username: <input type=\"text\" name=\"username\"/><br><br>
Password: <input type=\"text\" name=\"password\"/><br><br>
<button class=\"btn btn-large btn-danger\" id=\"alertMe\" input type=\"submit\" name=\"submit\" value=\"update\">Update</button>

</form>
</body>
</html>";


}

?>
