<?php include('server.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css" >
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <?php include('errors.php'); ?>
            <label for="name">Username</label><br>
            <input type="text" name="username" id="name" placeholder="Enter your name" required><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="xyz@gmail.com" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
            <label for="password">Confirm Password</label><br>
            <input type="password" name="password2" id="confirm_password" placeholder="Re-Enter your password" required><br>
            <button type="submit" name="reg_user">Register</button>
            <p>Already a member? <a href="login.php">Sign in</a> </p>  
        </form>
    </div>
</body>
</html>