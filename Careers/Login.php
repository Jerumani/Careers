<?php
session_start();
if (isset( $_GET)) {
    $user = 'root';
    $pass = '';
    $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);


    $username = $_GET['username'];
    $password = $_GET['password'];


    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $statement = $db->prepare($query);
    $statement->execute(
        array(
            ':username' => $username,
            ':password' => $password
        )
    );

    $count = $statement->rowCount();
    if ($count > 0) {

        echo 'Successfully logged in.';
        header ("location: Students.html");

    }else{
        echo 'Could not log in';
    }
}