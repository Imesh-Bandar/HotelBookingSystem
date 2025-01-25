<?php

include "../dbconnection.php";
session_start();
$bid = $_GET['bid'];
$sql = "DELETE FROM booking WHERE bid=$bid";
$result = mysqli_query($connection, $sql);
if ($result) {
    echo "Booking Deleted";
    header("Location:./adminHome.php");
} else {
    echo "Booking Delete Failed";
    header("Location:./delete.php");
}

















?>