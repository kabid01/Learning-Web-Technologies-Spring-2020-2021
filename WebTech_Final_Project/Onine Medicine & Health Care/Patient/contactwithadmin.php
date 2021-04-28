<?php
$data=array();
include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		if(isset($_POST['sbt'])){

		$sql="INSERT INTO `sms`(`sender`, `receiver`, `sms`) VALUES ('".$_COOKIE["email"]."','admin@gmail.com','".$_REQUEST["message"]."');";
		loadFromMySQL($sql);
		header("Location:homepage.php");
	}
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
<body >	
	<fieldset style="width: 600px;background-color:cyan;">
		 <legend><h1>Contact with Admin</h1></legend>
<form name="frm" action="#" method="post">
<table style="background-color:cyan;" border ="1" align="center" width ="100%">
<tr>
<td>
<pre>




         Sender        : <input type="text"  disabled="disabled" value=<?php echo $_COOKIE["email"]?>><br/>
         Receiver      : <input type="text"  disabled="disabled" value="admin@gmail.com"><br/>
         Write something to the Admin:

                         <textarea name="message" cols="30" rows="6">
</textarea>

                            <a style="text-decoration: none" href="homepage.php">Home</a>               <input type="submit" name="sbt" value="Send" /><br>
</form>
</pre>				
</td>
</tr>
</table>
</body>
</form>
</fieldset>
</html>