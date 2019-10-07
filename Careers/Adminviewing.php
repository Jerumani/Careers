<?php
include ('function.php');

global $errors;

//connect to database
$connection = mysqli_connect('localhost', 'root', '', 'thiscareer');

// initialize variables
$inst_name = "";
$inst_email = "";
$inst_id= 0;
$update = true;

//update records

    /*else {
            echo 'false';

    }

if(isset($_GET['del'])){
    $inst_id=$_GET['del'];
    mysqli_query($connection, "DELETE FROM institutions WHERE inst_id=$inst_id");
    header('location: Adminview.php');
}