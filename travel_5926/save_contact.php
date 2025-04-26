<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $submitted_at = date("Y-m-d H:i:s");

    // Insert contact message into the database
    $sql = "INSERT INTO contact (name, email, message, submitted_at) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $message, $submitted_at);

        if ($stmt->execute()) {
            //  Message saved successfully

            // Send an email to your address
            $to = "kalpaniera@gmail.com"; // Replace with your email address
            $subject = "New Contact Form Submission from {$name}";
            $body = "
                <h3>New Message Received</h3>
                <p><b>Name:</b> {$name}</p>
                <p><b>Email:</b> {$email}</p>
                <p><b>Message:</b><br>{$message}</p>
            ";

            // Headers for HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: {$email}" . "\r\n";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                echo "<script>
                        alert('Message submitted successfully!');
                        window.location.href = 'contact.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Failed to send email.');
                        window.location.href = 'contact.php';
                      </script>";
            }

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

