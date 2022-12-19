<?php include('WADmenu_db.php'); ?>
<?php include('navbar.php');?>


<style>
<?php include('WADtestmenustyle.css'); ?>
</style>

<section class="food-menu">
    <?php 
    if(!isset($_SESSION['user']))
        {
            include('quickloginbtn.php');
        }
    ?>
    
    <div class="container">
        <h2 class="text-center">Food Menu</h2>
        <!--category start-->
        <br />
    
    <?php
        
        $sql1="SELECT * FROM tbl_category";

        $res1=mysqli_query($conn,$sql1);

        $count1=mysqli_num_rows($res1);

        if($count1>0)
        {
            while($rows1=mysqli_fetch_assoc($res1))//get all rows and store in rows variable
            {
                $id1=$rows1['id']; 
                $category=$rows1['title'];
                ?>
                        <h3 class="text-center"><?php echo $category; ?></h3><hr>
                <?php

             
                $sql="SELECT * FROM tbl_food WHERE category_id=$id1 LIMIT 4";

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
                                        <img src="images/<?php echo ($image_name.'.jpg') ;?>" alt="<?php echo $title; ?>" height="220px" width="375px">

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
                                    <form action="order.php" method="get">
                                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                                            <input type="hidden" name="price" id="price" value="<?php echo $price;?>">
                                            <input type="hidden" name="food_title" id="food_title" value="<?php echo $title;?>">
                                            <input type="hidden" name="image_name" id="image_name" value="<?php echo $image_name;?>">
                                            <input type="number"  placeholder="Quantity" min=1 max=20 name="qty" id="qty" required="">
                                            <br><br>
                                            <input type="submit" value="Add To Cart" class="btn btn-primary">
    
                                    </form>


                                    <!--a href="http://localhost/WAD%20Rishab%20Project/order.php?id=<?php echo $id;?>&price=<?php echo $price;?>&food_title=<?php echo $title;?>" class="btn btn-primary">Add To Cart</a-->
                                </div>
                                </div>
                        
                    <?php
                    }
                    ?>
                        <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br /><br /><br />
                    <?php
                        
                }
                              
                else
                {
                    //no food in database
                    echo"<tr><td>No food added</td></tr>";
                }
            ?>
                <br />    <br /><br />    <br />    <br />    <br />    <br />    <br />    <br />    <br /><br /><br />

            <?php
            }

        }

            ?>

</section>
       

<?php include('footer.php') ?>;