<?php
include("config.php");

// Query to fetch strength training plans from the 'item' table
$sql = "SELECT * FROM item WHERE name IN ('Basic Strength Training Plan', 'Silver Strength Training Plan', 'Gold Strength Training Plan')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strength Training Plans</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<style>
        .box {
    background-color: white; /* White background for the box */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    padding: 20px; /* Inner spacing */
    margin: 10px; /* Margin around each box */
    width: 300px; /* Fixed width for boxes */
    transition: transform 0.3s; /* Smooth scaling on hover */
}

.box h2 {
    font-size: 1.5em; /* Heading size */
    color: #333; /* Dark color for headings */
    margin-bottom: 10px; /* Space below heading */
}

.box p {
    font-size: 1em; /* Font size for description */
    color: #666; /* Gray color for description */
    line-height: 1.5; /* Increased line height for readability */
    margin-bottom: 15px; /* Space below description */
}

.box h3 {
    font-size: 1.1em; /* Slightly smaller than the heading */
    color: #555; /* Color for subheadings */
    margin-bottom: 5px; /* Space below subheading */
}

.box .price {
    font-size: 1.3em; /* Larger font size for price */
    color: #e74c3c; /* Accent color for price */
    font-weight: bold; /* Bold price for emphasis */
    margin-bottom: 15px; /* Space below price */
}

.box .See Details {
    display: flex; /* Flexbox for center alignment */
    justify-content: center; /* Center the button */
}

    </style>
    <img src="gymbackg.jpg" class="bg" alt="">

    <section id="plans">
        <div class="heading">
            <h1>Our <span>Strength Training Plans</span></h1>
            <br><br>
            <a href="products.html">
                <button class="button" type="button" style="color: white;">
                    <span></span> Back to Categories
                </button>
            </a>
        </div>

        <div class="plans-container">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <img src="<?php echo htmlspecialchars($row['photo']); ?>" 
                             alt="<?php echo htmlspecialchars($row['name']); ?> Plan Image" 
                             class="plan-photo">

                        <h2><?php echo htmlspecialchars($row['name']); ?></h2>
                        <p><?php echo htmlspecialchars($row['description']); ?></p>
                        <h3>Duration: <?php echo htmlspecialchars($row['duration']); ?> months</h3>
                        <h3 class="price">Rs. <?php echo htmlspecialchars($row['price']); ?> <span>/LKR</span></h3>

                        <div class="See Details">
                            <form action="see_details.php" method="POST">
                                <input type="hidden" name="plan_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="button" style="color: black;">
                                    <span></span> See Details
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No strength training plans available at the moment.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </section>
</body>
</html>
