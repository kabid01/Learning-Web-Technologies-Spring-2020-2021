<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
  if(isset($_COOKIE["email"])){

    if(isset($_POST['search'])){

        $sql="SELECT * FROM medicine WHERE name LIKE '" .$_REQUEST["name"]. "%';";

         loadFromMySQL($sql);  
    }
      
  } 
  else 
  {
    echo "<h1 style='color:red'>Session time out</h1>";?>
    <h2> You want to Login again?&nbsp;&nbsp;<a style="text-decoration: none" href="login.html">Login</a></h2>
    <?php   
  }
}
else
{
  header("Location:logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Medicine</title>
</head>
<body>
   <fieldset style="width: 600px;background-color:cyan;">
            

            <legend><h1>Search Medicine</h1></legend>
             <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">
<form method="post" action="#">
            <tr>
                    <td>Medicine Name:</td>
                    <td><input type="text" name="name" value="" placeholder="Type Medicine Name" /></td>
                    <td> <input type="submit" name="search" value="Search"></td>

                </tr>

                <tr style="text-align:center;">
   <td align="center" colspan="3">
    <?php
    if(isset($_POST['search'])){
    if(sizeof($data)>0)
    {
    foreach($data as $v)
        {?>
           <h2><?php echo $v["name"];?></a></h2><br/>
           
                     <input type="button" name="Add" value="AddtoCart">
                    <input type="button" name="BuyNow" value="BuyNow">
            <?php

     
        }
        }
        else
        {
          echo "<h3> No data found</h3>";
        }

        } 

        ?>
  </td>
</tr>

                 </form>

</fieldset>
</table>
</body>
</html>