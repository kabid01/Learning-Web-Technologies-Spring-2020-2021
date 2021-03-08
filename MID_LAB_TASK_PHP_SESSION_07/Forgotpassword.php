
<?php

 session_start();

 if (isset($_POST['submit']))   
  {
  
 
  if (empty($_POST['Email']))


 {
    echo "field can not be blank";
  }

  elseif ($_SESSION['Email']==$_POST['Email']) 
  {
    echo "Password change notification sent to Email";
    
  else 
  {
    echo "Email not found";
  }

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
</head>
<body>


<table border="2" weight="40%" align="center">
  

  <tr align="center">
    

    <td colspan="2" width="100%" align="right"> <img src="logo.png" align="left">

      <a href="home.html">Home</a> |
      <a href="login.html">LogIn</a> |
      <a href="registration.html">Registration</a>

     </td>

  </tr>

<tr colspan="2" width="100px" height="200px">
  
<td colspan="2" width="50%" align="center"> 

<form method="POST" action="Forgotpassword.php">
  
<fieldset>
  
<legend>FORGOT PASSWORD</legend>

<table>
  
<tr>
  

<td>Enter Email:</td>
<td><input type="Email" name="Email" value=""></td>

</tr>
<tr>
  

<td><input type="submit" name="submit" value="submit"></td>

</tr>

</table>


</fieldset>

</form>
<tr align="center">
  <td colspan="2" height="50px">Copyright@2017</td>

</tr>



</td>


</tr>





</table>



</body>
</html>