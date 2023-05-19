<?php
session_start();
if (!isset($_SESSION['credit'])) {
    $_SESSION['credit'] = 1000;
}

if (isset($_POST['guess']) && isset($_POST['bet'])) {
    $randomNumber = rand(1, 9); 
    $guess = $_POST['guess'];
    $bet = $_POST['bet'];
    
    if ($guess == $randomNumber) {
        $_SESSION['credit'] += $bet;
        echo "You won! Your new credit is: ";
    } else {
        $_SESSION['credit'] -= $bet;
        echo "You lost.";
    }
}

echo "Your current credit is: " . $_SESSION['credit'];

?>
<form action="" method="post">
    <label for="guess">Enter your guess(1-9):</label>
    <input type="number" id="guess" name="guess" min="1" max="9">
    <br>
    <label for="bet">Enter your bet:</label>
    <input type="number" id="bet" name="bet">
    <br>
    <input type="submit" value="Submit">
</form>
