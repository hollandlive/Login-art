<?php
include_once ('connection.php');
class User {
	private $db;

	public function __construct() {
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}

	public function Login($username, $password) {
		if(!empty($username) && !empty($password)) {
			$statement = $this->db->prepare("SELECT * FROM user WHERE username=? and password=?");
			$statement->bindParam(1, $username);
			$statement->bindParam(2, $password);
			$statement->execute();

			if($statement->rowCount() == 1) {
				
				echo "User Verified, access granted<br>
				Your User Details are:<br>
				$username<br>
				$password<br>";
			} else {
				echo "Incorrect details<br>";
				echo "Please enter username and password
			<form method=\"post\" action=\"index.php\">
			Username: <input type=\"text\" name=\"username\"/><br><br>
			Password: <input type=\"text\" name=\"password\"/><br><br>
			<button class=\"btn btn-large btn-danger\" id=\"alertMe\" input type=\"submit\" name=\"submit\" value=\"login\">Login</button>

			</form>";
			echo "<br>Forgot details? Go to Update your info!";
			echo "<br><a href=\"index.php?content=update\" class=\"btn btn-large btn-primary\" id=\"registerMe\">Update</a><br>";
			}
		} else {
			echo "Please enter username and password
			<form method=\"post\" action=\"index.php\">
			Username: <input type=\"text\" name=\"username\"/><br><br>
			Password: <input type=\"text\" name=\"password\"/><br><br>
			<button class=\"btn btn-large btn-danger\" id=\"alertMe\" input type=\"submit\" name=\"submit\" value=\"login\">Login</button>

			</form>";
		}
	}
	

		public function Register($firstname, $lastname, $email, $username, $password) {
		if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($username) && !empty($password)) {
			$statement = $this->db->prepare("INSERT INTO user (firstname, lastname, email, username, password)
							VALUES (?, ?, ?, ?, ?)
								");
			print_r($statement); 
			$statement->bindParam(1, $firstname);
			$statement->bindParam(2, $lastname);
			$statement->bindParam(3, $email);
			$statement->bindParam(4, $username);
			$statement->bindParam(5, $password);
           	$statement->execute();
            echo $this->db->lastInsertId();

			 
		}
		else  {
			echo "Please enter All details like username etc";
}
}
}
