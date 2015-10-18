<?php
include_once ('user.php');
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$object = new User();
	$object->Login($username, $password);

} else {
	echo "Fields can not be empty<br><br>

<html>
<body>
<form method=\"post\" action=\"index.php\">
Username: <input type=\"text\" name=\"username\"/><br><br>
Password: <input type=\"text\" name=\"password\"/><br><br>
<button class=\"btn btn-large btn-danger\" id=\"alertMe\" input type=\"submit\" name=\"submit\" value=\"login\">Login</button>

</form>
</body>
</html>";

}
?>