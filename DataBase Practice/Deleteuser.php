<?php 
       require "includes/db_connect.inc.php";

    $username=$_GET['username'];

    $sql="delete from user where user_name='$username'";
	  mysqli_query($con, $sql);

   header("../login.php");
?>