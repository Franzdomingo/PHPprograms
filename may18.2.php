<center>
    <?php
        session_start();
        if (!isset($_SESSION['number'])) {
            $_SESSION['number'] = rand(1, 9);
        }
        if (isset($_POST['guess'])) {
            $guess = $_POST['guess'];
            if ($guess == $_SESSION['number']) {
                echo "Correct";
                unset($_SESSION['number']);
            } else {
                echo "Incorrect. Try again.";
            }
        }
    ?>

    <form method="post">
        <label for="guess">Enter your guess(1-9):</label>
        <input type="number" id="guess" name="guess">
        <input type="submit" value="Submit">
    </form>
</center>