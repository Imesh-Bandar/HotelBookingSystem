<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | REGISTER</title>
</head>

<body>
    <fieldset>
        <form action="./process.php" method="post">
            <legend>TRAVERLER REGISTER</legend>
            <label for="username">USER NAME</label>
            <input type="text" name="username" id="username" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="city">city</label>
            <input type="text" name="city" id="city" required>

            <label for="gender">GENDER</label>
            <input type="radio" name="gender" value="male"/>MALE
            <input type="radio" name="gender" value="female"/>FEMALE

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" name="register" value="REGISTER">


            <a href="./login.php">if user have an account</a>
        </form>
    </fieldset>

</body>

</html>