<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
</head>
<body>
    <center> 
    <form action="signupform.php" method="get">
        <h1>SIGN UP FORM</h1>
        Name:<input type="text" name="name" id="name" placeholder="Enter name" required><br>
        Email:<input type="email" name="email" id="email" placeholder="Enter email" required><br>
        Mobile Number:<input type="text" name="mobile" id="mobile" placeholder="Enter mobile number" required><br>
        Username:<input type="text" name="username" id="username" placeholder="Enter username" required><br>
        Password:<input type="password" name="password" id="password" placeholder="Enter password" required><br>
        Confirm Password:<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required><br>
        <input type="submit" value="submit">
    </form>

    <?php 
        $name = $_GET['name'];
        $email = $_GET['email'];
        $mobile = $_GET['mobile'];
        $username = $_GET['username'];
        $password = $_GET['password'];
        $confirm_password = $_GET['confirm_password'];

        if (strlen($password) < 8) {
            echo "Password must be at least 8 characters long";
        } else if (!preg_match("#[0-9]+#", $password)) {
            echo "Password must include at least one number!";
        } else if ($password != $confirm_password) {
            echo "Password and confirm password must be the same!";
        } else if (strlen($mobile) != 11) {
            echo "Mobile number must be 11 digits long!";
        } else {
            echo "<h1>Thank you for your submission!</h1>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Mobile number: $mobile</p>";
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
        }
    ?>

    </center>
    <!--  a form that takes in a name, email, mobile#, username and password and confirm password. that checks if the password is valid (at least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character) and if the password and confirm password are the same and if the mobile number is with a length of 11 only. if all the inputs are valid, print out the name, email, mobile#, username and password. --> 

</body>
</html>