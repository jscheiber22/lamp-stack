<?php

ini_set('display_errors', 1);

// Connect to local mysql server
$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "accountDB";

$conn = new PDO("mysql:host=$servername;dbname=$db", $dbuser, $dbpass);


if (isset($_POST['user'], $_POST['email'])){
	$user = htmlspecialchars($_POST['user']);
	$email = htmlspecialchars($_POST['email']);

	$sqlquery = "INSERT INTO users VALUES (\"$user\", \"$email\")";

	if ($conn->query($sqlquery) === TRUE) {
		echo "Thanks $user.</br>";
		echo "You did good :)";
	} else {
		$error = "You did bad >:(";
	}

} else {
	$error = "You did bad >:(";
}

$conn = null;

?>