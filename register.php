<?php
include 'db.php';

if(isset($_POST['register'])){

    $name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO clients (full_name,dob,cnic,contact,address,email,username,password)
            VALUES ('$name','$dob','$cnic','$contact','$address','$email','$username','$password')";

    mysqli_query($conn,$sql);

    echo "Registration Successful!";
}
?>

<form method="POST">
    <h2>Client Registration</h2>

    Full Name: <input type="text" name="full_name" required><br><br>
    Date of Birth: <input type="date" name="dob" required><br><br>
    CNIC #: <input type="text" name="cnic" required><br><br>
    Contact #: <input type="text" name="contact" required><br><br>
    Address: <textarea name="address" required></textarea><br><br>
    Email: <input type="email" name="email" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Re-enter Password: <input type="password" name="confirm_password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>