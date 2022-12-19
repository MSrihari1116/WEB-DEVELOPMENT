<?php
        define('LOCALHOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','wad-database');

        $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or  die(mysqli_error());//connecting to db
        $db_select=mysqli_select_db($conn,DB_NAME) or  die(mysqli_error());//selecting db
?>