<?php
include 'functions.php';

// Determine the action to be taken based on the query parameter
$action = $_GET['action'];

if ($action == 'getTotalBooks') {
    echo getTotalBooks($conn);
}

if ($action == 'orderBook' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id'];
    $bookId = $_POST['book_id'];
    orderBook($conn, $userId, $bookId);
    echo "Book ordered successfully!";
}

if ($action == 'getBooksByUserPreference') {
    $userId = $_GET['user_id'];
    $books = getBooksByUserPreference($conn, $userId);
    echo json_encode($books);
}

$conn->close();
?>
