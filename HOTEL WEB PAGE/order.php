<?php   session_start(); ?>

<?php
    if(isset($_SESSION['add']))
    {
        //echo $_SESSION['reserve'];
        echo"<script>alert('ADDED TO CART')</script>";

        
        unset($_SESSION['reserve']);
    }
?>


<?php
        
    if(!isset($_SESSION['user']))
    {
        echo "<script>window.location.href='loginreg.php'</script>";
    }
        $username=$_SESSION['user'];
        $food_id=$_GET['id'];
        $title=$_GET['food_title'];
        $price=$_GET['price'];
        $image_name=$_GET['image_name'];
        $quantity=$_GET['qty'];
        //echo $id.$title;
    
        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

        $sql="INSERT INTO tbl_cart SET 
                username='$username',
                food_id='$food_id',
                title='$title',
                price='$price',
                quantity='$quantity',
                img='$image_name'
                ";

        $res=mysqli_query($conn,$sql);

    
        if($res==true)
        {
            $_SESSION['add']="successful";
            //redirect to login page
            echo"<script>window.location.href='menutest.php'</script>";
        }
        else
        {
            $_SESSION['add']="Registration Unsuccessful!";
            //redirect to registration
            echo"<script>window.location.href='register.php'</script>";
        }

?>