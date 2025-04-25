<?php
session_start(); // Start the session to access $_SESSION

include 'includes/db.php'; // Include the database connection file

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to access this page.'); window.location.href='login.php';</script>";
    exit();
}

// Get the form data
$duration = $_POST['duration'];
$trip_type = $_POST['trip_type'];
$interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : '';
$transport = $_POST['transport'];
$username = $_SESSION['username']; // Get the username from session
$submitted_at = date("Y-m-d H:i:s"); // Get the current date and time

// Ensure the database connection is successful
if ($conn === null) {
    die("Database connection failed.");
}

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO trip_plans (duration, trip_type, interests, transport, username, submitted_at) 
        VALUES (?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters to the SQL statement
$stmt->bind_param("isssss", $duration, $trip_type, $interests, $transport, $username, $submitted_at);

// Execute the query
if ($stmt->execute()) {
    echo "<script>
            alert('Trip data submitted successfully!');
            window.location.href = 'planyourtrip.php';
          </script>";
} else {
    echo "Error: " . $stmt->error;  // Display the error message if query fails
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
