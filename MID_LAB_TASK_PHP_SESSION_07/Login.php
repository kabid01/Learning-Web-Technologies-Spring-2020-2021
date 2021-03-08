
<?php

 session_start();

 if (isset($_POST['submit']))   
  {
 	
 
  if (empty($_POST['Username']) || empty($_POST['Password']))


 {
  	echo "field can not be blank";
  }

  elseif ($_SESSION['Username']==$_POST['Username'] && $_SESSION['Password']==$_POST['Password']) 
  {
  	echo "Successful";
  	$_SESSION['flag']=true;
  	header('location:dashboard.php');
  }
  else 
  {
  	echo "wrong username and password";
  }

}
?>





<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
</head>
<body>

<table border="2" width="40%" align="center">
	
<tr align="center">
	
<td colspan="3" width="100px" align="right"> <img src="logo.png" align="left">

	<a href="home.html">Home</a> |
      <a href="login.html">LogIn</a> |
      <a href="registration.html">Registration</a>

</td>


</tr>

<tr align="center" height="200px">
	
<td width="50%">
	
<form method="POST" action="login.php">

<fieldset width="50%">

	<legend>LOGIN</legend>

	<table align="center" width="50%">
		
 <tr>
 	
<td>UserName : <input type="text" name="UserName" value=""> </td>

 </tr>
 <tr>
 	
<td>Password : <input type="Password" name="Password" value=""> </td>

 </tr>

 <tr>
 	<td><input type="checkbox" name="item[]"> Remember Me <br></td>

 </tr>

 <tr>
 	<td><input type="submit" name="submit" value="submit">  <br></td>


 </tr>



	</table>
	

</fieldset>	



</form>

</td>


</tr>




</table>



</body>
</html>
