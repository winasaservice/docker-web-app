<?php

// Hardcoded username and password
$username = "anyone";
$password = "password123";
$email = "anyone@mail.com";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the submitted username and password
  $submittedUsername = $_POST['username'];
  $submittedPassword = $_POST['password'];
  $submittedmail = $_POST['email'];

  // Verify the username and password
  if ($submittedUsername == $username && $submittedPassword == $password && $submittedmail== $email) {
    // Successful login
    echo "Welcome, " . $username . "!";
  } else {
    // Invalid login
    echo "Invalid username or password.";
  }
}

?>
