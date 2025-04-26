<?php include('navbar.php'); ?> <!-- Include navbar -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>2 Day Itinerary - Sri Lanka Travel Planner</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Custom CSS for styling -->
  <link rel="stylesheet" href="css/iti.css">
</head>
<body class="bg-gray-100">

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('img/io2.jpg'); height: 60vh; background-size: cover; background-position: center;">
  <div class="text-center text-white">
    <h1 class="text-4xl font-bold">2 Day Itinerary</h1>
    <p class="text-lg mt-2">Experience the best of Sri Lanka in just two days!</p>
  </div>
</section>

<!-- Itinerary Content -->
<div class="container px-4 py-10">
  
  <!-- 5 Two-Day Itinerary Packages Section -->
  <div class="mt-10">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">5 Two-Day Itinerary Packages</h2>

    <!-- Package 1: Colombo & Galle -->
    <div class="row mb-4">
      <div class="col-md-4">
        <img src="img/colombo.jpg" alt="Colombo City Tour" class="img-fluid rounded">
      </div>
      <div class="col-md-8">
        <h3 class="text-primary fw-bold">Colombo & Galle</h3>
        <p>Explore the vibrant city of Colombo and the historic Galle Fort, with a relaxing beach day at Unawatuna.</p>

        <!-- Day 1 - Colombo -->
        <h4 class="text-blue-700 mt-3">Day 1: Colombo</h4>
        <ul>
          <li>9:00 AM - Colombo City Tour</li>
          <li>12:00 PM - Visit Gangaramaya Temple</li>
          <li>2:00 PM - Explore the National Museum</li>
          <li>4:00 PM - Relax at Galle Face Green</li>
        </ul>

        <!-- Day 2 - Galle -->
        <h4 class="text-blue-700 mt-3">Day 2: Galle</h4>
        <ul>
          <li>9:00 AM - Visit Galle Fort</li>
          <li>12:00 PM - Enjoy Unawatuna Beach</li>
          <li>2:00 PM - Explore the Maritime Archaeology Museum</li>
          <li>4:00 PM - Return to Colombo</li>
        </ul>

        
      </div>
    </div>

    <!-- Package 2: Kandy & Nuwara Eliya -->
    <div class="row mb-4">
      <div class="col-md-4">
        <img src="img/kandy.jpg" alt="Kandy & Nuwara Eliya" class="img-fluid rounded">
      </div>
      <div class="col-md-8">
        <h3 class="text-primary fw-bold">Kandy & Nuwara Eliya</h3>
        <p>Experience the cultural and natural beauty of Kandy and the cool climate of Nuwara Eliya.</p>

        <!-- Day 1 - Kandy -->
        <h4 class="text-blue-700 mt-3">Day 1: Kandy</h4>
        <ul>
          <li>8:00 AM - Visit the Temple of the Tooth</li>
          <li>10:00 AM - Explore the Royal Botanical Gardens</li>
          <li>1:00 PM - Stroll around Kandy Lake</li>
          <li>3:00 PM - Visit the Kandyan Dance Performance</li>
        </ul>

        <!-- Day 2 - Nuwara Eliya -->
        <h4 class="text-blue-700 mt-3">Day 2: Nuwara Eliya</h4>
        <ul>
          <li>8:00 AM - Drive to Nuwara Eliya</li>
          <li>10:00 AM - Visit the Hakgala Botanical Gardens</li>
          <li>12:00 PM - Enjoy tea at a local plantation</li>
          <li>3:00 PM - Explore Gregory Lake</li>
        </ul>

        
      </div>
    </div>

    <!-- Package 3: Sigiriya & Polonnaruwa -->
    <div class="row mb-4">
      <div class="col-md-4">
        <img src="img/sigiriya.jpg" alt="Sigiriya & Polonnaruwa" class="img-fluid rounded">
      </div>
      <div class="col-md-8">
        <h3 class="text-primary fw-bold">Sigiriya & Polonnaruwa</h3>
        <p>Climb Sigiriya Rock and explore the ancient city of Polonnaruwa, rich in history and culture.</p>

        <!-- Day 1 - Sigiriya -->
        <h4 class="text-blue-700 mt-3">Day 1: Sigiriya</h4>
        <ul>
          <li>8:00 AM - Climb Sigiriya Rock Fortress</li>
          <li>12:00 PM - Visit the Sigiriya Museum</li>
          <li>2:00 PM - Explore the Royal Gardens</li>
          <li>4:00 PM - Relax at a nearby resort</li>
        </ul>

        <!-- Day 2 - Polonnaruwa -->
        <h4 class="text-blue-700 mt-3">Day 2: Polonnaruwa</h4>
        <ul>
          <li>9:00 AM - Visit the Ancient City of Polonnaruwa</li>
          <li>12:00 PM - Explore the Gal Vihara rock temple</li>
          <li>2:00 PM - Visit the Parakrama Samudra reservoir</li>
          <li>4:00 PM - Return to Sigiriya</li>
        </ul>

        
      </div>
    </div>

    <!-- Package 4: Dambulla & Anuradhapura -->
    <div class="row mb-4">
      <div class="col-md-4">
        <img src="img/anura.jpg" alt="Dambulla & Anuradhapura" class="img-fluid rounded">
      </div>
      <div class="col-md-8">
        <h3 class="text-primary fw-bold">Dambulla & Anuradhapura</h3>
        <p>Visit the Dambulla Cave Temple and explore the ancient capital of Anuradhapura, a UNESCO World Heritage Site.</p>

        <!-- Day 1 - Dambulla -->
        <h4 class="text-blue-700 mt-3">Day 1: Dambulla</h4>
        <ul>
          <li>8:00 AM - Visit the Dambulla Cave Temple</li>
          <li>11:00 AM - Explore the Golden Temple</li>
          <li>1:00 PM - Visit the Sigiriya Viewpoint</li>
          <li>4:00 PM - Relax at the resort</li>
        </ul>

        <!-- Day 2 - Anuradhapura -->
        <h4 class="text-blue-700 mt-3">Day 2: Anuradhapura</h4>
        <ul>
          <li>9:00 AM - Explore the Sacred City of Anuradhapura</li>
          <li>12:00 PM - Visit the Sri Maha Bodhi tree</li>
          <li>2:00 PM - Visit the Jetavanarama Stupa</li>
          <li>4:00 PM - Return to Dambulla</li>
        </ul>

        
      </div>
    </div>

    <!-- Package 5: Ella & Ravana Falls -->
    <div class="row mb-4">
      <div class="col-md-4">
        <img src="img/rawana.jpg" alt="Ella & Ravana Falls" class="img-fluid rounded">
      </div>
      <div class="col-md-8">
        <h3 class="text-primary fw-bold">Ella & Ravana Falls</h3>
        <p>Enjoy the cool climate of Ella, and witness the beauty of Ravana Falls and Diyaluma Falls.</p>

        <!-- Day 1 - Ella -->
        <h4 class="text-blue-700 mt-3">Day 1: Ella</h4>
        <ul>
          <li>8:00 AM - Visit Ella Rock</li>
          <li>12:00 PM - Hike to Ravana Falls</li>
          <li>2:00 PM - Explore Nine Arches Bridge</li>
          <li>4:00 PM - Relax at a local café</li>
        </ul>

        <!-- Day 2 - Diyaluma Falls -->
        <h4 class="text-blue-700 mt-3">Day 2: Diyaluma Falls</h4>
        <ul>
          <li>9:00 AM - Visit Diyaluma Falls</li>
          <li>12:00 PM - Explore the nearby tea plantations</li>
          <li>2:00 PM - Stroll through the village</li>
          <li>4:00 PM - Return to Ella</li>
        </ul>

        
      </div>
    </div>

  </div>

</div>

<?php include('footer.php'); ?> <!-- Include footer -->

<!-- Optional Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
