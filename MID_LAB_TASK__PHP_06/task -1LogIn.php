<?php 
    if (isset($_POST['submit'])) 
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $username) && strlen($username)>=2 ) 
        {
            if ( strpos($password, '@') || strpos($password, '#') || strpos($password, '$') || strpos($password, '%') && $pasword<8){
                echo $username."<br>";
                echo $pass;
            }
            else {
                echo "Must contain 8 charcters and contain at least one special character";
            }
        }
        else {
            echo "Must contain alpha numeric charcters and length should be at least 2 characters";
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 500px;">
            <legend><h2>Login</h2></legend>

            <label for="uname">User Name : </label>
            <input type="text" name="username">
            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password">
            <br>
            <br>

            <hr>

            <input type="checkbox"><label for="">Remember Me</label>
            <br>
            <br>
            

            <input type="submit" name="submit"> <a href="changePassword.html" target="_blank">Forgot Password?</a>
            <br>
        </fieldset>
    </form>
</body>
</html>