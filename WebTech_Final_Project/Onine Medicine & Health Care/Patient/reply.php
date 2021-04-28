<?php
$data=array();
$data1=array();

include("database.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_COOKIE["email"])){

		$sql="select * from sms where receiver='".$_COOKIE["email"]."'";	
		loadFromMySQL($sql);

		$sql1="select * from sms where sender='".$_COOKIE["email"]."'";
		loadFromMySQL1($sql1);

		
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
<form name="frm" action="#" method="post">
			<fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>Chat History</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">
<tr>
<td>
<h1 style="text-align:center;">Sending History</h1><hr/>
<pre><?php
if(sizeof($data1)>0){
            foreach($data1 as $v){?>
                                To  : <?php echo $v["receiver"];?><br>
                                SMS : <?php echo $v["sms"];?><br>
                                   <br/> <?php
	}
}
else
{?>
	<h3 style="text-align:center;">Nothing send yet</h3><?php
}?> 

<hr/><h1 style="text-align:center;">Receiving History</h1><hr/>
<pre><?php
if(sizeof($data)>0){
            foreach($data as $v){?>
                                From  : <?php echo $v["sender"];?><br>
                                Reply : <?php echo $v["sms"];?><br>
                                   <hr/><br/> <?php
	}
}
else
{?>
	<h3 style="text-align:center;">Reply is empty</h3><?php
}?> 


                               <a style="text-decoration: none" href="homepage.php">Home</a></h3>              
</form>
</pre>				
</td>
</tr>
</table>
</body>
</form>
</html>