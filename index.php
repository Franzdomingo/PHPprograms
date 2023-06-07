<!DOCTYPE html>
<html>
<head>
    <title>Random PHP Program</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>Random PHP Program</h1>

    <?php
        // PHP code to generate a random number between 1 and 10
        $randomNumber = rand(1, 10);

        // PHP code to generate a random string
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        $length = 5;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
    ?>

    <p id="random-number"><?php echo $randomNumber; ?></p>
    <p id="random-string"><?php echo $randomString; ?></p>
</body>
</html>
