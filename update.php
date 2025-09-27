<?php
include("config.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $update = $_GET['id'];

    $sql = "SELECT * FROM staff WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $update);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "<p>No staff member found with the provided ID.</p>";
        exit();
    }
} else {
    echo "<p>ID not provided or invalid.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
        body {
            min-height: 100vh;
            background: url(freshBG.jpg) no-repeat center center/cover;
            display: flex;
            font-family: sans-serif;
        }
        .container {
            margin: auto;
            width: 500px;
            padding: 20px;
            background: rgba(21, 167, 157, 0.8);
            border-radius: 4px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #e28b07;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="updatedb.php" method="POST">
        <h1>Update Staff Information</h1>

        <input type="hidden" name="updateid" value="<?php echo htmlspecialchars($row['id']); ?>">

        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" value="<?php echo htmlspecialchars($row['full_name'], ENT_QUOTES); ?>" required>
        </div>

        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" value="<?php echo htmlspecialchars($row['mobile_number'], ENT_QUOTES); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email'], ENT_QUOTES); ?>" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <input type="submit" class="btn" value="Update">
        <a href="loginNow.html" target="_blank">
            <button type="button" class="btn">Back</button>
        </a>
    </form>
</div>

</body>
</html>
