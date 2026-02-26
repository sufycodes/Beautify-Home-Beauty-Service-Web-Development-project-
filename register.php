<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify - Register</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Register Page Stylesheet -->
    <link rel="stylesheet" href="register.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- ================================================== -->
    <!--                      HEADER                        -->
    <!-- ================================================== -->
    <header class="site-header">

        <div class="top-bar">
            <i class="fa-solid fa-house"></i> BEAUTIFY - HOME BEAUTY SERVICES
        </div>

        <nav class="main-nav">

            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!-- Only Login shown on register page -->
            <div class="nav-actions">
                <a href="login.php" class="btn-login">Login</a>
            </div>

        </nav>

    </header>
    <!-- END HEADER -->


    <!-- ================================================== -->
    <!--                    MAIN CONTENT                    -->
    <!-- ================================================== -->
    <main>

        <!-- -------------------- PAGE HERO BANNER -------------------- -->
        <section class="register-hero">
            <div class="register-hero-content">
                <h1>Create Your Account</h1>
                <p>Register to book your favourite beauty services at home</p>
            </div>
        </section>
        <!-- END PAGE HERO BANNER -->


        <!-- -------------------- REGISTRATION FORM SECTION -------------------- -->
        <section class="register-section">

            <div class="register-form-container">

                <h2>Client Registration</h2>
                <p class="form-subtitle">Please fill in all the details below to create your account</p>

                <!-- Display error message if registration fails -->
                <?php if (isset($_GET['error'])): ?>
                    <div class="registeration-error-message">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <?php
                            if ($_GET['error'] == 'empty') {
                                echo 'All fields are required. Please fill in all fields.';
                            } elseif ($_GET['error'] == 'password') {
                                echo 'Passwords do not match. Please re-enter your password.';
                            } elseif ($_GET['error'] == 'username') {
                                echo 'This username is already taken. Please choose a different username.';
                            } elseif ($_GET['error'] == 'email') {
                                echo 'This email is already registered. Please use a different email.';
                            } elseif ($_GET['error'] == 'failed') {
                                echo 'Registration failed. Please try again.';
                            }
                        ?>
                    </div>
                <?php endif; ?>

                <!-- Registration form submits to register_process.php -->
                <form action="register_process.php" method="POST">

                    <!-- -------- ROW 1: Full Name + Date of Birth -------- -->
                    <div class="form-row">

                        <div class="form-group">
                            <label for="full_name">
                                <i class="fa-solid fa-user"></i> Full Name
                            </label>
                            <input type="text" id="full_name" name="full_name"
                                placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="dob">
                                <i class="fa-solid fa-calendar"></i> Date of Birth
                            </label>
                            <input type="date" id="dob" name="dob" required>
                        </div>

                    </div>
                    <!-- END ROW 1 -->


                    <!-- -------- ROW 2: CNIC + Contact Number -------- -->
                    <div class="form-row">

                        <div class="form-group">
                            <label for="cnic">
                                <i class="fa-solid fa-id-card"></i> CNIC #
                            </label>
                            <input type="text" id="cnic" name="cnic"
                                placeholder="e.g. 42101-1234567-1" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">
                                <i class="fa-solid fa-phone"></i> Contact #
                            </label>
                            <input type="text" id="contact" name="contact"
                                placeholder="e.g. 0300-1234567" required>
                        </div>

                    </div>
                    <!-- END ROW 2 -->


                    <!-- -------- ROW 3: Complete Address (full width) -------- -->
                    <div class="form-group">
                        <label for="address">
                            <i class="fa-solid fa-location-dot"></i> Complete Address
                        </label>
                        <textarea id="address" name="address" rows="3"
                            placeholder="Enter your complete home address" required></textarea>
                    </div>
                    <!-- END ROW 3 -->


                    <!-- -------- ROW 4: Email + Username -------- -->
                    <div class="form-row">

                        <div class="form-group">
                            <label for="email">
                                <i class="fa-solid fa-envelope"></i> Email ID
                            </label>
                            <input type="email" id="email" name="email"
                                placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group">
                            <label for="username">
                                <i class="fa-solid fa-circle-user"></i> Username
                            </label>
                            <input type="text" id="username" name="username"
                                placeholder="Choose a username" required>
                        </div>

                    </div>
                    <!-- END ROW 4 -->


                    <!-- -------- ROW 5: Password + Re-enter Password -------- -->
                    <div class="form-row">

                        <div class="form-group">
                            <label for="password">
                                <i class="fa-solid fa-lock"></i> Password
                            </label>
                            <input type="password" id="password" name="password"
                                placeholder="Create a password" required>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">
                                <i class="fa-solid fa-lock"></i> Re-enter Password
                            </label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                placeholder="Re-enter your password" required>
                        </div>

                    </div>
                    <!-- END ROW 5 -->


                    <!-- -------- SUBMIT BUTTON -------- -->
                    <button type="submit" class="btn-register">
                        Register Now <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <!-- -------- ALREADY HAVE AN ACCOUNT LINK -------- -->
                    <p class="login-link">
                        Already have an account? <a href="login.php">Login here</a>
                    </p>

                </form>

            </div>

        </section>
        <!-- END REGISTRATION FORM SECTION -->

    </main>
    <!-- END MAIN CONTENT -->


    <!-- ================================================== -->
    <!--                      FOOTER                        -->
    <!-- ================================================== -->
    <footer class="site-footer">

        <div class="footer-container">

            <div class="footer-column">
                <h3>Beautify</h3>
                <p>Your premier destination for beauty and wellness services. Experience luxury and care at your doorstep.</p>
            </div>

            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li>Hair Styling</li>
                    <li>Makeup</li>
                    <li>Massage</li>
                    <li>Manicure & Pedicure</li>
                    <li>Facial Treatments</li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>Contact Us</h4>
                <p>123 Beauty Street, Fashion District, Karachi, Pakistan</p>
                <p>+92 300 1234567</p>
                <p>info@beautify.com</p>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            © 2026 Beautify. All rights reserved.
        </div>

    </footer>
    <!-- END FOOTER -->

</body>

</html>