<?php
include "../../controlers/loginController.php";
session_start();
if (isset($_COOKIE['remember_token']) && $_SESSION['role']!="admin") {
    header("Location: ../user.php");
    exit;
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Hotel Booking</title>
    <link rel="stylesheet" href="../../assets/login.css">
</head>

<body>
    
    <div class="container">

        <div class="left-panel">
            <p class="panel-brand">*** GRAND PALACE</p>
            <h3 class="panel-heading">Experience<br>true luxury</h3>
            <p class="panel-sub">5-star experience<br>awaits you</p>
        </div>

        <div class="login-container">
            <h2>Sign in</h2>
            <p>Access your elite account class</p>

            <form id="loginForm" method="POST" action="../../controllers/loginController.php">
                <label for="email">Email Adress:</label><br>
                <input type="email" name="email" id="email">
                <span id="emailError"></span><br>

                <label for="password">Password: </label><br>
                <input type="password" name="password" id="password">
                <span id="passError"></span><br>

                <input type="checkbox" id="remember_me" name="remember_me" value="1">
                <label for="remember_me">Remember Me</label><br>
               <p style="color:brown">
                <?= isset($_SESSION["error"]) ? $_SESSION["error"] : ""; ?></p>

                <?php unset($_SESSION["error"]); ?>
                <button type="submit">Login</button>
            </form>
            
        </div>   
    </div>     
</body>

</html>