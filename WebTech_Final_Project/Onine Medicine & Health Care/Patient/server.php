<?php

    $conn = mysqli_connect("localhost", "root", "","webdatabase");
    $sql="select * from patient where email='".$_REQUEST["email"]."'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
        
        $temp["email"]=$row["email"];
        $temp["password"]=$row["password"];
        
    }
      
$flag=0;
session_start();
     if(strlen($_REQUEST["email"]) !=0 && strlen($_REQUEST["password"]) !=0 )
       {
         if($_REQUEST["email"]==$temp["email"])
         {
            if($_REQUEST["password"]==$temp["password"])
            {
                   echo "Login success";
                   $_SESSION["valid"]="yes";
                   setcookie("email",$_REQUEST["email"],time()+5000*99);
                   setcookie("password",$_REQUEST["password"],time()+5000*99);
                   $_COOKIE["email"]=$_REQUEST["email"];
                   $_COOKIE["password"]=$_REQUEST["password"];
                   $flag=1;
                  }
               else
                  {
                  echo "<h3><p style='color:red'>Provide correct Password !!!</p></h3>";?>
                  <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
                  <?php
                  }
           }
           else
                  {
                  echo "<h3><p style='color:red'>Provide correct Email !!!</p></h3>";?>
                  <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
                  <?php
                  }
      }
     else
     {
        echo "<h3><p style='color:red'> All the fields are required !!!</p></h3><br/>";?>
              <h3><a style="text-decoration: none" href="login.php">Back</a></h3>
              <?php
     }

if($flag==1){
  
        header("Location:homepage.php");
}
?>