<?php
include 'db.php';

// Function to get the total number of books
function getTotalBooks($conn) {
    $sql = "SELECT COUNT(*) AS total_books FROM books";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total_books'];
}

// Function to order a book
function orderBook($conn, $userId, $bookId) {
    $sql = "INSERT INTO orders (user_id, book_id, order_date, status) VALUES (?, ?, NOW(), 'Ordered')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $userId, $bookId);
    $stmt->execute();
    $stmt->close();
}

// Function to get books based on user preferences
function getBooksByUserPreference($conn, $userId) {
    $sql = "SELECT * FROM books 
            WHERE genre IN (SELECT preferred_genre FROM user_preferences WHERE user_id = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $books = [];
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
    $stmt->close();
    return $books;
}
?>
