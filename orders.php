<?php
session_start();
$usr = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History - Library Management System</title>
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
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            color: black;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        /* Heading */
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Success/Error Messages */
        p {
            text-align: center;
            color: green; /* Change this to red for error messages */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Your Booking History</h1>

        <?php
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

        // Prepare the SQL statement with a placeholder
        $sql = "SELECT * FROM bookings WHERE user_name = ? ORDER BY booking_date DESC";

        // Initialize a prepared statement
        $stmt = $conn->prepare($sql);

        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind parameters to the placeholders
        $stmt->bind_param("s", $usr);

        // Execute the prepared statement
        $stmt->execute();

        // Get the result set from the prepared statement
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th>Book ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Booking Date</th>
                    <th>Return Date</th>
                    <th>Additional Notes</th>
                  </tr>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["book_id"]) . "</td>
                        <td>" . htmlspecialchars($row["user_name"]) . "</td>
                        <td>" . htmlspecialchars($row["user_email"]) . "</td>
                        <td>" . htmlspecialchars($row["booking_date"]) . "</td>
                        <td>" . htmlspecialchars($row["return_date"]) . "</td>
                        <td>" . htmlspecialchars($row["additional_notes"]) . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No bookings found.</p>";
        }

        // Close the statement and the database connection
        $stmt->close();
        $conn->close();
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
