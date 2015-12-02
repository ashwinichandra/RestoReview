<?php
$username = "root";
$password = "";
$dbhost = "mysql:host=localhost;dbname=restaurant_db";
           
               
$con = new PDO($dbhost, $username, $password); 
echo "connected";
