<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Hotel Booking</title>
</head>
<body>
    <h2>🏨 Hotel Booking Portal — Register</h2>
    <p>Create your guest account</p>
    <hr>

    <form id = "resgisterForm" method="POST">
        <label for="name">Full Name:</label><br>
        <input type="text" name="name" id="name" placeholder = "John Doe"><br>
        <span id= "nameError" style="color:red"></span>

        <label for="email">Email Address:</label> <br>
        <input type="email" name="email" id="email" placeholder="John@example.com"><br>      
        <span id="emailError" style="color:red"></span> 

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="01700000000"><br>
        <span id="phoneError" style="color:red;">Phone number is required.</span><br>
    </form>

</body>
</html>