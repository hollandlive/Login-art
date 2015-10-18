<?php
$host = 'localhost';
$dbname = 'login';
$user = 'user';
$password = 'pass';

function mijnfout() {
	throw new Exception('FOUT!');
}

try {

$db = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

///
$db = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
$sql = "SELECT * FROM  user";
$stmt = $db->query($sql, PDO::FETCH_ASSOC);

foreach($stmt as $row) {
	print_r($row);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}


///


$sql = "SELECT * FROM user";
$stmt = $db->query($sql, PDO::FETCH_ASSOC);

foreach ($stmt as $row)
{
	echo $row['username'] . ' - ' . $row['email'] . '<br>';

	var_dump($row)
}

$stmt1 = "UPDATE user SET name = 'Pieter' WHERE id = 1";
$affectedRows = $db->exec($stmt1);
echo $affectedRows;

foreach ($stmt as $row)
{
	echo $row['username'] . ' - ' . $row['email'] . '<br>';

	var_dump($row)
}
//insert
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$name = $db->quote($_POST['name']);
$email = $db->quote($_POST['email']);
$username = $db->quote($_POST['username']);
$password = md5($_POST['password']);
//
$sql2 = "
	INSERT INTO user (
		name, email, username, password
		)
VALUES (
	" . $name . ",
	" . $email . ",
	" . $username . ",
	" . $password . "
	)
";

$affRows = $db->exec($sql2);
$insertId = $db->lastInsertId();

echo 'affected rows' . $affRows;
echo '<br>';
echo 'Last Inserted Id' . $insertId;

/////

$users = array(

	'name' => 'Jan',
	'email' => 'jan@deboer.nl',
	'username' => 'jandeboer';
	'password' => 'jan1234';
	),

array (
	'name' => 'Piet';
	'email' => 'piet@klassen.nl',
	'username' => 'pietklassen',
	'password' => 'piet1234'
	)
	);

try {
	//insert query
	$sql = "INSERT INTO user (name, email, username, password)
		VALUES (:name, :email, :username, :password)
	";
	//prepare query
	$stmt = $db->prepare($sql);

	//execute the query inserting one user
	foreach ($users as $user) {
		$stmt->execute($user);
	}

	echo $db->lastInsertId();
}

catch(PDOException $e)
{
	echo $e->getMessage();
}



$user = array (
	'id' => 1,
	'name' => 'Jan',
	'email' => 'jan@kkk.nl'
	);

try {
	$sql = "
	UPDATE = 
		user
	SET
		name =:name,
		email =:email
	WHERE
		id = :id
	";

	//Prepare the query
	$stmt = $db->prepare($sql);
	//execute the query inserting one user
	$stmt ->execute($user);

	//with named queries we test with rowCount
	if($stmt->rowCount() == 0)
	{
		throw new PDOException('No updates');
	}

	catch(PDOException $e)
{
	echo $e->getMessage();
}

}

////




try {

	$sql = "SELECT * WHERE username = :username";

	$stmt =$db->prepare($sql);
	$stmt->execute($user);

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo $row['name']. '<br>';
	}

	catch(PDOException $e) {
		echo $e->getMessage();
	}
}

?>