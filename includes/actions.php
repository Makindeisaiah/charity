<?php

// ? Logs errors into an array 
$errors = [];

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'charity');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM volunteer WHERE email='$email' OR phone_number='$phone_number' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['phone_number'] === $phone_number) {
      array_push($errors, "phone_number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO volunteer (full_name, email, gender, phone_number, location) 
  			  VALUES('$full_name', '$email', '$gender', '$phone_number', '$location')";
  	mysqli_query($db, $query);
  	
  	array_push($errors, "Congratulations, You're Welcome");
  }
}

// message
if (isset($_POST['submit_message'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO messages (name, email, message) 
  			  VALUES('$name', '$email', '$message')";
  	mysqli_query($db, $query);
  	
  	array_push($errors, "Message Sent");
  }
}

?>