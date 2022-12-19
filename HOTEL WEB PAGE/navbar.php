<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
			initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="WADstyles.css">
    <link rel="stylesheet" href="WADform.css">
    <link rel="stylesheet" href="WADbsform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="footerteststyle.css">




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">



    <title>WAD Project</title>
</head>

<body>

    <!--Nav Bar-->
    <nav>

        <ul class="nav-flex-row">
            <div class="dropdown">
                <a href="WADtestvs.php"><button class="dropbtn">
                    Presenta
                    <i class="fas fa-home" style="font-size:20px"></i>
                </button></a>
            </div>

            <div class="dropdown">
                <a href="aboutus.php"><button class="dropbtn">
                    About Us
                    <i class="fa fa-caret-down"></i>
                </button></a>
                <!--div class="dropdown-content">
                    <a href="#">Chairman's Letter</a>
                    <a href="#">Vision-Mission</a>
                    <a href="#">Awards</a>
                </div-->
            </div>

            <div class="dropdown">
                <a href="menutest.php"><button class="dropbtn">
                    Menu
                    <i class="fas fa-bars" style="font-size:20px"></i>
                </button></a>
                <div class="dropdown-content">
                </div>
            </div>
            <?php
            if(isset($_SESSION['user']))
            {
                echo '<li class="nav-item"><a href="cart.php" target="_blank">Cart&nbsp;<i class="fas fa-shopping-cart" style="font-size:20px"></i></a></li>';
            }
            ?>
            <?php
            if(!isset($_SESSION['user']))
            {
                echo '<li class="nav-item"><a href="register.php" target="__blank">Register&nbsp;<i class="fas fa-clipboard" style="font-size:20px"></i></a></li>';
            }
            ?>

            <?php
            if(isset($_SESSION['user']))
            {
                echo '<li class="nav-item"><a href="profile.php">Profile&nbsp;<i class="fas fa-user" style="font-size:20px"></i></a></li>';
            }
            ?>

            <?php
            if(isset($_SESSION['user']))
            {          
                echo'<button class="btn"><a href="loginreg_logout.php"<i class="fas fa-sign-out-alt"></i></a></button>';
            }
            ?>

            
        </ul>
    </nav>