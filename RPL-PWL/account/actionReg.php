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
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate form input
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION['error'] = 'All fields are required.';
        header('Location: register.php');
        exit;
    } elseif ($password !== $confirmPassword) {
        $_SESSION['error'] = 'Passwords do not match.';
        header('Location: register.php');
        exit;
    }

    // Check if email already exists in the database
    $stmt = $conn->prepare('SELECT id FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = 'Email is already registered.';
        header('Location: register.php');
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $stmt = $conn->prepare('INSERT INTO user (first_name, last_name, email, password) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $firstName, $lastName, $email, $hashedPassword);
    $stmt->execute();

    $_SESSION['success'] = 'Account created successfully. You can now log in.';
    header('Location: login.php');
    exit;
} else {
    header('Location: register.php');
    exit;
}
