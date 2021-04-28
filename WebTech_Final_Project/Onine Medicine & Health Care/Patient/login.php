<!DOCTYPE html>
<html>
<head>
<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
function showHint(el) {
    var str=el.value;
    xmlhttp.onreadystatechange = function() {       
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
            var m=document.getElementById("txtHint");
            m.innerHTML=xmlhttp.responseText;
            if(xmlhttp.responseText=="<span style='color:green'>√</span>"){
                flag=true;
            }
            else{flag=false;}

        }
    };
    var url="";
    if(el.id=="email"){
        url="fetch.php?email="+str;
    }

    xmlhttp.open("GET", url,true);
    xmlhttp.send();

}
function validate(){
    return flag;
}
</script>
</head>
<body >
<form action="server.php" method ="post" name="frm">
<fieldset style="width: 600px;background-color:cyan;">
            <legend><h1>LogIn</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="1" align="center" width ="100%">
<tr>
<td>
<hr>
<br>
<pre>
                      Email     : <input type="text" onkeyup="showHint(this)" name="email" placeholder="example@gmail.com" id="email"><span style="text-align: center" id="txtHint"></span><br>
                      Password  : <input type="password" name="password" placeholder="Password" /><br><br>

                     <a style="text-decoration: none" href="PatientRegistration.php">Do you want to Sign Up?</a>        <input <input type="submit" value="Login" name="sbt" onclick="return validate()"><br>
</pre>
<br><br><br><br><br><br>
</td>
</tr>
</table>
</body>
</form>
</html>
