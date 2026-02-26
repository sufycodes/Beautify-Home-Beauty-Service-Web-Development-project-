<?php
// ================================================== //
//              REGISTER PROCESS - BACKEND            //
// ================================================== //


// ------------------------------------------------
// Connect to the database
// ------------------------------------------------
$host    = "localhost";
$dbname  = "beautify";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($host, $db_user, $db_pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


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
    header("Location: register.php?error=empty");
    exit();
}

// ------------------------------------------------
// Validate - check if passwords match
// ------------------------------------------------
if ($password !== $confirm_password) {
    header("Location: register.php?error=password");
    exit();
}

// ------------------------------------------------
// Check if username already exists in database
// ------------------------------------------------
$check_query  = "SELECT id FROM clients WHERE username = '$username'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    header("Location: register.php?error=username");
    exit();
}

// ------------------------------------------------
// Check if email already exists in database
// ------------------------------------------------
$check_email  = "SELECT id FROM clients WHERE email = '$email'";
$email_result = mysqli_query($conn, $check_email);

if (mysqli_num_rows($email_result) > 0) {
    header("Location: register.php?error=email");
    exit();
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
    header("Location: register.php?error=failed");
    exit();
}


// ------------------------------------------------
// Close the database connection
// ------------------------------------------------
mysqli_close($conn);
?>