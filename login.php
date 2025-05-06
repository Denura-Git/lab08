<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Form</title>  
</head>  
<body>  
<header>  
        <h1>My Awesome Website</h1>  
    </header>  

    <form action="process.php" method="post">  
        <label for="username">Username:</label>  
        <input type="text" id="username" name="username" required><br><br>  

        <label for="password">Password:</label>  
        <input type="password" id="password" name="password" required><br><br>  

        <input type="hidden" name="user_token" value="YN12345678">  <!-- Replace with your actual initials and student ID -->  

        <input type="submit" value="Login">  
    </form>  

    <p>Don't have an account?  Create one. </p>  
    <footer>  
        <p>&copy; <?php echo date("Y"); ?> Your Name. All rights reserved.</p>  
    </footer> 

</body>  
</html>  