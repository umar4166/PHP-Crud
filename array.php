<?php
// DataBase Connection.
$local='localhost';
$username='root';
$password='';
$db='array';
$conn=mysqli_connect($local,$username,$password,$db);
if(!$conn){
    echo 'You Are Not Connected To Database'. mysqli_connect_error();
}
// Connection Has Been Established With Database Name "array"

$names=array("Umar","Asfand","Haris","Hassam");
$value=array("username"=>"ahmad","name"=>"AliHassan","position"=>"WPDeveloper");
$value=array("username"=>"ahmad","name"=>"AliHassan","position"=>"WPDeveloper");
$value=array("username"=>"ahmad","name"=>"AliHassan","position"=>"WPDeveloper");
/*
Umar Farooq
*/
?>