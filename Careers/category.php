<?php
//include 'QAconnect.php';
session_start();


if(isset ($_POST)){


            $user = 'root';
            $pass= '';
            $db = new PDO('mysql:host=localhost;dbname=thiscareer', $user, $pass);

    $form = $_POST;
        $cat_name = $form['cat_name'];
        $cat_description = $form['cat_description'];

        $sql="INSERT INTO categories (cat_name,cat_description)
      VALUES (:cat_name,:cat_description)";
        $query =$db->prepare($sql);
        $result = $query->execute(array(':cat_name'=>$cat_name, ':cat_description'=>$cat_description ));
    if(!$result)
    {
        //something went wrong, display the error
        echo "Error" ;
    }
    else
    {
        echo 'New category successfully added.';
    }
}
