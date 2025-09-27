<?php
session_start();

// Include the database configuration file
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a statement to select staff member by email
    $query = "SELECT * FROM staff WHERE email = ?";
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

            // Redirect to staff profile
            header("Location: staffprofile.php");
            exit();
        } else {
            // Invalid password
            $_SESSION['error'] = "Invalid password!";
            header("Location: loginNow.html");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found!";
        header("Location: loginNow.php");
        exit();
    }
}
?>
