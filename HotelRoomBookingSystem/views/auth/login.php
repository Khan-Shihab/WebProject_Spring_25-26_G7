<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>🏨 Hotel Booking Portal — Login</h2>
    <p>Sign in to your guest account</p>
    <hr>

    <form id = "loginForm" method = "POST" action = "../../controllers/loginController>
        <label for="email">Email Adress:</label><br>
        <input type="email" name="email" id="email">
        <span id= "emailError"></span><br>

        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password">
        <span id = "passError"></span><br>

        <input type="checkbox" id="remember_me" name="remember_me" value="1">
        <label for="remember_me">Remember Me</label><br>

        <button type="submit">Login</button>


    </form>

</body>
</html>