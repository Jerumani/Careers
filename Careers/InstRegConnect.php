<?php
//include ('connection.php');
session_start();
if(isset ($_POST)) {
    $user = 'root';
    $pass= '';
    $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);

    $form = $_POST;
    $inst_name = $form['inst_name'];
    $inst_password = $form['inst_password'];
    $inst_email = $form['inst_email'];


    $sql="INSERT INTO institutions (inst_name,inst_password, inst_email) VALUES (:inst_name,:inst_password,:inst_email)";
    $query =$db->prepare($sql);
    $result = $query->execute(array(':inst_name'=>$inst_name, ':inst_password'=>$inst_password, ':inst_email'=>$inst_email ));
    if ($result){
        echo "Registration Complete";
        echo "Registered Successfully";

    }else{
        echo"Failed to register";
    }}