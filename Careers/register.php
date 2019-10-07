
<?php
//include ('connection.php');
session_start();
if(isset ($_POST)) {
    $user = 'root';
    $pass= '';
    $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);

    $form = $_POST;
    $username = $form['username'];
    $password =$form['password'];
    $email = $form['email'];




    $sql="INSERT INTO users (username,password, email) VALUES (:username,:password,:email)";
    $query =$db->prepare($sql);
    $result = $query->execute(array(':username'=>$username, ':password'=>$password, ':email'=>$email ));

    if ($result){
        header("location: loggingas.html");


    }else{
        echo "Failed to register";
    }}


