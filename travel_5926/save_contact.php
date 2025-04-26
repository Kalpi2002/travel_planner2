<?php
include 'includes/db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $submitted_at = date("Y-m-d H:i:s");

    // Prepare the SQL statement to avoid SQL injection
    $sql = "INSERT INTO contact (name, email, message, submitted_at) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $message, $submitted_at);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Message submitted successfully!');
                    window.location.href = 'contact.php';
                  </script>";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "<script>
            alert('Invalid request method.');
            window.location.href = 'contact.php';
          </script>";
}
?>
