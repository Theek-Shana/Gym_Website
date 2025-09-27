<?php
include("config.php");

// Check if a valid plan_id is provided
if (isset($_POST['plan_id'])) {
    $plan_id = $_POST['plan_id'];

    // Query to fetch details of the selected plan
    $sql = "SELECT * FROM item WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die("Database query preparation failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'i', $plan_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo htmlspecialchars($row['name']); ?> - Details</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh; /* Full viewport height */
                    background-image: url('membershipBG.jpg');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    color: #fff;
                }
                #plan-details {
                    max-width: 800px;
                    width: 90%; /* Ensure responsiveness */
                    margin: 20px;
                    padding: 20px;
                    background-color: rgba(0, 0, 0, 0.7); /* Glass effect */
                    border-radius: 15px;
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    overflow-y: auto;
                }
                .heading {
                    text-align: center;
                    margin-bottom: 20px;
                }
                .heading h1 {
                    font-size: 2.5em;
                    margin-bottom: 10px;
                    color: #fff;
                }
                .heading span {
                    color: #e74c3c;
                }
                .plan-info {
                    text-align: center;
                }
                .plan-photo {
                    width: 100%;
                    max-width: 400px;
                    height: auto;
                    border-radius: 8px;
                    margin-bottom: 20px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                }
                h2, h3, p {
                    color: #fff;
                }
                ul {
                    list-style-type: disc;
                    margin: 0;
                    padding: 0 20px;
                    text-align: left;
                }
                .button {
                    background-color: #e74c3c;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 1em;
                    transition: background-color 0.3s ease;
                    margin-top: 10px;
                }
                .button:hover {
                    background-color: #c0392b;
                }
            </style>
        </head>
        <body>
    <section id="plan-details">
        <div class="heading">
            <h1><?php echo htmlspecialchars($row['name']); ?> <span>Details</span></h1>
            <a href="membership_plans.php">
                <button class="button" type="button">
                    Back to Membership Plans
                </button>
            </a>
        </div>

        <div class="plan-info">
            <img src="<?php echo htmlspecialchars($row['photo']); ?>" 
                 alt="<?php echo htmlspecialchars($row['name']); ?> Image" class="plan-photo">

            <h2>Description</h2>
            <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>

            <h3>Registration Fee: Rs. <?php echo htmlspecialchars($row['registration_fee']); ?></h3>
            <h3>Duration: <?php echo htmlspecialchars($row['duration']); ?> months</h3>

            <h2>Benefits and Perks</h2>
            <ul>
                <?php
                // Fetch benefits from the database or define them in a switch case
                if (!empty($row['benefits'])) {
                    $benefits = explode(',', $row['benefits']); // Assuming benefits are comma-separated
                    foreach ($benefits as $benefit) {
                        echo "<li>" . htmlspecialchars(trim($benefit)) . "</li>";
                    }
                } else {
                    echo "<li>No specific benefits available.</li>";
                }
                ?>
            </ul>

            <h2>Terms and Conditions</h2>
            <p>All memberships are non-refundable. Memberships can be paused for medical reasons with appropriate documentation. The management reserves the right to revoke memberships for misconduct or violation of gym rules.</p>

            <form action="products.html" method="POST">
                <input type="hidden" name="plan_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <button type="submit" class="button">
                    visit Programms
                </button>
            </form>
        </div>
    </section>
</body>
</html>

        <?php
    } else {
        echo "<p>Invalid Plan ID or Plan Not Found.</p>";
    }

    // Close the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "<p>No Plan ID provided.</p>";
}
?>
