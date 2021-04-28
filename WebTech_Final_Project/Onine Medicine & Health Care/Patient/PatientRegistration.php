<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name']))
        {
            echo "Name cannot be empty !!!<br>";
        }
        if(empty($_POST['email']))
        {
            echo "Email cannot be empty !!!<br>";
        }
       
        if(empty($_POST['password']))
        {
            echo "Password cannot be empty !!!<br>";
        }
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['confirmpassword']) && empty($_POST['gender']) && empty($_POST['dob']))
        {
            echo "All the fields are required !!!";
        }
        elseif (!empty($_POST['password'])) 
        {
            $password=$_POST['password'];
            if ( strpos($password, '@') || strpos($password, '#') || strpos($password, '$') || strpos($password, '%'))
            {
                echo "<br>";
            }
            else 
            {
                echo "Password must contain special characters !!!<br>";
            }
            if (empty($_POST['confirmpassword'])) 
            {
                echo "Must type confirm password !!!<br>";
            }
            elseif (!empty($_POST['confirmpassword'])) 
            {
                if($password!=$_POST['confirmpassword']){
                    echo "Password and Confirm password must be same !!!<br>";
                }
            }
        }
        if (empty($_POST['gender'])) 
        {
            echo "Must select gender<br>";
        }
        if (empty($_POST['dob'])) 
        {
            echo" Date of Birth cannot be empty !!!<br>";
        }
        if (!empty($_POST['name'])) 
        {
            if (strlen($_POST['name'])>3) 
            {
                echo "Name must be less than 3 caharacters<br>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body >
    <form method="POST" action="registration.php">
        <fieldset style="width: 600px;background-color:cyan;">
            <legend><h1>Registration</h1></legend>
            <table align="center"  style="background-color:cyan;" border ="0" align="center" width ="100%">
                <tr>
                    <td>Name</td>
                    <td>:
                        <input type="text" name="name" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:
                        <input type="email" name="email" >
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:
                        <input type="password" name="password" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:
                        <input type="password" name="confirmpassword" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            <input type="radio" name="gender" value="Other">Other
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="text" name="dob">&nbsp;&nbsp;(dd/mm/yy)
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td align= "center" colspan="2">
                        <input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="reset"><a style="text-decoration: none" href="login.php">&nbsp;&nbsp;&nbsp;&nbsp;Have Account?LogIn</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>