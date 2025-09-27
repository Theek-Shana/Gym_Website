<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate that updateid is present
    if (isset($_POST['updateid']) && !empty($_POST['updateid'])) {
        $updateid = $_POST['updateid'];
        $full_name = $_POST['full_name'];
        $mobile_number = $_POST['mobile_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];  // Directly use the password without hashing

        try {
            // Prepare the SQL update query
            $sql = "UPDATE staff SET full_name = ?, mobile_number = ?, email = ?, password = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);

            // Bind parameters correctly
            $stmt->bind_param("ssssi", $full_name, $mobile_number, $email, $password, $updateid);

            // Execute the query
            if ($stmt->execute()) {
                header("Location: userprofile.php");
                exit();
            } else {
                echo 'Error: ' . $stmt->error;
            }
        } catch (Exception $e) {
            echo "Message: " . $e->getMessage();
        }
    } else {
        echo "<p>ID not provided or invalid.</p>";
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>
