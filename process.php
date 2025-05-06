<?php  
session_start();  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $user_token = $_POST["user_token"];  

    // Replace 'YourName' and 'YourStudentID' with your actual values  
    if ($username == "YourName" && $password == "YourStudentID") {  
        $_SESSION["user"] = $username;  
        header("Location: welcome.php"); // Redirect to welcome page  
        exit();  
    } else {  
        // Redirect back to login page with an error message  
        header("Location: login.html?error=1");  
        exit();  
    }  
} else {  
    // If the page is accessed directly without a POST request, redirect to login  
    header("Location: login.html");  
    exit();  
}  
?>  