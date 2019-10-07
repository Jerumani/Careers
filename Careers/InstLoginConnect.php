<?php
session_start();
if (isset( $_GET)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);


    $inst_name = $_GET['inst_name'];
    $inst_password = $_GET['inst_password'];


    $query = "SELECT * FROM institutions WHERE inst_name = :inst_name AND inst_password = :inst_password";
    $statement = $db->prepare($query);
    $statement->execute(
        array(
            ':inst_name' => $inst_name,
            ':inst_password' => $inst_password
        )
    );

    $count = $statement->rowCount();
    if ($count > 0) {

        echo 'Successfully logged in.';
        header ("location: Institution portal.html");

    }else{
        echo 'Could not log in';
    }
}