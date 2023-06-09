<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>June 8 discussion</title>
</head>
<body>
<center>
  <form action="jun8.php" method= "get">
    Enter name: <input type="text" name="name" required ><br>
    Username: <input type="text" name="username" required ><br>
    Password: <input type="password" name="password" required ><br>

    <input type="submit">
  </form>
<?php
//check if password is valid (at least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character)
//take name and username and password from input and store in variables
$name = $_GET['name'];
$username = $_GET['username'];
$password = $_GET['password'];

//check if password is valid
if (strlen($password) < 8) {
  echo "Password must be at least 8 characters long";
} else if (!preg_match("#[0-9]+#", $password)) {
  echo "Password must include at least one number!";
} else if (!preg_match("#[a-z]+#", $password)) {
  echo "Password must include at least one lowercase letter!";
} else if (!preg_match("#[A-Z]+#", $password)) {
  echo "Password must include at least one uppercase letter!";
} else if (!preg_match("#\W+#", $password)) {
  echo "Password must include at least one special character!";
} else {
  echo "Password is valid!";
}

?>
</center>

</body>
</html>