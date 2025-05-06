<?php  
session_start();  

// Include header  
include("header.inc");  

if (isset($_SESSION["user"])) {  
    $username = $_SESSION["user"];  
    echo "<h1>Welcome, " . htmlspecialchars($username) . "!</h1>";  
    echo "<p>You are now logged in.</p>";  
    echo "<a href='logout.php'>Logout</a>"; // Add a logout link  
} else {  
    // Not logged in, redirect to login page  
    header("Location: login.html");  
    exit();  
}  

// Include footer  
include("footer.inc");  
?>  