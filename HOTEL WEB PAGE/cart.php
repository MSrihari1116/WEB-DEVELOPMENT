

<!DOCTYPE html>

<html>

<head>

    <title>Cart</title>

    <link rel="stylesheet" type="text/css" href="profiledisplay.css">
    <link rel="stylesheet" type="text/css" href="cartstyle.css">



    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php include('navbar.php');?>
<?php
    if(!isset($_SESSION['user']))
    {
        echo "<script>window.location.href='loginreg.php'</script>";
    }
?>
<br /> <br />
<div class="container-xl px-4 mt-4">

    <nav class="nav nav-borders">
        <a class="nav-link" href="profile.php" target="_blank" >Profile</a>
        <a class="nav-link" href="reservation.php" target="_blank">Reservation</a>
        <a class="nav-link active ms-0" href="cart.php" >Cart</a>
    </nav>
    <hr>    

    <div class="cartcontainer">

        <p align="center" style="font-size:40px;"><b>Cart Items</b></p>


        <div class="cart">

            <div class="products">

                
                    <?php
            
                        $username=$_SESSION['user'];


                        $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
                        $db_select=mysqli_select_db($conn,'signupform') or die(mysqli_error());

                        $sql="SELECT * FROM tbl_cart WHERE username='$username'";

                        $res=mysqli_query($conn,$sql);

                        if($res==TRUE)
                        {
                            //count rows to chk if we have data in database
                            $count = mysqli_num_rows($res);
                            $sn=1;

                            if($count>0)
                            {
                                //data present in database
                                while($rows=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                                {
                                    $id=$rows['id']; 
                                    $title=$rows['title'];
                                    $price=$rows['price'];
                                    $quantity=$rows['quantity'];
                                    $image_name=$rows['img'];

                                    //display the values in the table
                                    ?>
                                    <div class="product">

                                    <img src="images/<?php echo ($image_name.'.jpg') ;?>" alt="<?php echo $title; ?>">

                                    <div class="product-info">
                                    <h3 class="product-name"><?php echo $title;?></h3>

                                    <h4 class="product-price">₹<?php echo $price;?></h4>
                                    <?php $total=$price*$quantity; ?>

                                    <h4 class="product-price">Total:&nbsp;₹<?php echo $total;?></h4>

                                    <p class="product-quantity">Qnt: &nbsp;<?php echo $quantity;?> 

                                    <p class="product-remove">

                                        <i class="fa fa-trash" aria-hidden="true"></i>

                                        <span class="remove">Remove</span>

                                    </p>

                                </div>

                            </div>

                                    <?php
                                    $sn++;
                                }


                            }
                            else{
                                //data not present
                            }
         

                        }

                    ?>

                        

                

            </div>

            <div class="cart-total">

                <p>

                    <span>Total Price:</span>

                    <span>₹300</span>

                </p>

                <p>

                    <span>Number of Items:</span>

                    <span><?php echo $sn-1; ?></span>

                </p>

                <a href="#">Proceed to Checkout</a>

            </div>

        </div>

    </div>
</div>

<?php include('footer.php'); ?>

</body>


</html>
