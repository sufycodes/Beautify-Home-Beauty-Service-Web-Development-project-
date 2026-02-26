<?php
// ================================================== //
//              DATABASE AUTO SETUP                   //
// ================================================== //


// ------------------------------------------------
// Connect to MySQL without selecting a database yet
// ------------------------------------------------
$host    = "localhost";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($host, $db_user, $db_pass);

if (!$conn) {
    die("MySQL connection failed: " . mysqli_connect_error());
}


// ------------------------------------------------
// Create the beautify database if it doesn't exist
// ------------------------------------------------
$create_db = "CREATE DATABASE IF NOT EXISTS beautify";

if (!mysqli_query($conn, $create_db)) {
    die("Failed to create database: " . mysqli_error($conn));
}


// ------------------------------------------------
// Select the beautify database
// ------------------------------------------------
mysqli_select_db($conn, "beautify");


// ------------------------------------------------
// Create the clients table if it doesn't exist
// ------------------------------------------------
$create_table = "CREATE TABLE IF NOT EXISTS clients (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    full_name  VARCHAR(100) NOT NULL,
    dob        DATE NOT NULL,
    cnic       VARCHAR(20) NOT NULL,
    contact    VARCHAR(20) NOT NULL,
    address    TEXT NOT NULL,
    email      VARCHAR(100) NOT NULL,
    username   VARCHAR(50) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, $create_table)) {
    die("Failed to create table: " . mysqli_error($conn));
}

// $conn remains open for use in the calling file
?>