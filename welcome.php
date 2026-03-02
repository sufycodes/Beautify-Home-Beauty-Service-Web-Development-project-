<?php
// ------------------------------------------------
// Session check 
// ------------------------------------------------
session_start();

// If user is not logged in redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get client info from session
$client_name = $_SESSION['full_name'];
$username    = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify - Welcome</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Welcome Page Stylesheet -->
    <link rel="stylesheet" href="welcome.css">

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

        <!-- Show client name, Book Now, Logout after login -->  
           <span class="nav-username">
               <i class="fa-solid fa-circle-user"></i>
               <?php echo htmlspecialchars($client_name); ?>
           </span>

           <div class="nav-actions">
               <a href="services.php" class="btn-booknow">Book Now</a>
               <a href="logout.php" class="btn-logout">Logout</a>
           </div>


        </nav>

    </header>
    <!-- END HEADER -->


    <!-- ================================================== -->
    <!--                    MAIN CONTENT                    -->
    <!-- ================================================== -->
    <main>

        <!-- -------------------- WELCOME HERO BANNER -------------------- -->
        <section class="welcome-hero">
            <div class="welcome-hero-content">
                <i class="fa-solid fa-circle-check welcome-check-icon"></i>
                <h1>Welcome, <?php echo htmlspecialchars($client_name); ?>!</h1>
                <p>You are successfully logged in to your Beautify account</p>
            </div>
        </section>
        <!-- END WELCOME HERO BANNER -->


        <!-- -------------------- WELCOME DASHBOARD SECTION -------------------- -->
        <section class="welcome-section">

            <div class="welcome-container">

                <!-- Account Info Card -->
                <div class="welcome-card account-card">

                    <div class="card-header">
                        <i class="fa-solid fa-circle-user"></i>
                        <h3>Your Account</h3>
                    </div>

                    <div class="account-details">
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($client_name); ?></p>
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                        <p><strong>Status:</strong> <span class="status-badge">Active</span></p>
                    </div>

                </div>

                <!-- Quick Actions Card -->
                <div class="welcome-card actions-card">

                    <div class="card-header">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <h3>Quick Actions</h3>
                    </div>

                    <div class="quick-actions">
                        <a href="services.php" class="action-btn">
                            <i class="fa-solid fa-spa"></i> Browse Services
                        </a>
                        <a href="services.php" class="action-btn">
                            <i class="fa-solid fa-calendar-plus"></i> Book Appointment
                        </a>
                        <a href="contact.php" class="action-btn">
                            <i class="fa-solid fa-headset"></i> Contact Support
                        </a>
                        <a href="login.php" class="action-btn logout-btn">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>
                    </div>

                </div>

            </div>

        </section>
        <!-- END WELCOME DASHBOARD SECTION -->

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