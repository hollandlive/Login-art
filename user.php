<?php


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
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			if($statement->rowCount() == 1) {
				
				$statement = ($this->isLoggedIn());
				echo "You are logged in. Welcome, $username";
				
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
			
			$statement->bindParam(1, $firstname);
			$statement->bindParam(2, $lastname);
			$statement->bindParam(3, $email);
			$statement->bindParam(4, $username);
			$statement->bindParam(5, $password);
           	$statement->execute();
            
            if($statement) {
            	echo $this->db->lastInsertId();	
            	$userid = $this->db->lastInsertId();
			echo $username . "ggg";
			echo $userid . "idd";
            }
			 
		
		else  {
			echo "Please enter All details like username etc";
            
}
}}


	public function getUser() {
			$username = $_SESSION['username'];
			
			echo $username;
			$statement = $this->db->prepare("SELECT * FROM user WHERE username = '$username'");
			
			$statement->bindParam(1, $username);
			print_r($statement);
			$statement->execute();
			foreach ($this->statement->fetch(PDO::FETCH_ASSOC) as $row)
			{
				echo $row;
			}
/*
	{ 
		echo $row['userid'] . ' - ' . $row['firstname'] . ' - ' . $row['lastname'] . ' - ' . $row['email'] . ' - ' . $row['username'] . ' - ' . $row['password'] . '<br />';
	
	}
		
	if ($this->isLoggedIn()) {
		echo 'You logged in';
		
	} else {
		echo 'go login';
	}
*/


		}


		public function isLoggedIn() {
			if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
				return true;
				echo "Logged2";
			} else {echo "Go Log<br>"; }
		}

		public function logOut() {
			if(isset($_SESSION['username'])) {
			session_destroy();
			unset($_SESSION['username']);
			return true;
		} else {
			echo "You were not logged in";
		}
		}

		public function Update($firstname, $lastname, $email, $username, $password) {
		
		if($this->Login())
{			$statement = $this->db->prepare("UPDATE SET user (firstname, lastname, email, username, password)
							VALUES (?, ?, ?, ?, ?)
								");
			
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
