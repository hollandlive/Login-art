
<?php
/*
*This is a PDO OOP PHP(5.3) Login Form I am working on currently
* Oh yes I can do it.
* Author: Artem Aksenov
* Date: 22.02.2016
* Version 1.0
* Used Technologies: PHP <!--HTML5/CSS3/Bootstrap3.5/JS/JQuery-->/
*/

include_once('connection.class.php');

class User {

	private $_db;

	public $username;
	public $password;

	public function __construct() {
		$this->_db = new Connection();
		$this->_db = $this->_db->dbConnect();

		/*$_POST['username'] = $this->username;
		$_POST['password'] = $this->password;
		I could not finish register function because these vars
		were created or smth like this. but if they are not being created 
		upon object is created (instantiated) - then everything works

		*/
		
	}

	public function login($username, $password) {
		$stmt = $this->_db->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
		$stmt->bindValue(':username', $username, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);
		$stmt->execute();
		$userData = $stmt->fetch(PDO::FETCH_ASSOC);
		//$this->rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if ($stmt->rowCount() === 1) {

			$this->loggedIn($userData);
			return $this->display();
		} else {
			echo "wrong";
		 /*return $this->register();*/
		}

	}

	public function register($username, $password) {
		
		
		
		$stmt = $this->_db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
		

		$stmt->bindValue(':username', $username, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);

		$stmt->execute();
		if ($stmt->rowCount() === 1) {
			echo "I inserted something";
		} else {
			echo "wrong ddd";
		 
		}



	}

	public function update() {
		
	}

	public function display() {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		
		print "Hello, " . $_SESSION['username'] . "<br>";
		print "Your Password is " . $_SESSION['password'];
		//echo "I found you!";


	}

	public function loggedIn($userData) {
		$_SESSION['userData'] = $userData['id'];

		$this->username = $_SESSION['username'];
		$this->password = $_SESSION['password'];
		print $this->username;
		print $this->password;
		print $_SESSION['userData'];

	}

}
