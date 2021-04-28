<?php
$data=array();

include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
    if(isset($_COOKIE["email"])){

        $sql="select * from doctordetails where email='".$_REQUEST["email"]."'"; 
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
	<title>Doctors Details</title>
</head>
<body >
     
            <fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>Doctors Details</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">

             <tr >
                    <td align="center">
                        
                            <br>Name: <?php echo $data[0]["name"];  ?></br>
                            <br>Date of Birth: <?php echo $data[0]["dob"];  ?></br> 
                            <br>Gender: <?php echo $data[0]["gender"];  ?>Male</br>
                            <br>Speaciality: <?php echo $data[0]["speciality"];  ?></br>
                            <br>Status: <?php echo $data[0]["status"];  ?></br>
                            <br>Address: <?php echo $data[0]["address"];  ?></br> 
                            <hr>
                            <a style="text-decoration: none" href="contactwithdoctor.php?email=<?php echo $_REQUEST["email"];?>"><?php echo "Contact for Appointment" ?></a></h3>
                            
                         
                    </td>
                </tr>
            </table>


</fielset>
</body>
</html>