<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Email subject
  $subject = "New message from $name";

  // Email body
  $body = "
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong></p>
    <p>$message</p>
  ";

  // Send email
  $to = 'your-email@example.com'; // Change this to your email address
  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent!';
  } else {
    echo 'Message not sent. Please try again.';
  }
}
?>
