<?php include('server.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <?php include('errors.php'); ?>
            <label for="name">Username</label><br>
            <input type="text" name="username" id="name" placeholder="Enter your name" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
            <button type="submit" name="login_user">Login</button>
            <p>Not yet a member? <a href="register.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>