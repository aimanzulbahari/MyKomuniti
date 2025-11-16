<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYMPP | UTAMA</title>
</head>

<?php include 'includes/header.php' ?>

<body class="main-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="utama.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?php echo $logo; ?>" alt="MyMPP-Logo">
                <h1 class="sitename">MYMPP</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Utama</a></li>
                    <li><a href="#about">Ahli Majlis</a></li>
                    <li><a href="#services">Perkhidmatan</a></li>
                    <li><a href="#portfolio">Info Sistem</a></li>
                    <li><a href="#portfolio">Pasukan</a></li>
                    <li><a href="#portfolio">Hubungi Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <!-- Hero Section - Start -->
        <section id="hero" class="hero section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 data-aos="fade-up" data-aos-delay="200">Transform Your Business Vision Into Reality</h1>
                            <p data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris.</p>
                            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                <a href="#about" class="btn-primary">Daftar Akaun</a>
                                <a href="#https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox">
                                    <i class="Box arrow in right"></i>
                                    Log Masuk
                                </a>
                            </div>
                            <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
                                <div class="stat-item">
                                    <div class="stat-number">24</div>
                                    <div class="stat-label">Ahli Majlis</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">Client Satisfaction</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">10+</div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                            <img src="assets/img/about/about-square-10.webp" alt="Business Success" class="img-fluid">
                            <div class="floating-card" data-aos="zoom-in" data-aos-delay="600">
                                <div class="card-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="card-content">
                                    <h5>Revenue Growth</h5>
                                    <div class="growth-percentage">+45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section - End -->

        <!-- About Us Section - Start -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Ahli Majlis</span>
                <h2>Apa Itu Ahli Majlis ?</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2>Crafting Excellence Through Innovation and Dedication</h2>
                            <p class="lead">We are passionate professionals committed to delivering exceptional results that exceed
                                expectations and drive meaningful transformation.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.</p>

                            <div class="stats-row">
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label">Years Experience</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="850"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="240"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label">Happy Clients</div>
                                </div>
                            </div>

                            <div class="cta-section">
                                <a href="#" team="" class="btn-outline">Meet Our Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="assets/img/about/about-square-12.webp" alt="About us" class="img-fluid">
                            <div class="floating-card" data-aos="zoom-in" data-aos-delay="500">
                                <div class="card-content">
                                    <div class="icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="text">
                                        <h4>Award Winning</h4>
                                        <p>Recognized for excellence in our industry</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services  Section - Start -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Perkhidmatan</span>
                <h2>Perkhidmatan Kami</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h3>Strategic Consulting</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <h3>Brand Development</h3>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud
                                exercitation.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h3>Digital Solutions</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris vitae congue nulla. Proin eget tortor
                                risus vestibulum.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-megaphone"></i>
                            </div>
                            <h3>Marketing Strategy</h3>
                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Cras ultricies ligula sed magna
                                dictum porta.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3>Team Building</h3>
                            <p>Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit
                                amet dui.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <h3>Data Analytics</h3>
                            <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a. Sed
                                porttitor lectus nibh.</p>
                            <a href="service-details.html" class="service-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services  Section - End -->

        <!-- About System - Start -->
        <section id="why-us" class="why-us section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Sistem</span>
                <h2>Tentang Sistem</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2>Why Partner With Us</h2>
                            <p>We deliver exceptional results through proven expertise, cutting-edge innovation, and unwavering
                                commitment to your success. Our comprehensive approach ensures sustainable growth and competitive
                                advantage.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="assets/img/about/about-8.webp" alt="Professional team collaboration" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="features-grid" data-aos="fade-up" data-aos-delay="400">
                    <div class="row g-5">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Innovation Leadership</h3>
                                    <p>We stay ahead of industry trends, implementing cutting-edge technologies and methodologies that
                                        drive transformational results for your business growth.</p>
                                </div>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Proven Expertise</h3>
                                    <p>Our team brings decades of combined experience across multiple industries, ensuring strategic
                                        insights and tactical execution that delivers measurable outcomes.</p>
                                </div>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>24/7 Dedicated Support</h3>
                                    <p>Round-the-clock availability with personalized attention from dedicated account managers who
                                        understand your unique challenges and objectives.</p>
                                </div>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Cost Efficiency</h3>
                                    <p>Streamlined processes and intelligent resource allocation reduce overhead while maximizing ROI,
                                        delivering premium results within your budget parameters.</p>
                                </div>
                            </div>
                        </div><!-- End Feature Item -->

                    </div>
                </div>
            </div>
        </section>
        <!-- About System - Start -->

        <!-- Team Section - Start -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Pasukan</span>
                <h2>Pasukan Pembangun Sistem</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/person/person-f-8.webp" class="img-fluid" alt="Sarah Johnson" loading="lazy">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Johnson</h4>
                                <span>Chief Executive Officer</span>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas
                                    vestibulum tortor quam.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/person/person-m-12.webp" class="img-fluid" alt="Michael Chen" loading="lazy">
                            </div>
                            <div class="member-info">
                                <h4>Michael Chen</h4>
                                <span>Chief Technology Officer</span>
                                <p>Mauris blandit aliquet elit eget tincidunt nibh pulvinar rutrum tellus ac blandit elit eget tincidunt
                                    mauris.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/person/person-f-3.webp" class="img-fluid" alt="Emily Rodriguez" loading="lazy">
                            </div>
                            <div class="member-info">
                                <h4>Emily Rodriguez</h4>
                                <span>Creative Director</span>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit
                                    neque auctor.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="David Thompson" loading="lazy">
                            </div>
                            <div class="member-info">
                                <h4>David Thompson</h4>
                                <span>Head of Operations</span>
                                <p>Curabitur arcu erat accumsan id imperdiet et porttitor at sem nulla facilisi mauris sit amet massa
                                    vitae tortor.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section - End -->

        <!-- Contact Us - Start -->
        <section id="contact" class="contact section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Maklumat Hubungan</span>
                <h2>Hubungi Kami</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5">

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div class="info-content">
                                <h4>Let's Connect</h4>
                                <p>We're here to discuss your vision and explore how we can bring it to life together.</p>
                            </div>
                        </div>

                        <div class="contact-details">

                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Email us</span>
                                    <span class="detail-value">contact@example.com</span>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-telephone-outbound"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Call us</span>
                                    <span class="detail-value">+1 (555) 432-8976</span>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Visit us</span>
                                    <span class="detail-value">547 Madison Avenue<br>New York, NY 10022</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="form-wrapper">
                            <div class="form-header">
                                <h3>Hantar Mesej Kepada Kami</h3>
                            </div>
                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" required="">
                                </div>
                                <div class="form-group">
                                    <label for="projectMessage">Message</label>
                                    <textarea name="message" id="projectMessage" rows="5" required=""></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <button type="submit" class="submit-btn">
                                    <span>Hantar</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Section - End -->

        <!-- Footer - Start -->
        <footer id="footer" class="footer dark-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">MYMPP</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta
                            donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Pautan Pantas</h4>
                        <ul>
                            <li><a href="#">Utama</a></li>
                            <li><a href="#">Ahli Majlis</a></li>
                            <li><a href="#">Perkhidmatan</a></li>
                            <li><a href="#">Mengenai Sistem</a></li>
                            <li><a href="#">Pasukan Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Perkhidmatan Atas Talian</h4>
                        <ul>
                            <li><a href="#">IPIS</a></li>
                            <li><a href="#">IPusara</a></li>
                            <li><a href="#">SISPAA</a></li>
                            <li><a href="#">MyMBSA</a></li>
                            <li><a href="#">Portal MBSA</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Hubungi Kami</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>
            </div>
            <div class="container copyright text-center mt-4">
                <p>© <span>2025 Majlis Bandaraya Shah Alam</span> <strong class="px-1 sitename">MyMPP</strong> <span>Hak Cipta Terpelihara</span></p>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>
    </main>

    <?php include 'includes/footer.php' ?>
</body>

</html>