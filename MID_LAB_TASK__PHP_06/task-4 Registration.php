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
        if(empty($_POST['uname']))
        {
            echo "Username cannot be empty !!!<br>";
        } 
        if(empty($_POST['pass']))
        {
            echo "Password cannot be empty !!!<br>";
        }
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['uname']) && empty($_POST['pass']) && empty($_POST['confirmPass'] && empty($_POST['gender']) && empty($_POST['date'] && $_POST['month'] && $_POST['year'])))
        {
            echo "All the fields are required !!!";
        }
        elseif (!empty($_POST['pass'])) 
        {
            $pass=$_POST['pass'];
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%'))
            {
                echo "<br>";
            }
            else 
            {
                echo "Password must contain special characters !!!<br>";
            }
            if (empty($_POST['confirmPass'])) 
            {
                echo "Must type confirm password !!!<br>";
            }
            elseif (!empty($_POST['confirmPass'])) 
            {
                if($pass!=$_POST['confirmPass']){
                    echo "Password and Confirm password must be same !!!<br>";
                }
            }
        }
        if (empty($_POST['gender'])) 
        {
            echo "Must select gender<br>";
        }
        if (empty($_POST['date'] && $_POST['month'] && $_POST['year'])) 
        {
            echo" Date, Month, Year cannot be empty !!!<br>";
        }
        if (!empty($_POST['name'])) 
        {
            if (strlen($_POST['name'])>15) 
            {
                echo "Name must be less than 15 caharacters<br>";
            }
        }
        if (!empty($_POST['uname'])) 
        {
            $uname=$_POST['uname'];
            if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $uname) && strlen($uname)>=4 ) 
            {
               
                echo "Successfully registered<br>";
            }
            else 
            {
                echo "Must contain Alpha numeric character and '_' and length should be at least 4 characters<br>";
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
<body>
    <form method="POST" action="">
        <fieldset style="width: 400px;">
            <legend><b>Registration</b></legend>
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td>:
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:
                        <input type="email" name="email" id=""><button title="sample@example.com"><b> i</b></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:
                        <input type="text" name="uname" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:
                        <input type="password" name="pass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:
                        <input type="password" name="confirmPass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="">Male
                            <input type="radio" name="gender" id="">Female
                            <input type="radio" name="gender" id="">Other
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
                            <input type="tel" name="date" id="" size="1">/
                            <input type="tel" name="month" id="" size="1">/
                            <input type="tel" name="year" id="" size="1"> <i>(dd/mm/yy)</i>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>