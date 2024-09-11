<?php
session_start(); // Start the session to manage user sessions

// Database connection settings
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "librarydb"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // SQL query to check the user's credentials
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'"; // Ensure passwords are hashed in a real application
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, set session variables
        $_SESSION['username'] = $user;
        header("Location: index.php"); 
        exit();
    } else {
        // User not found, display error message
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href = 'login.php';</script>"; // Redirect back to login page
    }
}

$conn->close(); // Close the database connection
?>
