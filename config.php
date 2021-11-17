<?php
$local='localhost';
$user='root';
$password='';
$database='crud';
$conn=mysqli_connect($local,$user,$password,$database);
    if(!$conn){
        echo "Database is Not Connected";
    }
