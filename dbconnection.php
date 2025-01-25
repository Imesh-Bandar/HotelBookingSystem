<?php

$server="localhost";
$user="root";
$password="admin";
$db="hotelmanagementsystem";

//create connection
$connection=mysqli_connect($server,$user,$password,$db);

if($connection){
    echo "Connection Successfull";
}
else{
    echo "Connection Failed";
}


















?>