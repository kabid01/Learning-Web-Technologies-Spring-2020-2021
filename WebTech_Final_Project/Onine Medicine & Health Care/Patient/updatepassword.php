<!DOCTYPE html>
<html>
<body >
	<?php session_start();?>
	<head>
		<script type="text/javascript">

			function opassword(){
	          var un=document.frm.password.value; //document=DOM object
	          if($_COOKIE["password"]!= un){
		        document.frm.password.style.color="red";
		        document.getElementById("ol").innerHTML="Must match Old Password";
	       }
	    else{
		    document.frm.password.style.color="green";
		          document.getElementById("ol").innerHTML= " √ ";
	     }
	  }

			function npassword(){
	           var un=document.frm.newpassword.value; //document=DOM object
	           if(un.length<5){
		           document.frm.newpassword.style.color="red";
		           document.getElementById("ns").innerHTML="Provide Strong Password";
	          }
	          else{
		          document.frm.newpassword.style.color="green";
		          document.getElementById("ns").innerHTML= " √ ";
	               }
	        }

	        function cpassword(){
	          var un=document.frm.confirmpassword.value;
	          var unn=document.frm.newpassword.value; //document=DOM object
	          if(un!=unn){
		            document.frm.confirmpassword.style.color="red";
		            document.getElementById("ms").innerHTML="Must Match Password";
	                 }
	              else{
		             document.frm.confirmpassword.style.color="green";
		              document.getElementById("ms").innerHTML= " √ ";
	                    }
	                }


	                function validate(){
                            var flag=true;
                            var olp=document.frm.password.value;
                            var np=document.frm.newpassword.value;
                            var cnp=document.frm.confirmpassword.value;
                            var str="";
                             
                            if($_COOKIE["password"]!= olp)
                            	{
                                 flag=false;
                                 str="Old Password Must Match";
                                 }
                            else if(np.length<5){
                                 flag=false;
                                 str="Type Strong Password";
                                 }
     
                            else if(np!=cnp){
                                 flag=false;
                                  str="Must Match Password";
                                 }
                            else if(olp==0){
                                 flag=false;
                                  str="Enter old password";
                                 }
                            else if(np==0){
                                 flag=false;
                                  str="Enter new password";
                                 }
                            else if(cnp==0){
                                 flag=false;
                                  str="Enter confirm new password";
                                 }
                            document.getElementById("msg").innerHTML=str;
                            return flag;
                        }

	
	
		</script>
	</head>
<form name="frm" action="updateinfo.php" method="post">
<fieldset style="width: 600px;background-color:cyan;">
			

            <legend><h1>Update Password</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">
<tr>
<td>
<pre>
<h1 style="text-align:center;">Update Your Password Here</h1><hr>
<?php
$data=array();
include("database.php");
//session_start();
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

         Email            : <input type="text" name="email" value=<?php echo $data[0]["email"]; ?> disabled="disabled"><br/>
         Old Password     : <input onkeyup="opassword()" type="password" name="password" placeholder="Old Password" id="password"> <span id="ol"></span><br>
         New Password     : <input onkeyup="npassword()" type="password" name="newpassword" placeholder="New Password" id="newpassword"> <span id="ns"></span> <br>
         Confirm Password : <input onkeyup="cpassword()" type="password" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword"> <span id="ms"></span> <br>
<br>
                                    <input type="submit" name="sbt" value="Confirm Edit"onclick="return validate()"><br>
                             <span style="text-align:center;color:red" id="msg"></span><br>
</form>

</pre>				
</td>
</tr>
</table>
</fieldset>
</body>
</form>
</html>