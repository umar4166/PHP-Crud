<?php
require_once 'config.php';
session_start();
$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
        if(empty($name) && empty($address)){
            $_SESSION['message'] = "Fields are empty";
            header('location: index.php');
            die; 
        }
        else{
            mysqli_query($conn, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
            $_SESSION['message'] = "Record saved"; 
            header('location: index.php');
        }
	}
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
    
        mysqli_query($conn, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
        $_SESSION['message'] = "ID ".$id." Record updated!"; 
        header('location: index.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM info WHERE id=$id");
        $_SESSION['message'] = "ID ".$id." Record deleted!"; 
        header('location: index.php');
    }
    ?>