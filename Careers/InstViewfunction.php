<?php

session_start();
$db = mysqli_connect('localhost', 'root', '', 'thiscareer');

if (isset($_POST['update_my_profile_btn'])) {


function update_institute(){
    global $errors;
    global $db;
   // $inst_id = e($_POST['inst_id']);
    $inst_name = e($_POST['inst_name']);
    $inst_email = e($_POST['inst_email']);
    $inst_password = e($_POST['inst_password']);

    if (empty($inst_name)) {
        array_push($errors, "Name is required");
    }
    if (empty($inst_email)) {
        array_push($errors, "Email are required");
    }
    if (empty($inst_password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $_SESSION['success'] = "Data Updated successfully.";
        mysqli_query($db, "UPDATE patients SET  inst_name ='$inst_name', inst_email='$inst_email', inst_password='$inst_password' WHERE inst_name =$inst_name");

        header('location: instprofile.php');

    }

}}