<?php
include_once ('user.php');
if(isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$object = new User();
	$object->Register($firstname, $lastname, $email, $username, $password);
	echo "Your details are in the datatabse<br />
	First name: $firstname<br />;
	Last Name: $lastname<br />;
	Email: $email<br />;
	Password: $password<br />;
	Username: $username<br />";
} else {
	echo "Fields can not be empty<br><br>

<html>
<body>
<form method=\"post\" action=\"index.php\">
Firstname: <input type=\"text\" name=\"firstname\"/><br><br>
Lastname: <input type=\"text\" name=\"lastname\"/><br><br>
Email: <input type=\"text\" name=\"email\"/><br><br>
Username: <input type=\"text\" name=\"username\"/><br><br>
Password: <input type=\"text\" name=\"password\"/><br><br>
<button class=\"btn btn-large btn-danger\" id=\"alertMe\" input type=\"submit\" name=\"submit\" value=\"register\">Register</button>

</form>
</body>
</html>";

}
?>