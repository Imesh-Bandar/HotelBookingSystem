<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVERLER | LOGIN</title>
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
        nav {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #007BFF;
        }
        fieldset {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 320px;
            transition: box-shadow 0.3s;
        }
        fieldset:hover {
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }
        legend {
            font-size: 1.5em;
            font-weight: 600;
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        button a {
            color: #fff;
            text-decoration: none;
        }
        button.login {
            width: 100%;
            margin-bottom: 10px;
        }
        .form-footer {
            text-align: center;
            margin-top: 10px;
        }
        .form-footer a {
            color: #007BFF;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        .form-footer a:hover {
            color: #0056b3;
        }
    </style>
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
        <div class="form-footer">
            <a href="./register.php">REGISTER</a>
        </div>
    </form>
</fieldset>
</body>
</html>