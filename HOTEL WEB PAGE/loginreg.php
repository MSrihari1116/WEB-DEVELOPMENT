<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loginstyle.css">

    <title>Login</title>
</head>

<body style="background-color:#CCCCCC;">
    <?php
    include('navbar.php');
    ?>
    <br /><br /><br /><br /><br />
    <?php
    if(isset($_SESSION['register']))
    {
        echo $_SESSION['register'];
        unset($_SESSION['register']);
    }
    if(isset($_SESSION['login']))
    {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }

?>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form action="" method="post">
                <h1>Presenta</h1>
                <h2>Login</h2>
                
                <input type="text" name= "username" placeholder="Username" required="" >
                <input type="password" name="password" placeholder="Password" required="">
                <a href="#">Forgot Your Password?</a>

                <button type="submit" name="submit">Log In</button>
                <a href="register.php">Haven't Registered Yet? Click Here To Register</a>
                        

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/202107191902506712-31441708f3a811eb831c0a58a9feac02.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,35&output-format=jpg"></img>

                </div>
            </div>
        </div>
    </div>
    <br />

</body>
</html>


<?php
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        
        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

        $sql="SELECT * FROM tbl_register WHERE username='$username' AND password='$password'";

        $res=mysqli_query($conn,$sql);

        $count=mysqli_num_rows($res);
        if($count==1)
        {
            //user exists and login success
            $_SESSION['login']="<stong>Login Successful!</strong>";
            //user logged in;
            $_SESSION['user']=$username;
                       
            //redirect to dashboard
            echo "<script>window.location.href='WADtestvs.php'</script>";
            

        }
        else
        {
            //not available
            $_SESSION['login']="<p align='center' color='red'>Login Failed!<br>Invalid username or password!</p>";
            //redirect to same page
            echo "<script>window.location.href='loginreg.php'</script>";

        }
    }
?>
