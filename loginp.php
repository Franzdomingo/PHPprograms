<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="menu.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required autocomplete="on" autofocus><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required autocomplete="off"><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
