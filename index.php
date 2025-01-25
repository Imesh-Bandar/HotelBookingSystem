<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVELER</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #fff;
            margin: 0 1rem;
            text-decoration: none;
        }

        nav img {
            height: 50px;
        }

        main {
            padding: 2rem;
        }

        section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 1rem;
            padding: 1rem;
            text-align: center;
            display: inline-block;
            width: calc(50% - 2rem);
            vertical-align: top;
        }

        .card img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .card button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            cursor: pointer;
            border-radius: 5px;
        }

        .card button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <nav>
        <img src="#" alt="CompanyLogo">
        <a href="./home-page.php">Home</a>
        <a href="./login.php">Login</a>
        <a href="./register.php">Register</a>
    </nav>
    <main>
        <section>
            <h1>WELCOME TO TRAVELER</h1>
            <p>Traveler is a platform that allows you to book your flights and hotels at the best prices. We also offer you the best travel guides to help you plan your trips.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil eaque, accusamus quod aut voluptates laborum iure delectus perferendis atque quo odio ipsam odit cum dolore numquam beatae obcaecati eos explicabo!</p>
        </section>

        <!-- CARD -->
        <div class="card">
            <img src="" alt="" srcset="">
            <p>Description</p>
            <button>View</button>
            <button>Book Now</button>
            <small>PRICE</small>
        </div>
        <!-- CARD2 -->
        <div class="card">
            <img src="" alt="" srcset="">
            <p>Description</p>
            <button>View</button>
            <button>Book Now</button>
        </div>
    </main>

    <footer>
        DEVELOPED BY: IMESH BANDARA
    </footer>
</body>

</html>