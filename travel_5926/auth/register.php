<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Sri Lanka Travel Planner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/home.css"/>
</head>
<body>
  <!-- Navbar -->
  <?php include'../navbar.php'; ?>
  <!-- Registration Form -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Create an Account</h2>
        <form action="registerc.php" method="POST" class="p-4 shadow rounded bg-light">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required/>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required/>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required/>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          <div class="text-center mt-3">
            <p>Already have an account? <a href="login.php">Login here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include'../footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
