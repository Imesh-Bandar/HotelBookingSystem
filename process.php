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


//check if the login button is clicked
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //sql query to check if the user is registered
    $sql = "SELECT * FROM USER WHERE email='$email' AND password='$password';";
    //execute the query
    $result = mysqli_query($connection, $sql);
    //check if the username and email has athe data
    if (mysqli_num_rows($result) > 0) {
        //if user have the data and navigate the home page
        echo "Login Successfull";
        //store the email inthe session to access in the other pages
        $_SESSION['email'] = $email;

        header("Location:./bookings.php");
    } else {
        //if user does not have the data and navigate the login page
        echo "Login Failed";
        header("Location:./login.php");
    }
}


//bookings
if (isset($_POST['booking'])) {
    //echo "Booking button clicked";
    $useremail = $_POST['useremail'];
    $hotel = $_POST['hotel'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    //sql query
    $sql = "INSERT INTO booking(uemail,hotel,startdate,enddate) VALUES('$useremail','$hotel','$startdate','$enddate');";

    //execute the query
    $result = mysqli_query($connection, $sql);

    if($result){
        echo "Booking Successfull";
        header("Location:./home-page.php");

    }else{
        echo "Booking Failed";
        header("Location:./bookings.php");
    }
}


//admin login
if(isset($_POST['admin'])){
    $adminusername=$_POST['username'];
    $password=$_POST['password'];

    //sql query to check if the user is registered
    $sql="SELECT * FROM ADMIN WHERE username='$adminusername' AND password='$password';";

    //execute the query
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0){
        echo "Admin Login Successfull";
        header("Location:./admin/adminHome.php");
        $_SESSION['admin-username']=$adminusername;
    }else{
        echo "Admin Login Failed";
        header("Location:./admin/adminlogin.php");
    }
}

//bookings
if (isset($_POST['adminbooking'])) {
    //echo "Booking button clicked";
    $useremail = $_POST['useremail'];
    $hotel = $_POST['hotel'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    //sql query
    $sql = "INSERT INTO booking(uemail,hotel,startdate,enddate) VALUES('$useremail','$hotel','$startdate','$enddate');";

    //execute the query
    $result = mysqli_query($connection, $sql);

    if($result){
        echo "Booking Successfull";
        
    }else{
        echo "Booking Failed";
        
    }
}



