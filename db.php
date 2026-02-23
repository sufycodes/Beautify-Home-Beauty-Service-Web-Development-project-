<?php
$conn = mysqli_connect("localhost", "root", "", "beautify_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    echo "connection successful";
};
?>