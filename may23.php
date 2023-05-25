<?php
    session_start();
    if (!isset($_SESSION["credit"])) {
        $_SESSION["credit"] = 1000; // Set the default credit amount
    }

    $credit = $_SESSION["credit"];
    $feedback = ""; // Initialize feedback message

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
                if ($credit <= 0) {
                    $feedback = "You're in debt";
                }
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
        /* ...existing styles... */

        .feedback {
            color: red;
            margin-top: 10px;
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
            <?php if (!empty($feedback)): ?>
                <p class="feedback"><?= $feedback ?></p>
            <?php endif; ?>
            <button type="submit">Guess</button>
            <button type="submit" name="reset">Reset</button>
        </form>
    </div>
</body>
</html>
