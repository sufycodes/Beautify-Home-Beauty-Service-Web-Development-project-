<?php
// ================================================== //
//              REGISTER PROCESS - BACKEND            //
// ================================================== //
// This file handles the registration form submission  //
// It receives data from register.php, validates it,  //
// and saves it to the MySQL database.                //
// ================================================== //


// ------------------------------------------------
// STEP 1: Connect to the database
// ------------------------------------------------
$host     = "localhost";   // XAMPP default host
$dbname   = "beautify";    // Our database name
$db_user  = "root";        // XAMPP default username
$db_pass  = "";            // XAMPP default password (empty)

$conn = mysqli_connect($host, $db_user, $db_pass, $dbname);

// If connection fails, stop and show error
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


// ------------------------------------------------
// STEP 2: Get data sent from the registration form
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
// STEP 3: Basic validation
// ------------------------------------------------

// Check if any field is empty
if (empty($full_name) || empty($dob) || empty($cnic) || empty($contact) ||
    empty($address)   || empty($email) || empty($username) || empty($password)) {
    die("All fields are required. Please go back and fill in all fields.");
}

// Check if passwords match
if ($password !== $confirm_password) {
    die("Passwords do not match. Please go back and try again.");
}

// Check if username already exists in the database
$check_query  = "SELECT id FROM clients WHERE username = '$username'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    die("This username is already taken. Please go back and choose a different username.");
}

// Check if email already exists in the database
$check_email  = "SELECT id FROM clients WHERE email = '$email'";
$email_result = mysqli_query($conn, $check_email);

if (mysqli_num_rows($email_result) > 0) {
    die("This email is already registered. Please go back and use a different email.");
}


// ------------------------------------------------
// STEP 4: Encrypt the password before saving
// password_hash() converts plain text password
// into a secure encrypted string
// ------------------------------------------------
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


// ------------------------------------------------
// STEP 5: Insert the client data into the database
// ------------------------------------------------
$query = "INSERT INTO clients (full_name, dob, cnic, contact, address, email, username, password)
          VALUES ('$full_name', '$dob', '$cnic', '$contact', '$address', '$email', '$username', '$hashed_password')";

$result = mysqli_query($conn, $query);

// Check if data was saved successfully
if ($result) {
    // Success — redirect to login page
    header("Location: login.php");
    exit();
} else {
    // Failed — show error
    die("Registration failed. Please try again. Error: " . mysqli_error($conn));
}


// ------------------------------------------------
// STEP 6: Close the database connection
// ------------------------------------------------
mysqli_close($conn);
?>