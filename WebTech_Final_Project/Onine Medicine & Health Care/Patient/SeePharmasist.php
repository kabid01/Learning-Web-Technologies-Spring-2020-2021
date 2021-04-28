<?php
$data=array();

include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
    if(isset($_COOKIE["email"])){

        $sql="select * from pharmacist"; 
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
	<title>See Pharmasist</title>
</head>
<body>
	<form method="post" action="">

		<fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>See Pharmasist</h1></legend>

            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">
            <tr>
              <th><h3>Name</h3></th>
               <th><h3>Address</h3></th>
            </tr>
            <tr>
                <td align="center">
                    <?php
                          if(sizeof($data)>0)
                            {
                              foreach($data as $v)
                                {?>
                                 <h2><a style="text-decoration: none" href="Pharmasistdetails.php?email=<?php echo $v["email"];?>"><?php echo $v["email"];?></a></h2><br/>
                                      <?php
                                }
                           }
                          else
                           {
                              echo "<h3> No data found</h3>";
                           }  ?>
                    </td>

                    <td align="center">
                    <h3 align="center"> <?php echo $v["address"];  ?></br></h3>
                    </td>
                    </tr>
                     
</table>
</fieldset>
</body>
</html>