<?php
$host = 'localhost';
$username = 'root'; // Default for XAMPP
$password = '';     // Default is empty
$database = 'travel_db'; // Your actual database name

$conn = new mysqli($host, $username, $password, $database);

// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($conn){
  echo "Connected successfully";
}



// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$user='user';
//echo $username;
// Insert into database
$sql = "INSERT INTO users (username, email, password,role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $password, $user);

if ($stmt->execute()) {
  echo "<script>alert('Registration successful!'); window.location.href='../index.php';</script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
