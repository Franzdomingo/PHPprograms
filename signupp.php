<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="loginp.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required autocomplete="on" autofocus><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autocomplete="on"><br><br>
        
        <label for="mobile">Mobile No.:</label>
        <input type="tel" id="mobile" name="mobile" required autocomplete="on"><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required autocomplete="on" minlength="5"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required autocomplete="off" minlength="8"><br><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required autocomplete="off" minlength="8"><br><br>
        
        <input type="submit" value="Signup">
    </form>
    <li><a href="loginp.php">Login</a></li>
</body>
</html>
