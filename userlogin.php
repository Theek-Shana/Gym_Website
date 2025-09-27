<?php
session_start();

// Include the database configuration file
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a statement to select user by email
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables with user data
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['mobile_number'] = $user['mobile_number'];
            $_SESSION['email'] = $user['email'];

            // Redirect to user profile
            header("Location: userprofile.php");
            exit();
        } else {
            // Invalid password
            $_SESSION['error'] = "Invalid password!";
            header("Location: login.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found!";
        header("Location: login.php");
        exit();
    }
}
?>
