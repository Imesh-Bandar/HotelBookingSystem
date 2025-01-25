<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVERLER | ADMIN LOGIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        nav {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        nav a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        fieldset {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        legend {
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #0056b3;
        }
        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
        }
        .forgot-password a {
            text-decoration: none;
            color: #007BFF;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .social-login button {
            width: 48%;
            background-color: #4267B2; /* Facebook color */
        }
        .social-login button.google {
            background-color: #DB4437; /* Google color */
        }
    </style>
</head>
<body>
<nav>
    <a href="./index.php">BACK TO HOME</a>
</nav>
<fieldset>
    <legend>TRAVERLER ADMIN LOGIN</legend>
    <form action="../process.php" method="post">
        <label for="username">USERNAME:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="admin">Login</button>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="social-login">
            <button type="button">Login with Facebook</button>
            <button type="button" class="google">Login with Google</button>
        </div>
    </form>
</fieldset>
</body>
</html>