<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6 Day Itinerary - Sri Lanka Travel Planner</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<?php include('navbar.php'); ?>

<!-- Hero Section -->
<section class="hero-section text-white text-center d-flex align-items-center justify-content-center" style="background-image: url('img/io6.jpg'); height: 60vh;">
    <div>
        <h1 class="display-4 fw-bold">6 Day Trip Itinerary</h1>
        <p class="lead mt-3">The ultimate Sri Lankan experience in six days!</p>
    </div>
</section>

<!-- Itinerary Content -->
<div class="container py-5">
    <!-- Day 1 -->
    <h2 class="text-primary fw-bold mb-4">Day 1: Colombo & Negombo</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Explore Colombo’s historic sites</li>
        <li class="list-group-item">Relax in Negombo</li>
    </ul>

    <!-- Day 2 -->
    <h2 class="text-primary fw-bold mb-4">Day 2: Kandy & Pinnawala</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Temple of the Tooth</li>
        <li class="list-group-item">Botanical Gardens</li>
        <li class="list-group-item">Pinnawala Elephant Orphanage</li>
    </ul>

    <!-- Day 3 -->
    <h2 class="text-primary fw-bold mb-4">Day 3: Sigiriya & Dambulla</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Climb Sigiriya Rock</li>
        <li class="list-group-item">Dambulla Cave Temple</li>
    </ul>

    <!-- Day 4 -->
    <h2 class="text-primary fw-bold mb-4">Day 4: Nuwara Eliya</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Tea plantations tour</li>
        <li class="list-group-item">Visit Gregory Lake</li>
    </ul>

    <!-- Day 5 -->
    <h2 class="text-primary fw-bold mb-4">Day 5: Ella</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Hike Ella Rock</li>
        <li class="list-group-item">Visit Ravana Falls</li>
    </ul>

    <!-- Day 6 -->
    <h2 class="text-primary fw-bold mb-4">Day 6: Galle</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item">Explore the Galle Fort</li>
        <li class="list-group-item">Relax at Unawatuna Beach</li>
    </ul>
</div>

<!-- Google Map -->
<div class="container mb-5">
    <h3 class="text-primary fw-bold mb-3 text-center">Map Route</h3>
    <div class="ratio ratio-16x9">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Ls_xIoMTsdImL0s5so-LmtUwA3O3gAk&ehbc=2E312F"
                width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</div>

<!-- Plan Your Trip Button -->
<div class="text-center mb-5">
    <a href="planyourtrip.php" class="btn btn-primary px-5 py-2">Customize or Save This Trip</a>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
