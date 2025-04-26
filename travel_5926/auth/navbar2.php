<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Sri Lanka Travel Planner</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
      
        <li class="nav-item"><a class="nav-link" href="../itinerary_overview.php">Itinerary Overview</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Local Experiences</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="../Srilankan_food.php">Sri Lankan Food</a></li>
            <li><a class="dropdown-item" href="../Adventure.php">Adventure</a></li>
            <li><a class="dropdown-item" href="../cultural.php">Cultural</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="../Top_attractions.php">Top Attractions</a></li>
            <li><a class="dropdown-item" href="../Destinations.php">Destinations</a></li>
            <li><a class="dropdown-item" href="../Top_cities.php">Top Cities</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>

        <!-- Always show Login button -->
        <?php
          if(isset($_SESSION['username'])){
            ?>
            <li class="nav-item">
            
            <li class="nav-item d-flex align-items-center ms-3">
            <span class="nav-link text-white">Hi, <?= htmlspecialchars($_SESSION['username']) ?></span>
          </li>
          <li class="nav-item">
            <a class="btn btn-light text-primary ms-2" href="auth/logout.php">Logout</a>
          </li>
          
        </li>
        <?php
          }else{
            ?>
            <li class="nav-item">
            <a class="btn btn-light text-primary ms-2" href="auth/login.php">Login</a>
            
        </li>
        <?php
          }
         ?> 
      </ul>
    </div>
  </div>
</nav>
