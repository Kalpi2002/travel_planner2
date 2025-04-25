<?php include('navbar.php'); ?> <!-- Include navbar -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Itinerary Overview - Sri Lanka Travel Planner</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS for styling -->
  <link rel="stylesheet" href="css/iti.css">
</head>
<body class="bg-gray-100">

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="text-white">
      <h1 class="text-4xl font-bold">Itinerary Overview</h1>
      <p class="text-lg mt-2">Discover pre-planned trips across Sri Lanka</p>
    </div>
  </section>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-10">
    <h2 class="text-center text-3xl font-bold mb-8 text-blue-700">Select a Pre-Planned Trip</h2>

    <div class="row">
      <?php
      $trips = [
        ['days' => 1, 'img' => 'img/io1.jpg', 'desc' => 'Quick highlights of Colombo or Kandy.'],
        ['days' => 2, 'img' => 'img/io2.jpg', 'desc' => 'Weekend escape to top attractions.'],
        ['days' => 3, 'img' => 'img/io3.jpg', 'desc' => 'Three days of scenic beauty and culture.'],
        ['days' => 4, 'img' => 'img/io4.jpg', 'desc' => 'Explore beaches, tea trails, and heritage.'],
        ['days' => 5, 'img' => 'img/io5.jpg', 'desc' => 'Experience Sri Lanka from hill country to coast.'],
        ['days' => 6, 'img' => 'img/io6.jpg', 'desc' => 'Ultimate week-long trip packed with wonders.'],
      ];

      foreach ($trips as $trip) {
        echo '
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="' . $trip['img'] . '" class="card-img-top" alt="' . $trip['days'] . ' Day Trip">
            <div class="card-body">
              <h3 class="card-title">' . $trip['days'] . ' Day Trip</h3>
              <p class="card-text">' . $trip['desc'] . '</p>
              <a href="itinerary_' . $trip['days'] . 'day.php" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>

  <?php include('footer.php'); ?> <!-- Include footer -->
  
  <!-- Optional Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
