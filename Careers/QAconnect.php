<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$connection = mysqli_connect('localhost', 'root', '', 'thiscareer');

if($connection)
{
   echo ('yes');
}
