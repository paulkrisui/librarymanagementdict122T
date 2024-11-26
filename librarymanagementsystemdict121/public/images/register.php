<!DOCTYPE html>  
<html>  
<head> 
    <title>Register - Library Management System</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> </head> 
<body class="centered"> 
    <div class="form-container"> 
        <h2>Register</h2> 
        <!-- Registration form --> 
        <form method="POST" action="register.php"> 
            <label for="name">Name:</label> 
            <input type="text" id="name" name="name" required><br> 
            <label for="email">Email:</label> 
            <input type="email" id="email" name="email" required><br> 
            <label for="password">Password:</label> 
            <input type="password" id="password" name="password" required><br> 
            <button type="submit">Register</button> 
        </form> 
        <div> 
            <!-- PHP code to display registration message will be added later -->         </div> 
    </div> 
</body> 
</html> 