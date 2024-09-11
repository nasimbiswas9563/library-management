<?php
// Database configuration
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "librarydb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $check_user = "SELECT * FROM user WHERE username = '$username' ";
    $result = $conn->query($check_user);

    if ($result->num_rows > 0) {
        // Username or email already exists
        echo "Username or email already exists. Please try a different one.";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Signup successful. You can now <a href='login.php'>login</a>.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>
