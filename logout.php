<?php
// ================================================== //
//                  LOGOUT - BACKEND                  //
// ================================================== //
// This file handles the logout process.              //
// It destroys the session (clears all login data)   //
// and redirects the user back to the home page.     //
// ================================================== //


// STEP 1: Start the session so we can access it
session_start();

// STEP 2: Destroy all session data (logs the user out)
session_destroy();

// STEP 3: Redirect to home page after logout
header("Location: index.html");
exit();
?>