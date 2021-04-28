<?php
$data=array();

include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
    if(isset($_COOKIE["email"])){

        $sql="select * from patient where email='".$_COOKIE["email"]."'"; 
        loadFromMySQL($sql);
    }
    else 
    {
        echo "<h1 style='color:red'>Session time out</h1>";?>
        <h2> You want to Login again?&nbsp;&nbsp;
        <a style="text-decoration: none" href="login.php">Login</a></h2>
        <?php
        
    }
}
else{
    header("Location:logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient profile</title>
</head>
<body>
	 <fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>Patient profile</h1></legend>
             <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">

            <tr >
                    <td  >
                        
                        <ul align="center" >
                            <br>Name: <?php echo $data[0]["name"];  ?></br>
                             <br>Email: <?php echo $data[0]["email"];  ?></br>
                            <br>Gender: <?php echo $data[0]["gender"];  ?></br>
                            <br>Date of Birth: <?php echo $data[0]["dob"];  ?></br> 
                        </ul>
                    </td>
                </tr>

</table>
</body>
</html>