<?php
//               LOGIN PROCESS - BACKEND              //

//  Start the session to store logged in user data
session_start();



// Connect to the database
$host    = "localhost";
$dbname  = "beautify";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($host, $db_user, $db_pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


// Get username and password from the login form
$username = trim($_POST['username']);
$password = trim($_POST['password']);



// Check if fields are empty
if (empty($username) || empty($password)) {
    header("Location: login.php?error=empty");
    exit();
}



// Search for the username in the database
$query  = "SELECT * FROM clients WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {

    $client = mysqli_fetch_assoc($result);

        // Verify entered password against encrypted password
     if (password_verify($password, $client['password'])) {

        // Password correct - store client info in session
        $_SESSION['username']  = $client['username'];
        $_SESSION['full_name'] = $client['full_name'];
        $_SESSION['client_id'] = $client['id'];

        // Redirect to welcome page
        header("Location: welcome.php");
        exit();

    } else {
        // Wrong password
        header("Location: login.php?error=invalid");
        exit();
    }

} else {
    // Username not found
    header("Location: login.php?error=invalid");
    exit();
}


// Close Database Connection
mysqli_close($conn);
?>