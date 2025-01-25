<?php

//import db connection
include "./dbconnection.php";
session_start();
//check if the register button is clicked
if (isset($_POST['register'])) {
    //get the data form the from
    //echo "register button clicked";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // //
    // echo $username . "<br>";
    // echo $email . "<br>";
    // echo $city . "<br>";
    // echo $gender . "<br>";
    // echo $password . "<br>";


   //sql query to save the data into the database
$sql = "INSERT INTO USER(name,email,password,gender,city) VALUES('$username','$email','$password','$gender','$city');";
//execute the query
$result = mysqli_query($connection, $sql);

//check if the query is executed
if ($result) {
    echo "Data inserted successfully";
    header("Location:./login.php");
} else {
    echo "Failed to insert data: " . mysqli_error($connection);
    header("Location:./register.php");
}
}

 
