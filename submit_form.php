<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  // Send email
  $to = 'ajeeshk.in@gmail.com';
  $subject = 'Enquiry via Github Portfolio';
  $message = "Email: $email\nName: $name\nMessage: $message";
  $headers = "From: $email";

  // if (mail($to, $subject, $message, $headers)) {
  //   echo "Email sent successfully!";
  // } else {
  //   echo "Failed to send email.";
  // }
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo '<script>alert("Form submitted successfully.");</script>';
    echo '<script>window.location.href = "contact.html";</script>';
  } else {
    // Error sending email
    echo '<script>alert("Error submitting form. Please try again later.");</script>';
    echo '<script>window.location.href = "index.html";</script>';
  }
}
?>