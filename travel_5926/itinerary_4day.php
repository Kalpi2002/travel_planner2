<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4 Day Itinerary - Sri Lanka Travel Planner</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS for styling -->
    <link rel="stylesheet" href="css/iti.css">
    <style>body { font-family: 'Roboto', sans-serif; }</style>
</head>
<body class="bg-gray-100">

<!-- Navbar Include -->
<?php include('navbar.php'); ?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('img/io4.jpg'); height: 60vh;">
  <div class="text-white text-center">
    <h1 class="text-4xl font-bold">4 Day Trip Itinerary</h1>
    <p class="text-lg mt-2">Take your time and explore more of Sri Lanka in four days!</p>
  </div>
</section>

<!-- Itinerary Content -->
<div class="container px-4 py-10">
  <!-- Day 1: Colombo & Negombo -->
  <h2 class="text-2xl font-bold text-blue-700 mb-6">Day 1: Colombo & Negombo</h2>
  <ul class="list-unstyled">
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Explore Colombo's landmarks</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Visit the National Museum</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Enjoy the beaches of Negombo</strong>
    </li>
  </ul>

  <!-- Day 2: Kandy & Pinnawala -->
  <h2 class="text-2xl font-bold text-blue-700 mb-6">Day 2: Kandy & Pinnawala</h2>
  <ul class="list-unstyled">
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Visit the Temple of the Tooth</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Explore the Royal Botanical Gardens</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Watch elephants at Pinnawala</strong>
    </li>
  </ul>

  <!-- Day 3: Sigiriya & Dambulla -->
  <h2 class="text-2xl font-bold text-blue-700 mb-6">Day 3: Sigiriya & Dambulla</h2>
  <ul class="list-unstyled">
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Climb Sigiriya Rock Fortress</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Visit Dambulla Cave Temple</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Traditional Sri Lankan lunch</strong>
    </li>
  </ul>

  <!-- Day 4: Nuwara Eliya -->
  <h2 class="text-2xl font-bold text-blue-700 mb-6">Day 4: Nuwara Eliya</h2>
  <ul class="list-unstyled">
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Explore the tea plantations</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Visit Gregory Lake</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Stroll through the town of Nuwara Eliya</strong>
    </li>
    <li class="bg-white p-4 rounded-lg shadow mb-3">
      <strong>Return to your accommodation</strong>
    </li>
  </ul>
</div>


<!-- Google Map -->
<div class="container mt-5">
  <h3 class="text-xl font-bold text-blue-700 mb-4 text-center">Map Route</h3>
  <div class="ratio ratio-16x9">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Ls_xIoMTsdImL0s5so-LmtUwA3O3gAk&ehbc=2E312F"
            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
  </div>
</div>

  <!-- Action Button -->
  <div class="mt-8 text-center">
    <a href="planyourtrip.php" class="btn btn-primary px-6 py-3 rounded">Customize or Save This Trip</a>
  </div>
</div>



<!-- Footer Include -->
<?php include('footer.php'); ?>

<!-- Optional Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
