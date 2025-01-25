<?php
session_start();
include "../dbconnection.php";

if(!isset($_GET['bid'])){
    header("Location:./adminHome.php");
    echo "Booking ID not found";
}
$bid = $_GET['bid'];

//if check if it have the data exit or not
$sql = "SELECT * FROM booking WHERE bid=$bid";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['updatebooking'])) {

    echo "Booking button clicked";
    $uemail = $_POST['uemail'];
    $hotel = $_POST['hotel'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $sql = "UPDATE booking SET uemail='$uemail',hotel='$hotel',startdate='$startdate',enddate='$enddate' WHERE bid=$bid";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "Booking Updated";
        //header("Location:./adminHome.php");
    }else{
        echo "Booking Update Failed";
        header("Location:./update.php");
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVERLER BOOKING</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        fieldset {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input, select, button {
            margin-top: 5px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <fieldset>
        <form action="./update.php" method="post">
            <?php echo "Welcome " . $_SESSION["email"]; ?>
            <hr>
            <legend>TRAVELER BOOKING UPDATE</legend>
            <label for="useremail">User Email</label>
            <input type="email" name="uemail" id="useremail" value="<?php echo $row['uemail'] ?>" required>
            <label for="startdate">START DATE</label>
            <input type="date" name="startdate" id="startdate" value="<?php echo $row['startdate'] ?>" required>
            <label for="enddate">END DATE</label>
            <input type="date" name="enddate" id="enddate" value="<?php echo $row['enddate'] ?>" required>
            <label for="hotel">HOTEL</label>
            <select name="hotel" id="hotel" required>
                <option disabled selected>selected</option>
                <option value="1" <?php if($row['hotel'] == '1') echo 'selected'; ?>>HOTEL 1</option>
                <option value="2" <?php if($row['hotel'] == '2') echo 'selected'; ?>>HOTEL 2</option>
                <option value="3" <?php if($row['hotel'] == '3') echo 'selected'; ?>>HOTEL 3</option>
                <option value="4" <?php if($row['hotel'] == '4') echo 'selected'; ?>>HOTEL 4</option>
            </select>
            <button type="submit" name="updatebooking">Update</button>
            <button type="reset">Reset</button>
        </form>
    </fieldset>
</body>

</html>