<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_style.css">
    <title>Login Page</title>
</head>
<body>
    <!-- Form boxes -->
    <div>

    </div>
    <h1 class="sign_in">Sign in</h1>
    <form action="" method="POST">
        <div class="usr_email">
            <label for="email">Email:</label>
            <input aria-invalid="true" name="email" id="email" type="text" placeholder="Enter Email" data-testid="login-username" >
        </div>
        <div class="usr_password">
            <label for="password">Password:</label>
            <input aria-invalid="true" name="password" id="password" type="password" placeholder="Enter Password" >
        </div>
        <input class="login_botton" name="first_login" type="submit" value="Login">
        <input type="checkbox" class="check_box_remember" name="remember_box" value="false">
        <label class="check_box_remember"for="remember_box">Remember Me</label>
    </form>
</body>
</html>