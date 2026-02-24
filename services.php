<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify - Our Services</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Services Page Stylesheet -->
    <link rel="stylesheet" href="services.css">

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
                <li><a href="services.php" class="active-link">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
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

        <!-- -------------------- PAGE HEADING -------------------- -->
        <section class="page-heading">
            <div class="page-heading-content">
                <h1>Our Beauty Services</h1>
                <p>Choose from our wide range of professional at-home beauty services</p>
            </div>
        </section>
        <!-- END PAGE HEADING -->


        <!-- -------------------- CATEGORY FILTER BUTTONS -------------------- -->
        <section class="filter-section">

            <div class="filter-buttons">
                <!-- All button is active by default -->
                <button class="filter-btn active" data-filter="all">
                    <i class="fa-solid fa-grip"></i> All Services
                </button>
                <button class="filter-btn" data-filter="makeup">
                    <i class="fa-solid fa-wand-magic-sparkles"></i> Makeup
                </button>
                <button class="filter-btn" data-filter="hair">
                    <i class="fa-solid fa-scissors"></i> Hair Styling
                </button>
                <button class="filter-btn" data-filter="facial">
                    <i class="fa-solid fa-spa"></i> Facial
                </button>
                <button class="filter-btn" data-filter="nails">
                    <i class="fa-solid fa-hand-sparkles"></i> Nails
                </button>
            </div>

        </section>
        <!-- END FILTER BUTTONS -->


        <!-- ================================================== -->
        <!--                   SERVICE CARDS                     -->
        <!-- ================================================== -->
        <section class="services-section">
            <div class="services-grid">


                <!-- ==================== MAKEUP SERVICES ==================== -->

                <!-- Makeup Card 1 -->
                <div class="service-card" data-category="makeup">
                    <div class="service-image">
                        <img src="https://www.manyavar.com/dw/image/v2/BJZV_PRD/on/demandware.static/-/Library-Sites-ManyavarSharedLibrary/default/dwb7221dfd/Blogs-Images/Mohey%20Non-Apparel%20-%20Best%20Engagement%20Makeup%20Looks%20for%20Different%20Skin%20Tones_blog%201%20copy.jpg" alt="Engagement Makeup">
                        <span class="service-tag makeup">Makeup</span>
                    </div>
                    <div class="service-content">
                        <h3>Engagement Makeup</h3>
                        <p>Elegant and long-lasting engagement makeup for your special day</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 90min</span>
                            <span class="service-price">Rs. 5,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Makeup Card 2 -->
                <div class="service-card" data-category="makeup">
                    <div class="service-image">
                        <img src="https://img.freepik.com/premium-photo/indian-bride-with-makeup-artist-wedding-attire-traditional-indian-bride-getting-makeup-done_1284935-3729.jpg?w=360" alt="Nikkah Makeup">
                        <span class="service-tag makeup">Makeup</span>
                    </div>
                    <div class="service-content">
                        <h3>Nikkah Makeup</h3>
                        <p>Graceful and elegant Nikkah look that blends tradition with modern beauty</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 90min</span>
                            <span class="service-price">Rs. 6,000</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Makeup Card 3 -->
                <div class="service-card" data-category="makeup">
                    <div class="service-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnR7jBsopTDyRA2DlufobHi7u8PuwHN9c0lQ&s" alt="Mehndi Makeup">
                        <span class="service-tag makeup">Makeup</span>
                    </div>
                    <div class="service-content">
                        <h3>Mehndi Makeup</h3>
                        <p>Vibrant and colorful mehndi look with a fresh, festive glow</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 60min</span>
                            <span class="service-price">Rs. 4,000</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>


                <!-- ==================== HAIR STYLING SERVICES ==================== -->

                <!-- Hair Card 1 -->
                <div class="service-card" data-category="hair">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df" alt="Blowdry">
                        <span class="service-tag hair">Hair Styling</span>
                    </div>
                    <div class="service-content">
                        <h3>Blowdry</h3>
                        <p>Professional blowdry for smooth, shiny, and voluminous hair at home</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 45min</span>
                            <span class="service-price">Rs. 1,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Hair Card 2 -->
                <div class="service-card" data-category="hair">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e" alt="Hairstyle">
                        <span class="service-tag hair">Hair Styling</span>
                    </div>
                    <div class="service-content">
                        <h3>Hairstyle</h3>
                        <p>Custom hairstyling tailored to your preference and occasion</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 60min</span>
                            <span class="service-price">Rs. 2,000</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Hair Card 3 -->
                <div class="service-card" data-category="hair">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f" alt="Hair Cut">
                        <span class="service-tag hair">Hair Styling</span>
                    </div>
                    <div class="service-content">
                        <h3>Hair Cut</h3>
                        <p>Precision haircut by a professional stylist at your doorstep</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 40min</span>
                            <span class="service-price">Rs. 1,200</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>


                <!-- ==================== FACIAL SERVICES ==================== -->

                <!-- Facial Card 1 -->
                <div class="service-card" data-category="facial">
                    <div class="service-image">
                        <img src="https://tikkunmedical.com/wp-content/uploads/2021/12/tikkun_facial.jpg" alt="Cleanser">
                        <span class="service-tag facial">Facial</span>
                    </div>
                    <div class="service-content">
                        <h3>Cleanser</h3>
                        <p>Deep skin cleansing to refresh, purify and brighten your skin</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 30min</span>
                            <span class="service-price">Rs. 1,000</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Facial Card 2 -->
                <div class="service-card" data-category="facial">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881" alt="Face Polisher">
                        <span class="service-tag facial">Facial</span>
                    </div>
                    <div class="service-content">
                        <h3>Face Polisher</h3>
                        <p>Gentle exfoliation treatment to remove dead skin and restore natural glow</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 40min</span>
                            <span class="service-price">Rs. 1,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Facial Card 3 -->
                <div class="service-card" data-category="facial">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9" alt="Dermaclear Facial">
                        <span class="service-tag facial">Facial</span>
                    </div>
                    <div class="service-content">
                        <h3>Dermaclear Facial</h3>
                        <p>Advanced dermaclear treatment to deeply cleanse pores and even skin tone</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 60min</span>
                            <span class="service-price">Rs. 2,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>


                <!-- ==================== NAIL SERVICES ==================== -->

                <!-- Nails Card 1 -->
                <div class="service-card" data-category="nails">
                    <div class="service-image">
                        <img src="https://goodspaguide--live.s3.amazonaws.com/_AUTOxAUTO_fit_center-center_100_none/868693/manicures_2023-12-11-163023_pbgb.webp" alt="Classic Manicure">
                        <span class="service-tag nails">Nails</span>
                    </div>
                    <div class="service-content">
                        <h3>Classic Manicure</h3>
                        <p>Professional classic manicure for clean, polished and beautifully shaped nails</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 40min</span>
                            <span class="service-price">Rs. 1,200</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Nails Card 2 -->
                <div class="service-card" data-category="nails">
                    <div class="service-image">
                        <img src="https://cdn.prod.website-files.com/630f3c750051ac8f612287b7/630f3dfac4aaa11685865a0f_What%20is%20a%20pedicure.jpg" alt="Classic Pedicure">
                        <span class="service-tag nails">Nails</span>
                    </div>
                    <div class="service-content">
                        <h3>Classic Pedicure</h3>
                        <p>Relaxing classic pedicure for soft, clean and well-groomed feet</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 50min</span>
                            <span class="service-price">Rs. 1,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

                <!-- Nails Card 3 -->
                <div class="service-card" data-category="nails">
                    <div class="service-image">
                        <img src="https://images.squarespace-cdn.com/content/v1/6447eeb38baf0c31deed937f/8cc394f5-cab4-4f34-acc2-2277b70e16ab/Mani+Pedi+NYC.jpg" alt="Classic Mani Pedi">
                        <span class="service-tag nails">Nails</span>
                    </div>
                    <div class="service-content">
                        <h3>Classic Mani Pedi</h3>
                        <p>Full classic manicure and pedicure combo for hands and feet together</p>
                        <div class="service-info">
                            <span><i class="fa-regular fa-clock"></i> 80min</span>
                            <span class="service-price">Rs. 2,500</span>
                        </div>
                        <button class="btn-primary">Book Now</button>
                    </div>
                </div>

            </div>
            <!-- END SERVICES GRID -->

        </section>
        <!-- END SERVICE CARDS SECTION -->

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
                    <li><a href="#">Contact</a></li>
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
                <p>123 Beauty Street, Fashion District, NY 10001</p>
                <p>(555) 123-4567</p>
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


    <!-- ================================================== -->
    <!--           JAVASCRIPT - CATEGORY FILTER             -->
    <!-- ================================================== -->
    <script>
        // Get all filter buttons and all service cards
        const filterButtons = document.querySelectorAll('.filter-btn');
        const serviceCards  = document.querySelectorAll('.service-card');

        // Loop through each filter button and add a click listener
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {

                // Step 1: Remove 'active' class from all buttons, add to clicked one
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Step 2: Get the category from the clicked button's data-filter attribute
                const selectedFilter = button.getAttribute('data-filter');

                // Step 3: Show or hide cards based on their data-category attribute
                serviceCards.forEach(card => {
                    if (selectedFilter === 'all' || card.getAttribute('data-category') === selectedFilter) {
                        card.style.display = 'block'; // Show matching cards
                    } else {
                        card.style.display = 'none';  // Hide non-matching cards
                    }
                });

            });
        });
    </script>

</body>

</html>