<?php
session_start();
$usr=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Rental - Library Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Container */
.container {
    width: 80%;
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Form Header */
.container h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

/* Form Labels */
form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

/* Form Inputs */
form input[type="text"],
form input[type="email"],
form input[type="date"],
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

/* Form Textarea */
form textarea {
    resize: vertical;
    height: 100px;
}

/* Submit Button */
form button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Form Validation */
form input:focus,
form textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Success/Error Messages */
p {
    text-align: center;
    color: green; /* Change this to red for error messages */
    margin-top: 10px;
}

/* Responsive Design */
@media (max-width: 600px) {
    .container {
        width: 90%;
        padding: 15px;
    }

    form label,
    form input,
    form button {
        font-size: 14px;
    }
}

    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<?php
    // Handle form submission
    if (isset($_POST['submit_booking'])) {
        // Database connection
        $servername = "localhost";
        $username = "root"; // Your database username
        $password = "";     // Your database password
        $dbname = "librarydb"; // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $book_id = $_POST['book_id'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $booking_date = $_POST['booking_date'];
        $return_date = $_POST['return_date'];
        $additional_notes = $_POST['additional_notes'];

        // SQL query to insert data into the bookings table
        $sql = "INSERT INTO bookings (book_id, user_name, user_email, booking_date, return_date, additional_notes)
                VALUES ('$book_id', '$user_name', '$user_email', '$booking_date', '$return_date', '$additional_notes')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Booking successful!</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        // Close the database connection
        $conn->close();
    }
    ?>
    

    <div class="container">
        <h1>Book a Rental</h1>
        <form action="booking.php" method="POST">
            <label for="book_id">Book ID:</label>
            <input type="text" id="book_id" name="book_id" required>

            <label for="user_name">Your Name:</label>
            <input type="text" id="user_name" name="user_name"value="<?php echo $usr; ?>" readonly required>

            <label for="user_email">Your Email:</label>
            <input type="email" id="user_email" name="user_email" required>

            <label for="booking_date">Booking Date:</label>
            <input type="date" id="booking_date" name="booking_date" required>

            <label for="return_date">Return Date:</label>
            <input type="date" id="return_date" name="return_date" required>

            <label for="additional_notes">Additional Notes:</label>
            <textarea id="additional_notes" name="additional_notes" rows="4"></textarea>

            <button type="submit" name="submit_booking">Submit Booking</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>

    
</body>
</html>
