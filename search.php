<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <!-- create a form that check if the valie pf tje string "sample string" if submit we print found and not found if the input is equals to the string -->
    <form action="search.php" method="get">
        <input type="text" name="search" id="search" required>
        <input type="submit" value="submit">
    </form>
    <?php
        $search = $_GET['search'];
        $string = "sample string";
        if ($search == $string) {
            echo "found";
        } else {
            echo "not found";
        }
    ?>
</body>
</html>