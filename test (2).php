<?php
$host = 'localhost';
$dbname = 'test';
$user = 'root';
$password = '';
$db = new PDO('mysql:host='.$host.';$dbname='.$dbname.'', $user);
$db->settAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$sql = "SELECT * FROM user";
$stmt = $db->query($sql, PDO::FETCH_ASSOC);

foreach ($stmt as $row)
{
	echo $row['username'] . ' - ' . $email['email'] . '<br>';
}
?>