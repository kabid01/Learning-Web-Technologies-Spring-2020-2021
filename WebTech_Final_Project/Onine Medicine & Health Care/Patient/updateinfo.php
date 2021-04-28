<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

   if(strlen($_REQUEST["password"])==0 || strlen($_REQUEST["newpassword"])==0 || strlen($_REQUEST["confirmpassword"])==0)
     {
	     echo "<p style='color:red' > All fields are mandatory!";?>
	     <br><a style="text-decoration: none" href="updatepassword.php">Previous</a><br/><?php
     }
    else if($_COOKIE["password"]!= $_REQUEST["password"])
     {
	     echo "<p style='color:red' > Old Password must match";?>
	     <br><a style="text-decoration: none" href="updatepassword.php">Previous</a><br/><?php
     }
   else if($_REQUEST["newpassword"]!= $_REQUEST["confirmpassword"])
     {
	     echo "<p style='color:red' > Confirm Password must match";?>
	     <br><a style="text-decoration: none" href="updatepassword.php">Previous</a><br/><?php
     }
   else
     {
		
		$data=array();
		
		
		$conn = mysqli_connect("localhost", "root", "","webdatabase");
		$sql="UPDATE `patient` SET `password`='".$_REQUEST["newpassword"]."' WHERE email='".$_COOKIE["email"]."' && password='".$_REQUEST["password"]."';";
			//echo $sql;
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		echo "<br/>";
        echo " <h2>Updated password successfully</h2>"; ?>

        <br><a style="text-decoration: none" href="homepage.php">Home</a><br/>

        <?php  
	}
}
else{
	header("Location:logout.php");
    }
}
?>
