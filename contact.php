<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify - Contact Us</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Contact Page Stylesheet -->
    <link rel="stylesheet" href="contact.css">

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
                <li><a href="contact.php" class="active-link">Contact</a></li>
            </ul>

            <!-- Navigation Action Buttons (right side) -->
            <div class="nav-actions">
                <a href="#" class="btn-mybooking">My Booking</a>
                <a href="#" class="btn-booknow">Book Now</a>
            </div>

        </nav>

    </header>
    <!-- END HEADER -->


    <!-- ================================================== -->
    <!--                    MAIN CONTENT                    -->
    <!-- ================================================== -->
    <main>

        <!-- -------------------- PAGE HERO BANNER -------------------- -->
        <section class="contact-hero">
            <div class="contact-hero-content">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you — reach out anytime!</p>
            </div>
        </section>
        <!-- END PAGE HERO BANNER -->


        <!-- -------------------- CONTACT MAIN SECTION -------------------- -->
        <section class="contact-section">
            <div class="contact-container">


                <!-- -------------------- LEFT: CONTACT INFO -------------------- -->
                <div class="contact-info">

                    <h2>Get In Touch</h2>
                    <p>Have a question or want to book a service? Fill out the form or reach us directly through the details below.</p>

                    <!-- Address -->
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4>Address</h4>
                            <p>123 Beauty Street, Fashion District, Karachi, Pakistan</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+92 300 1234567</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="info-item">
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info@beautify.com</p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="info-item">
                        <i class="fa-solid fa-clock"></i>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Monday – Saturday: 9:00 AM – 8:00 PM</p>
                        </div>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>

                </div>
                <!-- END CONTACT INFO -->


                <!-- -------------------- RIGHT: CONTACT FORM -------------------- -->
                <div class="contact-form">

                    <h2>Send Us a Message</h2>

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email address">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="What is this regarding?">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" placeholder="Write your message here..."></textarea>
                    </div>

                    <button class="btn-send">Send Message <i class="fa-solid fa-paper-plane"></i></button>

                </div>
                <!-- END CONTACT FORM -->


            </div>
        </section>
        <!-- END CONTACT MAIN SECTION -->

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
                    <li><a href="#">Book Appointment</a></li>
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