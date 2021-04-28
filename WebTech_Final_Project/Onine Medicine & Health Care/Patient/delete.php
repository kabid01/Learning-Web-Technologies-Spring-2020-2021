<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

			$conn = mysqli_connect("localhost", "root", "","webdatabase");
		    
		    $sql1="DELETE FROM `patient` WHERE email='".$_COOKIE["email"]."'";
		    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));

		
		echo "<br/>";
        echo "<h2>Successfully Deleted Account </h2>";   
	}
else{
	header("Location:logout.php");
    }
}
?>
<br/><h2><a style="text-decoration: none" href="PatientRegistration.php">Sign up</a></h2> 
<h2> Have another account?<a style="text-decoration: none" href="login.php">Login</a></h2><br/>