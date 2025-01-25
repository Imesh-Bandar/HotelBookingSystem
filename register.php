<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | REGISTER</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        header, footer {
            width: 100%;
            background-color: #28a745;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        fieldset {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px;
            margin-top: 20px;
        }

        legend {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #28a745;
        }

        input[type="radio"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            margin-bottom: 5px;
            display: block;
        }

        .form-group input[type="radio"] {
            margin-right: 5px;
        }

        .form-group .radio-label {
            display: inline-block;
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Hotel Booking System</h1>
    </header>
    <fieldset>
        <form action="./process.php" method="post">
            <legend>TRAVELER REGISTER</legend>
            <div class="form-group">
                <label for="username">USER NAME</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="gender">GENDER</label>
                <div class="radio-label">
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male">MALE</label>
                </div>
                <div class="radio-label">
                    <input type="radio" name="gender" value="female" id="female" required>
                    <label for="female">FEMALE</label>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <input type="submit" name="register" value="REGISTER">
            <a href="./login.php">If you already have an account</a>
        </form>
    </fieldset>
    <footer>
        <p>&copy; 2023 Hotel Booking System. All rights reserved.</p>
    </footer>
</body>

</html>