<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify - Login</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Login Page Stylesheet -->
    <link rel="stylesheet" href="login.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- ================================================== -->
    <!--                      HEADER                        -->
    <!-- (Same as home page for consistency)                -->
    <!-- ================================================== -->
    <header class="site-header">

        <!-- Top Title Bar -->
        <div class="top-bar">
            <i class="fa-solid fa-house"></i> BEAUTIFY - HOME BEAUTY SERVICES
        </div>

        <!-- Main Navigation -->
        <nav class="main-nav">

            <!-- Navigation Links (centered) -->
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!-- Navigation Action Buttons (right side) -->
            <div class="nav-actions">
                <a href="register.php" class="btn-mybooking">Register</a>
                <a href="login.php" class="btn-booknow">Login</a>
            </div>

        </nav>

    </header>
    <!-- END HEADER -->


    <!-- ================================================== -->
    <!--                    MAIN CONTENT                    -->
    <!-- ================================================== -->
    <main>

        <!-- -------------------- PAGE HERO BANNER -------------------- -->
        <section class="login-hero">
            <div class="login-hero-content">
                <h1>Welcome Back!</h1>
                <p>Login to your Beautify account and book your next beauty service</p>
            </div>
        </section>
        <!-- END PAGE HERO BANNER -->


        <!-- -------------------- LOGIN FORM SECTION -------------------- -->
        <section class="login-section">

            <div class="login-form-container">

                <!-- Lock icon at top -->
                <div class="login-icon">
                    <i class="fa-solid fa-lock"></i>
                </div>

                <h2>Client Login</h2>
                <p class="form-subtitle">Enter your username and password to login</p>

                <!-- Display error message from PHP if login fails -->
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-message">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <?php
                            // Show appropriate error message based on error type
                            if ($_GET['error'] == 'invalid') {
                                echo 'Invalid username or password. Please try again.';
                            } elseif ($_GET['error'] == 'empty') {
                                echo 'Please fill in all fields.';
                            }
                        ?>
                    </div>
                <?php endif; ?>

                <!-- Login form — submits to login_process.php -->
                <form action="login_process.php" method="POST">

                    <!-- Username Field -->
                    <div class="form-group">
                        <label for="username">
                            <i class="fa-solid fa-circle-user"></i> Username
                        </label>
                        <input type="text" id="username" name="username"
                            placeholder="Enter your username" required>
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password">
                            <i class="fa-solid fa-lock"></i> Password
                        </label>
                        <input type="password" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn-login">
                        Login <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    <!-- Don't have an account link -->
                    <p class="register-link">
                        Don't have an account? <a href="register.php">Register here</a>
                    </p>

                </form>

            </div>

        </section>
        <!-- END LOGIN FORM SECTION -->

    </main>
    <!-- END MAIN CONTENT -->


    <!-- ================================================== -->
    <!--                      FOOTER                        -->
    <!-- (Same as home page for consistency)                -->
    <!-- ================================================== -->
    <footer class="site-footer">

        <div class="footer-container">

            <!-- Footer Column 1: Brand Description -->
            <div class="footer-column">
                <h3>Beautify</h3>
                <p>Your premier destination for beauty and wellness services. Experience luxury and care at your doorstep.</p>
            </div>

            <!-- Footer Column 2: Quick Links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Footer Column 3: Service List -->
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

            <!-- Footer Column 4: Contact Info & Social Media -->
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

        <!-- Footer Copyright Bar -->
        <div class="footer-bottom">
            © 2026 Beautify. All rights reserved.
        </div>

    </footer>
    <!-- END FOOTER -->

</body>

</html>