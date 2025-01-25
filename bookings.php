<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVERLER BOOKING</title>
</head>

<body>
    <fieldset>
        <form action="./process.php" method="post">
            <?php echo "Welcome " . $_SESSION["email"]; ?>
            <legend>TRAVELER BOOKING</legend>
            <label for="useremail"></label>
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