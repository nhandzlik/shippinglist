<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Connect to the database (replace with your database credentials)
$conn = mysqli_connect("localhost", "id", "password", "test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user ID from the session
$user_id = $_SESSION['user_id'];

// Handle adding items to the shopping list
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item'])) {
    $item = $_POST['item'];

    $sql = "INSERT INTO shopping_list (user_id, item) VALUES ('$user_id', '$item')";

    if (mysqli_query($conn, $sql)) {
        echo "Item added to the shopping list!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>