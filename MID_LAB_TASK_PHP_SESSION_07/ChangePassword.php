<?php

 session_start();

 if (isset($_POST['submit']))   
  {
 	
 
  if (empty($_POST['Password']) || empty($_POST['NewPassword']) || (empty($_POST['RePassword']) )


 {
  	echo "field can not be blank";
  }

  else
  {
     if ($_SESSION['Password']!=$_POST['Password'])

     	echo "Enter The Valid Password";

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



































<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>

<table border="2" width="50%">
	
<tr align="center">
	

<td colspan="3" width="100px" align="Right"> <img src="logo.png" align="left">

 	<a href=>Logged in as Bob</a> |
      <a href=>Logout</a> 

</tr>
<tr>
	  <td>
	  	
       <h3>Account</h3> <br>

       <ul>
       	

   <li> <a href="Dashboard.html">Dashboard</a></li>
      <li> <a href="ViewProfile.html">View Profile</a></li>
         <li> <a href="EditProfile.html">Edit Profile</a></li>
            <li> <a href="ChangeProflePicture.html">Change Profile picture</a></li>
               <li> <a href="ChangePassword.html">Change Password</a></li>
                  <li> <a href="Logout.html">Logout</a></li>


       </ul>


	  </td>

	  <td>
	  	
	  	<form method="POST" action="ChangePassword.html">
	  		
        <legend>CHANGE PASSWORD</legend>
        <table border="0" width="50%" align="center">
        	
        <tr>
        	<td>
        		Current Password:
        	</td>

        	<td> <input type="Password" name="CurrentPassword" value=""></td>
        </tr>
        <tr>
        	<td> New Password:</td>
        	<td> <input type="Password" name="NewPassword" value=""></td>
        </tr>
        <tr>
        	

         <td>
         	Retype New Password:
         </td>
         <td><input type="Password" name="RetypePassword" value=""></td>

        </tr>
        <tr>
        	<td colspan="3">
        		<input type="Submit" name="Submit" value="Submit">
        	</td>
        </tr>


        </table>


	  	</form>
	  </td>
	

</tr>

<tr> 
	<td colspan="3" align="center"> Copyright@2017</td>


</tr>



</table>



</body>
</html>