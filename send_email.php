<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the email recipient and subject
  $to = 'hendrik-schneemann@web.de';
  $subject = 'Kontaktanfrage';

  // Create the email body
  $body = "Name: $name\n\n";
  $body.= "Email: $email\n\n";
  $body.= "Message: $message";

  // Send the email using PHP's mail function
  mail($to, $subject, $body);

  // Redirect the user to a thank-you page
  // Send the email using PHP's mail function
  if (mail($to, $subject, $body)) {
    // Display a success message as a popup
    echo '<script>alert("Email erfolgreich gesendet!");</script>';
  } else {
    // Display an error message as a popup
    echo '<script>alert("Email senden fehlgeschlagen.");</script>';
  }
    exit;
?>
