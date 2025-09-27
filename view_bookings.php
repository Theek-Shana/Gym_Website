<?php
session_start();
include("config.php");

// Only allow staff to access this page
if (!isset($_SESSION['staff_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch all bookings
$bookings_sql = "
    SELECT b.id, c.full_name, t.name AS trainer_name, b.booking_date 
    FROM bookings b
    JOIN customers c ON b.customer_id = c.id
    JOIN trainers t ON b.trainer_id = t.id
    ORDER BY b.booking_date DESC";
$bookings_result = mysqli_query($conn, $bookings_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Trainer Bookings</h1>
    
    <?php if (mysqli_num_rows($bookings_result) > 0): ?>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>Customer Name</th>
                <th>Trainer Name</th>
                <th>Booking Date</th>
            </tr>
            <?php while ($booking = mysqli_fetch_assoc($bookings_result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($booking['id']); ?></td>
                    <td><?php echo htmlspecialchars($booking['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($booking['trainer_name']); ?></td>
                    <td><?php echo htmlspecialchars($booking['booking_date']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No bookings found.</p>
    <?php endif; ?>

    <a href="staff_dashboard.php">Back to Dashboard</a>
</body>
</html>
