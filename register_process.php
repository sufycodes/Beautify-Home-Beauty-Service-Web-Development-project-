<?php
// ================================================== //
//              REGISTER PROCESS - BACKEND            //
// ================================================== //


// ------------------------------------------------
// Auto create database and table if not exists
// $conn variable is provided by db_setup.php
// ------------------------------------------------
require_once 'db_setup.php';


// ------------------------------------------------
// Get data sent from the registration form
// ------------------------------------------------
$full_name        = trim($_POST['full_name']);
$dob              = trim($_POST['dob']);
$cnic             = trim($_POST['cnic']);
$contact          = trim($_POST['contact']);
$address          = trim($_POST['address']);
$email            = trim($_POST['email']);
$username         = trim($_POST['username']);
$password         = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);


// ------------------------------------------------
// Validate - check if any field is empty
// ------------------------------------------------
if (empty($full_name) || empty($dob) || empty($cnic) || empty($contact) ||
    empty($address)   || empty($email) || empty($username) || empty($password)) {
    die("All fields are required. Please go back and fill in all fields.");
}

// ------------------------------------------------
// Validate - check if passwords match
// ------------------------------------------------
if ($password !== $confirm_password) {
    die("Passwords do not match. Please go back and try again.");
}

// ------------------------------------------------
// Check if username already exists in database
// ------------------------------------------------
$check_query  = "SELECT id FROM clients WHERE username = '$username'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    die("This username is already taken. Please go back and choose a different username.");
}

// ------------------------------------------------
// Check if email already exists in database
// ------------------------------------------------
$check_email  = "SELECT id FROM clients WHERE email = '$email'";
$email_result = mysqli_query($conn, $check_email);

if (mysqli_num_rows($email_result) > 0) {
    die("This email is already registered. Please go back and use a different email.");
}


// ------------------------------------------------
// Encrypt the password before saving to database
// ------------------------------------------------
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// ------------------------------------------------
// Insert client data into the clients table
// ------------------------------------------------
$query = "INSERT INTO clients (full_name, dob, cnic, contact, address, email, username, password)
          VALUES ('$full_name', '$dob', '$cnic', '$contact', '$address', '$email', '$username', '$hashed_password')";

$result = mysqli_query($conn, $query);

if ($result) {
    // Registration successful - redirect to login page
    header("Location: login.php");
    exit();
} else {
    die("Registration failed. Please try again. Error: " . mysqli_error($conn));
}


// ------------------------------------------------
// Close the database connection
// ------------------------------------------------
mysqli_close($conn);
?>