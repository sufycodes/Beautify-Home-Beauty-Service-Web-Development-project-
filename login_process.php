<?php
// ================================================== //
//               LOGIN PROCESS - BACKEND              //
// ================================================== //
// This file handles the login form submission.        //
// It checks the username and password against the    //
// database and starts a session if login is valid.   //
// ================================================== //


// ------------------------------------------------
// STEP 1: Start the session
// Sessions allow us to remember the logged in user
// across multiple pages
// ------------------------------------------------
session_start();


// ------------------------------------------------
// STEP 2: Connect to the database
// ------------------------------------------------
$host    = "localhost";   // XAMPP default host
$dbname  = "beautify";    // Our database name
$db_user = "root";        // XAMPP default username
$db_pass = "";            // XAMPP default password (empty)

$conn = mysqli_connect($host, $db_user, $db_pass, $dbname);

// If connection fails, stop and show error
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


// ------------------------------------------------
// STEP 3: Get username and password from login form
// ------------------------------------------------
$username = trim($_POST['username']);
$password = trim($_POST['password']);


// ------------------------------------------------
// STEP 4: Check if fields are empty
// ------------------------------------------------
if (empty($username) || empty($password)) {
    // Redirect back to login page with empty error
    header("Location: login.php?error=empty");
    exit();
}


// ------------------------------------------------
// STEP 5: Search for the username in the database
// ------------------------------------------------
$query  = "SELECT * FROM clients WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if a matching user was found
if (mysqli_num_rows($result) == 1) {

    // Get the client's data from the database
    $client = mysqli_fetch_assoc($result);

    // ------------------------------------------------
    // STEP 6: Verify the password
    // password_verify() checks the entered password
    // against the encrypted password in the database
    // ------------------------------------------------
    if (password_verify($password, $client['password'])) {

        // Password is correct — save client info in session
        $_SESSION['username']  = $client['username'];
        $_SESSION['full_name'] = $client['full_name'];
        $_SESSION['client_id'] = $client['id'];

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();

    } else {
        // Wrong password — redirect back with error
        header("Location: login.php?error=invalid");
        exit();
    }

} else {
    // Username not found — redirect back with error
    header("Location: login.php?error=invalid");
    exit();
}


// ------------------------------------------------
// STEP 7: Close the database connection
// ------------------------------------------------
mysqli_close($conn);
?>