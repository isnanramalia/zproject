<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'shopping-cart-db';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Get form input values
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = 'Email and password are required.';
        header('Location: login.php');
        exit;
    }

    // Check if email exists in the database
    $stmt = $conn->prepare('SELECT id, password FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        $_SESSION['error'] = 'Email or password is incorrect.';
        header('Location: login.php');
        exit;
    }

    // Bind the result to variables
    $stmt->bind_result($userId, $hashedPassword);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['user_id'] = $userId;
        $_SESSION['success'] = 'Logged in successfully.';
        header('Location: ../index.php'); // Redirect to the dashboard page or any other page you want
        exit;
    } else {
        $_SESSION['error'] = 'Email or password is incorrect.';
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
