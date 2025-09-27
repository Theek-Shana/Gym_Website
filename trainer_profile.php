<h2><?php echo $trainer['full_name']; ?></h2>
<p>Specialty: <?php echo $trainer['specialty']; ?></p>
<p>Contact: <?php echo $trainer['mobile_number']; ?></p>
<p>Email: <?php echo $trainer['email']; ?></p>

<!-- Booking Form -->
<form action="book_session.php" method="POST">
    <input type="hidden" name="trainer_id" value="<?php echo $trainer['id']; ?>">
    <label for="session_date">Select Date and Time:</label>
    <input type="datetime-local" name="session_date" required>
    <button type="submit" class="btn btn-success">Book Session</button>
</form>
