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

			$sql = "SELECT * FROM user WHERE username = '$username'";
			$stmt = $this->db->query($sql, PDO::FETCH_ASSOC);
			//echo $username;
			//print_r($statement);
			
			
			//$statement->execute();
			foreach($stmt as $row) 			{
				echo $row['userid'] . ' - ' . $row['firstname'] . ' - ' . $row['lastname'] . ' - ' . $row['email'] . ' - ' . $row['username'] . ' - ' . $row['password'] . '<br />';
				$userid = $row['userid'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$username = $row['username'];
				$password = $row['password'];
				echo"<br>Hi $username, ur details are:<br>";
				echo"<br>userid is $userid<br>";
				echo"<br>firstname is $firstname<br>";
				echo"<br>lastname is $lastname<br>";
				echo"<br>email is $email<br>";
				echo"<br>username is $username<br>";
				echo"<br>password is $password<br>";

				echo "Update Details:<br><br>";



           	}

			}



	public function Update() {
			$username = $_SESSION['username'];
			
			
			$sql = "SELECT * FROM user WHERE username = '$username'";
			$stmt = $this->db->query($sql, PDO::FETCH_ASSOC);
			echo $username;
			//print_r($statement);
			
			
			//$statement->execute();
			foreach($stmt as $row) 			{
				echo $row['userid'] . ' - ' . $row['firstname'] . ' - ' . $row['lastname'] . ' - ' . $row['email'] . ' - ' . $row['username'] . ' - ' . $row['password'] . '<br />';
				$userid = $row['userid'];
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$username = $row['username'];
				$password = $row['password'];
				echo"<br>Hi $username, ur details are:<br>";
				echo"<br>userid is $userid<br>";
				echo"<br>firstname is $firstname<br>";
				echo"<br>lastname is $lastname<br>";
				echo"<br>email is $email<br>";
				echo"<br>username is $username<br>";
				echo"<br>password is $password<br>";

				echo "Update Details:<br><br>";


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $row['password'];

$sql = "UPDATE user SET 
					firstname = :firstname, 
					lastname = :lastname, 
					email = :email, 
					username = :username,
					password = :password
					WHERE userid = :userid";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(1, $firstname);
			$stmt->bindParam(2, $lastname);
			$stmt->bindParam(3, $email);
			$stmt->bindParam(4, $username);
			$stmt->bindParam(5, $password);
			$stmt->bindParam(6, $userid);
			
           	$stmt->execute(array(':userid' => $userid,
           							':firstname' => $firstname, 
           						 ':lastname' => $lastname, 
           						 ':email' => $email, 
           						 ':username' => $username, 
           						 ':password' => $password


           								));
           	if ($stmt->rowCount() == 1) {
           		echo "Sucessfully updated";
           	} else {echo "wrong";}

           	}

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

/*
public function Update($firstname, $lastname, $email, $username, $password) {
	
	if($this->getUser()) {

			
			$statement = $this->db->prepare("UPDATE SET user (firstname, lastname, email, username, password)
							VALUES (?, ?, ?, ?, ?)
								");
			
			$statement->bindParam(1, $firstname);
			$statement->bindParam(2, $lastname);
			$statement->bindParam(3, $email);
			$statement->bindParam(4, $username);
			$statement->bindParam(5, $password);
           	$statement->execute();
} else {$this->getUser(); }
}*/
/*
		public function Update($firstname, $lastname, $email, $username, $password) {
	if ($this->isLoggedIn()) {
		$this->getUser();
		 }
			$userid = $row['userid'];
			$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$username = $row['username'];
				$password = $row['password'];
				echo "my email is $email";
		}
		






*/





	}/*	
$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$statement = $this->db->prepare("UPDATE SET user (firstname, lastname, email, username, password)
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
		
*/

