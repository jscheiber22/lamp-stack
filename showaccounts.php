<?php

ini_set('display_errors', 1);

$servername = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$db = 'accountDB';
$table = 'users';

$conn = new PDO("mysql:host=$servername;dbname=$db", $dbuser, $dbpass);
// if ($conn->connect_error){
// 	die("Failed" . $conn->connect_error);
// }

$query = "SELECT * FROM $table";
// $result = $conn->query($query);

$result = $conn->prepare($query);
$result->execute();

$users = $result->fetchAll();
if (count($users) > 0){
	foreach($users as $user){
		echo $user['name'] . '<br>';
		echo $user['email'] . '<br><br>';
	}
} else {
	echo '0 results :(';
}


$conn = null;

?>