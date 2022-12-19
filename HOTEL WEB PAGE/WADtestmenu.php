<?php include('WADmenu_db.php'); ?>
<?php include('navbar.php');?>
<?php 
if(!isset($_SESSION['user']))
    {
        include('quickloginbtn.php');
    }
?>
<style>
<?php include('WADtestmenustyle.css'); ?>
</style>
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>

        <!--category start-->
        <br />

        <h3 class="text-center">Beverages</h3>

        <?php
            
            $sql="SELECT * FROM tbl_food WHERE category_id='16' LIMIT 4";

            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0)
            {
                //food in db
                while($row=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $image_name=$row['image_name'];
                    $description=$row['description'];
                    ?>
                            <div class="food-menu-box">
                            <div class="food-menu-img">
                            <?php
                                    if($image_name=="")
                                    {
                                        echo"no image";
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="WAD Project Rishab/<?php echo $image_name ;?>" alt="<?php echo $title; ?>" height="100px" width="100px">

                                    <?php
                                    }

                            ?>
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title ;?></h4>
                                <p class="food-price"><?php echo"Rs.". $price ;?></p>
                                <p class="food-detail">
                                    <?php echo $description ;?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                            </div>
                        
                <?php
                }
                ?>
                    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />
                <?php
                        
            }
                              
            else
            {
                //no food in database
                echo"<tr><td>No food added</td></tr>";
            }

        ?>

    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />


        <h3 class="text-center">Starters</h3>

        <?php
            
            $sql="SELECT * FROM tbl_food WHERE category_id='14'LIMIT 4";

            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0)
            {
                //food in db
                $sn=1;
                while($row=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $image_name=$row['image_name'];
                    $description=$row['description'];
                    ?>
                            <div class="food-menu-box">
                            <div class="food-menu-img">
                            <?php
                                    if($image_name=="")
                                    {
                                        echo"no image";
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="WAD Project Rishab/<?php echo $image_name ;?>" alt="<?php echo $title; ?>" height="100px" width="100px">

                                    <?php
                                    }

                            ?>
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title ;?></h4>
                                <p class="food-price"><?php echo"Rs.". $price ;?></p>
                                <p class="food-detail">
                                    <?php echo $description ;?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                            </div>
                        
                <?php
                }
                ?>
                    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />

                <?php
            }
                              
            else
            {
                //no food in database
                echo"<tr><td>No food added</td></tr>";
            }

        ?>

    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />

        <h3 class="text-center">Main-Course</h3>

        <?php
            
            $sql="SELECT * FROM tbl_food WHERE category_id='15'LIMIT 4";

            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0)
            {
                //food in db
                $sn=1;
                while($row=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $image_name=$row['image_name'];
                    $description=$row['description'];
                    ?>
                            <div class="food-menu-box">
                            <div class="food-menu-img">
                            <?php
                                    if($image_name=="")
                                    {
                                        echo"no image";
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="WAD Project Rishab/<?php echo $image_name ;?>" alt="<?php echo $title; ?>" height="100px" width="100px">

                                    <?php
                                    }

                            ?>
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title ;?></h4>
                                <p class="food-price"><?php echo"Rs.". $price ;?></p>
                                <p class="food-detail">
                                    <?php echo $description ;?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                            </div>
                        
                <?php
                }
                ?>
                    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />

                <?php
                        
            }
                              
            else
            {
                //no food in database
                echo"<tr><td>No food added</td></tr>";
            }

        ?>

    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />

        <h3 class="text-center">Deserts</h3>

        <?php
            
            $sql="SELECT * FROM tbl_food WHERE category_id='17' LIMIT 4";

            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0)
            {
                //food in db
                $sn=1;
                while($row=mysqli_fetch_assoc($res))//get all rows and store in rows variable
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $image_name=$row['image_name'];
                    $description=$row['description'];
                    ?>
                            <div class="food-menu-box">
                            <div class="food-menu-img">
                            <?php
                                    if($image_name=="")
                                    {
                                        echo"no image";
                                    }
                                    else
                                    {
                                    ?>
                                    <img src="WAD Project Rishab/<?php echo $image_name ;?>" alt="<?php echo $title; ?>" height="100px" width="100px">

                                    <?php
                                    }

                            ?>
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title ;?></h4>
                                <p class="food-price"><?php echo"Rs.". $price ;?></p>
                                <p class="food-detail">
                                    <?php echo $description ;?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                            </div>
                        
                <?php
                }
                ?>
                    <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br />

                <?php
                        
            }
                              
            else
            {
                //no food in database
                echo"<tr><td>No food added</td></tr>";
            }

        ?>



        <div class="clearfix"></div>



    </div>

</section>

<?php include('footer.php');