<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
   if(isset($_COOKIE["email"])){

?>

<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
</head>
<body>

	<form method="post" action="">

		<fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>Home Page</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">

                   <tr>
                              <td>
                                    <a style="text-decoration: none" href="patientprofile.php">Profile</a><br>
                        </tr>

                        <tr>
                  <td>
                         <a style="text-decoration: none" href="updatepassword.php">Update Information</a><br>
                  </td>
            </tr>


                        <tr>
                              <td>
                                    <a style="text-decoration: none" href="searchmedicine.php">Search medicine</a><br>
                        </tr>


            <tr>
            	<td>
            		 <a style="text-decoration: none" href="contactwithadmin.php">Contact with Admin</a><br>
            	</td>
            </tr>

            <tr>
            	<td>
            		 <a style="text-decoration: none" href="SeePharmasist.php">Pharmasist List</a><br>
            	</td>
            </tr>

            <tr>
                  <td>
                         <a style="text-decoration: none" href="seedoctorslist.php">Doctors List</a><br>
                  </td>
            </tr>
            <tr>
                  <td>
                         <a style="text-decoration: none" href="reply.php">Chat History</a><br>
                  </td>
            </tr>



               <tr>
            	<td align="middle">
            		<pre>
          <a style="text-decoration: none" style="text-decoration: none" href="delete.php">Delete Account</a>           <a style="text-decoration: none" style="text-decoration: none" href="logout.php">Log Out</a><br>
</pre>	
            	</td>
            </tr>



</fieldset>



</table>
</form>
</body>
</html>
<?php
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