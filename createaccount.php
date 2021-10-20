<?php

ini_set('display_errors', 1);

// Connect to local mysql server
$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "accountDB";

$conn = new PDO("mysql:host=$servername;dbname=$db", $dbuser, $dbpass);
// if ($conn->connect_error){
// 	die("Failed" . $conn->connect_error);
// }

if (isset($_POST['user'], $_POST['email'])){
	$user = htmlspecialchars($_POST['user']);
	$email = htmlspecialchars($_POST['email']);

	$sqlquery = "INSERT INTO users VALUES (\"$user\", \"$email\")";
	$statement = $conn->prepare($sqlquery);
	$statement->execute();

	// if ($conn->query($sqlquery) === TRUE) {
	// 	echo "Thanks $user.</br>";
	// 	echo "You did good :)";
	// } else {
	// 	$error = "You did bad >:(";
	// }

} else {
	$error = "You did bad >:(";
}

?>