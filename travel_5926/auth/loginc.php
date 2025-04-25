<?php
session_start();
include'../includes/db.php';
include'../includes/function.php';
$login =test_input($_POST['username']);// Accepts username or email
$password =test_input($_POST['password']);

if (empty($login) || empty($password)) {
  echo "<script>alert('All fields are required.'); window.location.href='login.php';</script>";
  exit();
}

// Allow login with either username or email
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();

  if (password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = $user['role'];
if($_SESSION['role']=='admin'){
  echo "<script>alert('Login successful!'); window.location.href='../admin.php';</script>";
}else{
    echo "<script>alert('Login successful!'); window.location.href='../dashboard.php';</script>";}

  } else {
    echo "<script>alert('Incorrect password.'); window.location.href='login.php';</script>";
  }
} else {
  echo "<script>alert('No user found with that username or email.'); window.location.href='login.php';</script>";
}

$stmt->close();
$conn->close();
?>