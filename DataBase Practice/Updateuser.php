<?php 
    require "includes/db_connect.inc.php";
    session_start();
    if(isset($_POST['submit'])){

        $username=$_POST['user_name'];


        $password=$_POST['password'];

        $email=$_POST['email'];

       

        $sql="update user set name='$user_name', password='$password', email='$email' where user_name='$username'";


        mysqli_query($con, $sql);


      
         header("../login.php");

    }

?>