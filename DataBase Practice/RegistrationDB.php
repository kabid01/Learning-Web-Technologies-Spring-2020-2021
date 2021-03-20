<?php

require "includes/db_connect.inc.php";

session_start();


$username=$password=$cPassword=$email="";
$usernameErr=$passwordErr=$cPasswordErr=$emailErr="";
$uPassInDB="";
$errExits=0;
$regSuccessful="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

	if(empty($_POST['username']))
	{
	  $usernameErr = "Username cannot be empty!";
	  $errExits=1;
	}
	else
	{
      $username = mysqli_real_escape_string($conn, $_POST['username']);
    }

	if(empty($_POST['password']))
	{
	  $passwordErr = "Password cannot be empty!";
	  $errExits=1;
	}
	else
	{
      $password = mysqli_real_escape_string($conn, $_POST['password']);
    }

    if(empty($_POST['cPassword']))
	{
	  $cPasswordErr = "Password cannot be empty!";
	  $errExits=1;
    }
	else
	{
      $cPassword = mysqli_real_escape_string($conn, $_POST['cPassword']);
    }
    
    
    if(empty($_POST['email']))
	{
	  $emailErr = "Email cannot be empty!";
	  $errExits=1;
	}
	else
	{
      $email = mysqli_real_escape_string($conn, $_POST['email']);
    }
  

	if($errExits!=1)
	{
		
			$sqlUsers = "select u_id from ureq where u_name = '$userName'";
      		$results = mysqli_query($conn, $sqlUsers);

			  $rowCount = mysqli_num_rows($results);
			  if($rowCount > 0)
			  {
				$usernameErr = "User already exists!";
			  }
			  else
			  {
				  $sqlInsert = "insert into ureq (u_name, u_pass,  u_email, )
				  values('$username', '$uPassInDB', '$email', );";

				  mysqli_query($conn, $sqlInsert);
				  $regSuccessful = "Registration  successful";
				  header("Location: ./login.php");
			  }
		
		
	}
}

?>
