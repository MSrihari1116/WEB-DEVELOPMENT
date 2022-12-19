<?php include('navbar.php');?>
<?php
    if(!isset($_SESSION['user']))
    {
        echo "<script>window.location.href='loginreg.php'</script>";
    }
?>
<?php
    if(isset($_SESSION['reserve']))
    {
        echo"<script>alert('Reservation Successful')</script>";
        unset($_SESSION['reserve']);
    }
?>
<br /> <br />
<html>
<head>
    <link rel="stylesheet" href="reservationstyle.css">
    <link rel="stylesheet" href="profiledisplay.css">
</head>

<body style="background-color:white";>



<div class="container-xl px-4 mt-4">
    <nav class="nav nav-borders">
    <a class="nav-link " href="profile.php" target="_blank">Profile</a>
    <a class="nav-link active ms-0" href="reservation.php" >Reservation</a>
    <a class="nav-link" href="cart.php" target="_blank">Cart</a>
    </nav>

    <!--form-->

    <form action="" method="post">

        <hr>
        <div class="elem-group inlined">
        <label for="adult">Adults</label>
        <input type="number" id="adult" name="adults" placeholder="2" min="1" max="20" required>
        </div>
        <div class="elem-group inlined">
        <label for="child">Children</label>
        <input type="number" id="child" name="children" placeholder="2" min="0" max="20" required>
        </div>
        <div class="elem-group inclined ">
        <label for="checkin-date">Reserve Date</label>
        <input type="date" id="rdate" name="date" required="">
        </div>

        <div class="elem-group inclined ">
        <label for="checkin-date">Time</label>
        <input type="time" id="rtime" name="time" required="">
        </div>
               <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea id="message" name="description" placeholder="Tell us anything else that might be important." required></textarea>
        </div>
        <input type="submit" name="submit" class="buttonre" value="Reserve">

    <script>
        var today = new Date();
        var dd = today.getDate() + 1;

        var todaymax = new Date();
        var mmmax = today.getMonth() + 2; //January is 0



        var mm = today.getMonth() + 1; //January is 0
        var yyyy = today.getFullYear();

        if (dd < 10) {
           dd = '0' + dd;
        }

        if (mmmax < 10) {
           mmmax = '0' + mmmax;
        } 

        if (mm < 10) {
           mm = '0' + mm;
        } 

    
        today = yyyy + '-' + mm + '-' + dd ;
        todaymax= yyyy + '-' + mmmax + '-' + dd  ;

        document.getElementById("rdate").setAttribute("min", today);
        document.getElementById("rdate").setAttribute("max", todaymax);


    </script>

</form>
<?include('footer.php');?>
</body>
</html>

<?php
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
                $email=$rows['email'];
                $phone=$rows['phone'];
            }
        }

    }
    else
    {
        //data not present
    }
    
    if (isset($_POST['submit']))
    {
        $adults=$_POST['adults'];
        $children=$_POST['children'];
        $rdate=$_POST['date'];
        $rtime=$_POST['time'];
        $description=$_POST['description'];

        $sql1="INSERT INTO tbl_reservation SET
            first_name='$first_name',
            email='$email',
            phone='$phone',
            username='$username',
            uid='$id',
            adults='$adults',
            children='$children',
            date='$rdate',
            time='$rtime',
            description='$description'
        ";

        $res1=mysqli_query($conn, $sql1) or die(mysqli_error());

    
        if($res1==true)
        {
            $_SESSION['reserve']="Reservation Successful!";
            //redirect to login page
            echo"<script>window.location.href='reservation.php'</script>";
        }
        else
        {
            $_SESSION['reserve']="Registration Unsuccessful!";
            //redirect to registration
            echo"<script>window.location.href='reservation.php'</script>";
        }


    }
?>











