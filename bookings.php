<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVELER BOOKING</title>
    <link rel="stylesheet" href="./css/main.css">
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
        legend {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: 500;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button[type="reset"] {
            background-color: #6c757d;
        }
        button:hover {
            background-color: #0056b3;
        }
        button[type="reset"]:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <fieldset>
        <form action="./process.php" method="post">
            <?php echo "Welcome " . $_SESSION["email"]; ?>
            <legend>TRAVELER BOOKING</legend>
            <label for="useremail">Email</label>
            <input type="email" name="useremail" id="useremail" value="<?php echo $_SESSION["email"]; ?>" required>
            <label for="startdate">START DATE</label>
            <input type="date" name="startdate" id="startdate" required>
            <label for="enddate">END DATE</label>
            <input type="date" name="enddate" id="enddate" required>
            <label for="hotel">HOTEL</label>
            <select name="hotel" id="hotel">
                <option disabled selected>selected</option>
                <option value="1">HOTEL 1</option>
                <option value="2">HOTEL 2</option>
                <option value="3">HOTEL 3</option>
                <option value="4">HOTEL 4</option>
            </select>
            <button type="submit" name="booking">SUBMIT</button>
            <button type="reset">RESET</button>
        </form>
    </fieldset>
</body>

</html>