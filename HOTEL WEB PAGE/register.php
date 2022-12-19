<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="registerstyle.css">
</head>
<body style="background-color:#CCCCCC;">
<?php
include('navbar.php');

?>
<?php
    if(isset($_SESSION['register']))
    {
        echo $_SESSION['register'];
        unset($_SESSION['register']);
    }
?>
<br /><br /><br /><br /><br />



<div class="signupFrm">
    <form action="" class="form" method="post">
        <h1 class="title">Sign up</h1>

        
        <div class="inputContainer">
            <input type="text" name="firstname" class="input" placeholder="a" required="">
            <label for="" class="label">First Name</label>
        </div>

        <div class="inputContainer">
            <input type="text" name="lastname" class="input" placeholder="a" required="">
            <label for="" class="label">Last Name</label>
        </div>

        <div class="inputContainer">
            <input type="text" name="email" name="first_name" class="input" placeholder="a" required="">
            <label for="" class="label">Email</label>
        </div>

        <div class="inputContainer">
            <input type="text" name="username" class="input" placeholder="a" required="">
            <label for="" class="label">Username</label>
        </div>

        <div class="inputContainer">
            <input type="tel" name="phone" name="first_name" class="input" placeholder="a" required="">
            <label for="" class="label">Phone Number</label>
        </div>

        <div class="inputContainer">
            <input type="textarea" name="address" class="input" placeholder="a" required="">
            <label for="" class="label">Address</label>
        </div>

        <div class="inputContainer">
            <input type="password" name="password" class="input" placeholder="a" required="">
            <label for="" class="label"> Password</label>
        </div>

        <div class="inputContainer">
            <input type="password" name="confirm_password   " class="input" placeholder="a">
            <label for="" class="label">Confirm Password</label>
        </div>

        <input type="submit" name="submit" class="submitBtn" value="Sign up">
            <p align="center"><a href="loginreg.php">Click here to login</a></p>

    </form>
</div>
<br /><br /><br /><br /><br />
<?php
    include('footer.php');
?>


</body>
</html>



<?php
    if (isset($_POST['submit']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
    
        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

        $sql="INSERT INTO tbl_register SET
            first_name='$firstname',
            last_name='$lastname',
            email='$email',
            phone='$phone',
            address='$address',
            username='$username',
            password='$password'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());

        session_start();

    
        if($res==true)
        {
            $_SESSION['register']="Registration Successful!";
            //redirect to login page
            echo"<script>window.location.href='loginreg.php'</script>";
        }
        else
        {
            $_SESSION['register']="Registration Unsuccessful!";
            //redirect to registration
            echo"<script>window.location.href='register.php'</script>";
        }


    }
?>