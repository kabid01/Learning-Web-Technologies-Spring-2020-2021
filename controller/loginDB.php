<?php

require "includes/db_connect.inc.php";

if (isset($_SESSION['user_name'])) {
    //header("../login.php");
}

session_start();

$username = $password = "";
$usernameErr = $passwordErr = "";
$uPassInDB = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['username'])) {
		$usernameErr = "Username cannot be empty!";
	} else {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
	}

	if (empty($_POST['password'])) {
		$passwordErr = "Password cannot be empty!";
	} else {
		$password = mysqli_real_escape_string($conn, $_POST['password']);
	}
	if (!empty($username) && !empty($password)) {
		 {
			$sqlUserCheck = "select a_pass from user where a_name = '$username';";
			$resultUserCheck = mysqli_query($conn, $sqlUserCheck);
			$userCount = mysqli_num_rows($resultUserCheck);

			if ($userCount < 1) {
				$usernameErr = "User does not exist";
			} else {
				while ($row = mysqli_fetch_assoc($resultUserCheck)) {
					$uPassInDB = $row['a_pass'];
				}
				$a = password_verify($password, $uPassInDB);
				echo "$a";
				if (password_verify($password, $uPassInDB)) {
					$_SESSION["user_name"] = $username;
						
				} else {
					$passwordErr = "Wrong password!";
				}
			}
		}  
		
	}
}
?>