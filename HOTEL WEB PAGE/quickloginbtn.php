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
<?php
    if(!isset($_SESSION['user']))
?>
    <!--Quick Login Button-->
<button class="open-button" onclick="openForm()">Quick Login</button>

<div class="form-popup" id="myForm">
    <!--Form Start-->
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/202107191902506712-31441708f3a811eb831c0a58a9feac02.jpg?&output-quality=75&downsize=910:612&crop=910:612;0,35&output-format=jpg" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" required="required" name="username" class="form-control input_user" placeholder="Enter Username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" required="required" name="password" class="form-control input_pass" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">&nbsp;&nbsp;&nbsp;&nbsp;Remember Me</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="submit" class="btn login_btn">
                        <button type="button" class="btn login_btn" onclick="closeForm()">Close</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="register.php" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>






    <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                }
    </script>

</div>

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
                        echo"<script>alert('Login Successful');</script>";

                       
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