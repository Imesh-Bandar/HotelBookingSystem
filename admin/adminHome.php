<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            margin-bottom: 5px;
        }

        .form-container input, .form-container select, .form-container button {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <?php session_start(); 

    if(isset($_POST['logout'])) {
        session_destroy();
        header("Location: ../index.php");
    }
    
    
    
    ?>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Bookings</a>
        <a href="#" name="logout">Logout</a>
    </div>

    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['admin-username']; ?></h1>

        <h2>Booking List</h2>
        <?php
        include "../dbconnection.php";
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($connection, $sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Email</th><th>Hotel</th><th>Start Date</th><th>End Date</th><th>Actions</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['bid'] . "</td>";
                echo "<td>" . $row['uemail'] . "</td>";
                echo "<td>" . $row['hotel'] . "</td>";
                echo "<td>" . $row['startdate'] . "</td>";
                echo "<td>" . $row['enddate'] . "</td>";
                echo "<td><a href='./delete.php?bid=" . $row['bid'] . "'>Delete</a> | <a href='./update.php?bid=" . $row['bid'] . "'>Update</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data found";
        }
        ?>

        <div class="form-container">
            <form action="../process.php" method="post">
                <legend>Traveler Booking</legend>
                <label for="useremail">User Email</label>
                <input type="email" name="useremail" id="useremail" value="" required>
                <label for="startdate">Start Date</label>
                <input type="date" name="startdate" id="startdate" required>
                <label for="enddate">End Date</label>
                <input type="date" name="enddate" id="enddate" required>
                <label for="hotel">Hotel</label>
                <select name="hotel" id="hotel">
                    <option disabled selected>Select a hotel</option>
                    <option value="1">Hotel 1</option>
                    <option value="2">Hotel 2</option>
                    <option value="3">Hotel 3</option>
                    <option value="4">Hotel 4</option>
                </select>
                <button type="submit" name="adminbooking">Submit</button>
                <button type="reset">Reset</button>
            </form>
        </div>
    </div>
</body>

</html>