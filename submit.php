<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create a string with the form data
  $form_data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

  // Specify the path and filename for the text file
  $file_path = 'form_data.txt';

  // Open the text file (creates it if it doesn't exist) in append mode
  $file = fopen($file_path, 'a');

  // Write the form data to the text file
  fwrite($file, $form_data);

  // Close the file
  fclose($file);

  // Redirect back to the contact form or to a thank-you page
  header('Location: index.html');
  exit;
}
?>