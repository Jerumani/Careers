<?php
session_start();
if (isset( $_GET)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);


    $admin_name = $_GET['admin_name'];
    $admin_password = $_GET['admin_password'];


    $query = "SELECT * FROM admin WHERE admin_name = :admin_name AND admin_password = :admin_password";
    $statement = $db->prepare($query);
    $statement->execute(
        array(
            ':admin_name' => $admin_name,
            ':admin_password' => $admin_password
        )
    );

    $count = $statement->rowCount();
    if ($count > 0) {

        echo 'Successfully logged in.';
        header ("location: Adminportal.html");

    }else{
        echo 'Could not log in';
    }
}