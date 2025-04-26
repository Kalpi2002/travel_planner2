




<?php
session_start();

// Include the database connection
include 'includes/db.php';

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to access this page.'); window.location.href='login.php';</script>";
    exit();
}

// Get the username from session
$username = $_SESSION['username']; 

// Query the trip_plans table for this user's submitted trips
$sql = "SELECT * FROM trip_plans WHERE username = ? ORDER BY submitted_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username); // Bind the username parameter
$stmt->execute();
$result = $stmt->get_result();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan User dashboard - Sri Lanka Travel Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/plan.css">
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>User dashboard</h1>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Plan Your Perfect Trip to Sri Lanka</h2>
        <p class="text-center mb-4">Use our comprehensive Planner to plan your trip to Sri Lanka. Explore top destinations, create your itinerary, and experience local adventures and cultural activities.</p>

        <!-- Trip Planning Form -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="save_trip.php">
                    <input type="hidden" name="username" value="<?= htmlspecialchars($_SESSION['username']) ?>">
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration of Stay</label>
                        <input type="number" id="duration" name="duration" placeholder="Enter number of days">
                    </div>
                    <div class="mb-3">
                        <label for="trip_type" class="form-label">Type of Trip</label>
                        <select class="form-select" id="trip_type" name="trip_type">
                            <option selected>Select type of trip</option>
                            <option value="leisure">Leisure</option>
                            <option value="adventure">Adventure</option>
                            <option value="cultural">Cultural</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="interests" class="form-label">Interests</label>
                        <select multiple class="form-select" id="interests" name="interests[]">
                            <option value="beaches">Beaches</option>
                            <option value="wildlife">Wildlife</option>
                            <option value="historical">Historical Sites</option>
                            <option value="food">Food & Cuisine</option>
                            <option value="shopping">Shopping</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="transport" class="form-label">Preferred Mode of Transport</label>
                        <select class="form-select" id="transport" name="transport">
                            <option selected>Select mode of transport</option>
                            <option value="car">Car</option>
                            <option value="train">Train</option>
                            <option value="bus">Bus</option>
                            <option value="bike">Bike</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Display Submitted Trip Plans -->
    <h3>Your Submitted Trips</h3>
    <?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Duration (Days)</th>
                        <th>Trip Type</th>
                        <th>Interests</th>
                        <th>Transport</th>
                        <th>Submitted On</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['duration'] ?></td>
                            <td><?= htmlspecialchars($row['trip_type']) ?></td>
                            <td><?= htmlspecialchars($row['interests']) ?></td>
                            <td><?= htmlspecialchars($row['transport']) ?></td>
                            <td><?= $row['submitted_at'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-muted">You have not submitted any trip plans yet.</p>
    <?php endif; ?>

</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$stmt->close();
$conn->close();
?>
