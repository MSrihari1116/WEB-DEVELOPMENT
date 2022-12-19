<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Form Trial</title>
    <link rel="stylesheet" href="css/signup.css" />
</head>
<body>
<p align="center"><strong>Please Register Your Account Here!</strong></p>
    <div class="form">
        <form action="" method="post">
        <p align="center"><i>Fill The Details Below:</i></p>

            <div class="text">
            <label>
                First Name:
                <input type="text" name="firstname" required='' />
            </label>
            </div>
            
            <br />
            <div class="text">
            <label>
                Last Name:
                <input type="text" name="lastname" required=''/>
            </label>
            </div>
            <br />
            <div class="text">
            <label>
                Username:
                <input type="text" name="username" required=''/>
            </label>
            </div>
            <br />
            <label>
                Password:
                <input type="password" name="password"  placeholder="Enter Password" required=''/>
            </label>
            <br />
            <div class="s_button">
                <input type="submit" name="submit" value="Register" />
            </div>
        </form>
    </div>
</body>
</html>


<?php
    if (isset($_POST['submit']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);

    
        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

        $sql="INSERT INTO tbl_signup SET
            First_Name='$firstname',
            Last_Name='$lastname',
            username='$username',
            password='$password'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
    
        if($res==true)
        {
            echo "registration succesful";
            //redirect to login page
            //echo"<script>window.location.href='#'</script>";
        }
        else
        {
            echo "registration unsuccessful";
            //redirect to registration
            echo"<script>window.location.href='#'</script>";
        }


    }
?>