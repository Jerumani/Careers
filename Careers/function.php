<?php include ('DBconnect.php');

//escape string
function v($val){
    global $con, $errors;
 return mysqli_real_escape_string($con, trim($val));

}
