<?php include('navbar.php'); ?>
<br><br>

<?php
    if(!isset($_SESSION['user']))
    {
        echo "<script>window.location.href='loginreg.php'</script>";
    }
?>

<!--slelect user from db-->
<?php
    if(isset($_SESSION['user']))
    {  
        $username=$_SESSION['user'];
           
        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

        $sql="SELECT * FROM tbl_register WHERE username='$username'";

        $res=mysqli_query($conn, $sql);

        if($res==true)
        {
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                while($rows=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                {
                    $id=$rows['id']; 
                    $first_name=$rows['first_Name'];                               
                    $username=$rows['username'];
                    $last_name=$rows['last_Name'];
                    $email=$rows['email'];
                    $phone=$rows['phone'];
                    $address=$rows['address'];
                }
            }

        }
        else
        {
            //data not present

        }


    
    }
?>

<!--profiledisplay-->
<style><?php include('profiledisplay.css');?></style>

<div class="container-xl px-4 mt-4">
     <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="profile.php" >Profile</a>
        <a class="nav-link" href="reservation.php" target="_blank">Reservation</a>
        <a class="nav-link" href="cart.php" target="_blank">Cart</a>
    </nav>
    
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- username-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username:</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo $username?>">
                        </div>

                        <div class="row gx-3 mb-3">
                            <!--(first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First Name:</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo $first_name?>">
                            </div>
                            <!--(last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name:</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?php echo $last_name?>">
                            </div>
                        </div>
                        <!-- Form Row  -->
                      
                        <!-- (address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Address:</label>
                            <input class="form-control"  type="text" placeholder="Enter your address" value="<?php echo $address?>">
                        </div>

                        <div class="row gx-3 mb-3">
                            <!-- (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number:</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?php echo $phone?>">
                            </div>
                            <!-- (email)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmailAddress">Email:</label>
                                <input class="form-control"  type="email" name="email" placeholder="Enter your email" value="<?php echo $email?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>
<?php include('footer.php'); ?>
</body>
</html