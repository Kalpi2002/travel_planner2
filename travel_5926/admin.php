<?php
session_start();

// Restrict access to admin only
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Access denied. Admins only.'); window.location.href='login.php';</script>";
    exit();
}

include 'includes/db.php';

// Fetch contact messages
$contact_sql = "SELECT * FROM contact ORDER BY submitted_at DESC";
$contact_result = $conn->query($contact_sql);

// Fetch trip plans
$trip_sql = "SELECT * FROM trip_plans ORDER BY submitted_at DESC";
$trip_result = $conn->query($trip_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - Sri Lanka Travel Planner</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  

  <!-- Main Content Section -->
  <div class="container my-5">

      <!-- Image Section -->
      <div class="text-center mb-4">
          <img src="img/admin.jpg" alt="Admin Dashboard Image" class="img-fluid rounded shadow"/>
      </div>

      <h2>Welcome Admin, <?= htmlspecialchars($_SESSION['username']) ?></h2>

      <!-- Contact Messages Section -->
      <h3 class="mt-5">Contact Messages</h3>
      <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Submitted At</th>
              </tr>
          </thead>
          <tbody>
              <?php while ($row = $contact_result->fetch_assoc()) { ?>
                  <tr>
                      <td><?= $row['id'] ?></td>
                      <td><?= htmlspecialchars($row['name']) ?></td>
                      <td><?= htmlspecialchars($row['email']) ?></td>
                      <td><?= htmlspecialchars($row['message']) ?></td>
                      <td><?= $row['submitted_at'] ?></td>
                  </tr>
              <?php } ?>
          </tbody>
      </table>

      <!-- Trip Plans Section -->
      <h3>Trip Plans</h3>
      <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
              <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Trip Type</th>
                  <th>Duration</th>
                  <th>Transport</th>
                  <th>Submitted At</th>
              </tr>
          </thead>
          <tbody>
              <?php while ($row = $trip_result->fetch_assoc()) { ?>
                  <tr>
                      <td><?= $row['id'] ?></td>
                      <td><?= htmlspecialchars($row['username']) ?></td>
                      <td><?= htmlspecialchars($row['trip_type']) ?></td>
                      <td><?= htmlspecialchars($row['duration']) ?></td>
                      <td><?= htmlspecialchars($row['transport']) ?></td>
                      <td><?= $row['submitted_at'] ?></td>
                  </tr>
              <?php } ?>
          </tbody>
      </table>

  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
