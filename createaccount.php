<?php

if (isset($_POST['user'], $_POST['email'])){
	$user = htmlspecialchars($_POST['user']);
	$email = htmlspecialchars($_POST['email']);

	echo "Thanks $user.</br>";
	echo "You did good :)";
} else {
	echo "You did bad >:(";
}

?>