<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVERLER | LOGIN</title>
</head>
<body>
<nav>
    <a href="./index.php">BACK TO HOME</a>
    </nav>
    <fieldset>
        <legend>TRAVERLER LOGIN</legend>
        <form action="./process.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" class="login" name="login">Login</button>
            <button><a href="./register.php">REGISTER</a></button>
        </form>
    </fieldset>
</body>
</html>