<?php
    session_start();
    if (!isset($_SESSION["credit"])) {
        $_SESSION["credit"] = 1000; // Set the default credit amount
    }

    $credit = $_SESSION["credit"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["reset"])) {
            $credit = 1000; // Reset the credit amount
            $_SESSION["credit"] = $credit;
        } else {
            $bet = $_POST["bet"];
            $guess = $_POST["guess"];
            $number = rand(1, 9);
            if ($guess == $number) {
                $credit += $bet;
            } else {
                $credit -= $bet;
            }
            $_SESSION["credit"] = $credit;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>May 23</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background: repeating-linear-gradient(45deg, gold, gold 50px, black 50px, black 100px);
            color: white;
            margin: 0;
            padding: 0;
        }
        form {
        background-color: black;
        padding: 20px;
        border: 4px solid white; /* Add border style */
        border-radius: 10px; /* Add border radius for rounded corners */
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Add box shadow for depth */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container > * {
            margin: 10px;
        }
        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .input-container label {
            margin-right: 10px;
            width: 40px;
        }
        .input-container input[type="number"] {
            width: 60px;
        }
        form {
            background-color: black;
            padding: 20px;
        }
        form p {
            margin-top: 0;
        }
        form input[type="number"],
        form button {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <h1> GUESS THE NUMBER 1-9</h1>
            <div class="input-container">
                <label for="bet">Bet:</label>
                <input type="number" name="bet" value="100" min="1">
            </div>
            <div class="input-container">
                <label for="guess">Guess:</label>
                <input type="number" name="guess" value="1" min="1" max="9">
            </div>
            <p>You have <?= $credit ?> credits</p>
            <button type="submit">Guess</button>
            <button type="submit" name="reset">Reset</button>
        </form>
    </div>
</body>
</html>

//