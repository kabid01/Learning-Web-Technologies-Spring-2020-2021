<?php

   if(empty($_REQUEST['name']) && empty($_REQUEST['email']) && empty($_REQUEST['password']) && empty($_REQUEST['confirmpassword']) && empty($_REQUEST['gender']) && empty($_REQUEST['dob']))
     {
	     echo " <p style='color:red' > All fields are mandatory!";?>
	     <h3><a style="text-decoration: none" href="PatientRegistration.php">Back</a></h3>
         <?php
     }
   else if($_REQUEST["password"]!= $_REQUEST["confirmpassword"])
     {
	     echo "<p style='color:red' > Passwords must match";?>
	     <h3><a style="text-decoration: none" href="PatientRegistration.php">Back</a></h3>
         <?php
     }
   else
   {
	   $conn = mysqli_connect("localhost", "root", "","webdatabase");
	   $sql="INSERT INTO patient (name,email, password, gender,dob) VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['gender']."','".$_REQUEST['dob']."');";
      $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

      echo "<br/>";
        echo " <h2>Successfully Register ".$_REQUEST["email"]."</h2>";
       }

		
 
?>
<h3><a style="text-decoration: none" href="login.php">LogIn</a></h3>