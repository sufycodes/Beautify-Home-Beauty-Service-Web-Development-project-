<?php
//                  LOGOUT - BACKEND                  //

// Start the session so we can access and destroy it
session_start();

// Destroy all session data to log the user out
session_destroy();

// Redirect to home page after logout
header("Location: index.html");
exit();
?>
