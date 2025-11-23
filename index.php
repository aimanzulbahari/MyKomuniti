<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MYMPP | MBSA</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/MBSA-Emblem.svg" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/portal-css/portal.css">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo/mympp-logo.png" alt="logo-mympp">
                <!-- <h1 class="sitename">Axis</h1> -->
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active"><?php echo ('Utama') ?></a></li>
                    <li><a href="#about"><?php echo ('Ahli Majlis') ?></a></li>
                    <li><a href="#services"><?php echo ('Perkhidmatan') ?></a></li>
                    <li><a href="#why-us"><?php echo ('Info Sistem') ?></a></li>
                    <li><a href="#contact"><?php echo ('Hubungi Kami') ?></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1 data-aos="fade-up" data-aos-delay="200"><?php echo ('Selamat Datang Ke Portal Rasmi MYMPP') ?></h1>
                            <p data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris.</p>
                            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                <a href="pages/404.php" class="btn-primary"><?php echo ('Daftar Akaun') ?></a>
                                <a href="pages/404.php" class="btn-secondary">
                                    <i class="bi-box-arrow-right"></i>
                                    <?php echo ('Log Masuk') ?>
                                </a>
                            </div>
                            <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
                                <div class="stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Jumlah Permohonan</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">Jumlah Aktiviti</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">10+</div>
                                    <div class="stat-label">Jumlah SDG</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                            <img src="assets/img/mympp-about/Shah-Alam.jpeg" alt="shah-alam-pic" class="img-fluid">
                            <div class="floating-card" data-aos="zoom-in" data-aos-delay="600">
                                <div class="card-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="card-content">
                                    <h5><?php echo ('Jubli Perak MBSA') ?></h5>
                                    <div class="growth-percentage"><?php echo ('25 Tahun') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle"><?php echo ('Ahli Majlis') ?></span>
                <h2><?php echo ('Apa Itu Ahli Majlis') ?></h2>
                <p><?php echo ('berperanan sebagai wakil rakyat dan saluran aduan masyarakat, mengawasi Pihak Berkuasa Tempatan (PBT) dalam melaksanakan tugasnya, dan memastikan komuniti setempat memenuhi tanggungjawab mereka') ?></p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2><?php echo ('Peranan Dan Tanggungjawab Ahli Majlis MBSA') ?></h2>
                            <p><b><?php echo ('Wakil Rakyat Dan Saluran Aduan:') ?></b><?php echo ('
                                    Menjadi wakil kepentingan masyarakat setempat dan saluran utama untuk menyampaikan aduan dan masalah penduduk kepada pihak majlis.') ?></p>

                            <p><b><?php echo ('Mata Dan Telinga PBT:') ?></b><?php echo ('
                                    Bertindak sebagai mata dan telinga PBT untuk mendapatkan maklum balas dan pandangan daripada orang ramai mengenai perkhidmatan dan isu-isu bandar.') ?></p>

                            <p><b><?php echo ('Memastikan Pelaksanaan Tugas MBSA:') ?></b><?php echo ('
                                    Mengawasi MBSA dalam melaksanakan tugas dan tanggungjawabnya dengan amanah, berintegriti, efektif, dan efisien.') ?></p>

                            <p><b><?php echo ('Memupuk Kesedaran Komuniti:') ?></b><?php echo ('
                                    Memastikan komuniti setempat menyedari dan memenuhi kewajipan serta tanggungjawab mereka untuk menyokong MBSA dalam melaksanakan tugasnya') ?></p>

                            <p><b><?php echo ('Menggalakkan Penglibatan Komuniti:') ?></b><?php echo ('
                                    Mendorong penglibatan orang ramai dalam menjayakan program dan aktiviti yang dianjurkan oleh MBSA atau kerajaan. ') ?></p>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="24"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label"><?php echo ('Ahli Majlis') ?></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="3"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label"><?php echo ('Zon Shah Alam') ?></div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="3"
                                        data-purecounter-duration="1"></div>
                                    <div class="stat-label"><?php echo ('Pejabat Cawangan') ?></div>
                                </div>
                            </div>

                            <div class="cta-section">
                                <a href="pages/mpp-members.php" team="" class="btn-outline"><?php echo ('Senarai Ahli Majlis MBSA') ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="assets/img/mympp-about/MBSA.jpg" alt="mbsa-pic" class="img-fluid">
                            <div class="floating-card" data-aos="zoom-in" data-aos-delay="500">
                                <div class="card-content">
                                    <div class="icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="text">
                                        <h4><?php echo ('Shah Alam') ?></h4>
                                        <p><?php echo ('Bandaraya Anggerik') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle"><?php echo ('Perkhidmatan') ?></span>
                <h2><?php echo ('Perkhidmatan Yang Disediakan') ?></h2>
                <p><?php echo ('Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                        omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam') ?></p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-laptop-fill"></i>
                            </div>
                            <h3><?php echo ('Perkhidmatan Online') ?></h3>
                            <p><?php echo ('Hantar permohonan ahli majlis secara dalam talian tanpa perlu datang ke pejabat. Jimat masa dan tenaga
                                    anda.') ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-clock-fill"></i>
                            </div>
                            <h3><?php echo ('24/7 Akses') ?></h3>
                            <p><?php echo ('Akses sistem pada bila-bila masa, di mana sahaja. Kemudahan untuk anda membuat permohonan mengikut
                                    kesesuaian.') ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-file-bar-graph-fill"></i>
                            </div>
                            <h3><?php echo ('Semak Status')?></h3>
                            <p><?php echo ('Semak status permohonan anda dengan mudah dan pantau perkembangan secara
                                real-time melalui dashboard.')?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-paperclip"></i>
                            </div>
                            <h3><?php echo ('Dokumen Digital')?></h3>
                            <p><?php echo ('Muat naik dokumen sokongan secara digital. Tiada lagi keperluan untuk dokumen fizikal.')?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-shield-fill-check"></i>
                            </div>
                            <h3><?php echo ('Selamat & Terjamin')?></h3>
                            <p><?php echo ('Maklumat anda dilindungi dengan sistem keselamatan yang tinggi dan mematuhi piawaian privasi.')?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi-megaphone-fill"></i>
                            </div>
                            <h3><?php echo ('Notifikasi')?></h3>
                            <p><?php echo ('Terima makluman automatik mengenai status permohonan anda melalui email dan notifikasi sistem.')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Info Sistem</span>
                <h2>Info Mengenai Sistem</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2>Teknologi Yang Digunakan</h2>
                            <p>We deliver exceptional results through proven expertise, cutting-edge innovation, and unwavering
                                commitment to your success. Our comprehensive approach ensures sustainable growth and competitive
                                advantage.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="assets/img/mympp-about/system-bg.jpg" alt="coding-bg" class="img-fluid">
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
                                    <h3>Front-End</h3>
                                    <p>We stay ahead of industry trends, implementing cutting-edge technologies and methodologies that
                                        drive transformational results for your business growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Back-End</h3>
                                    <p>Our team brings decades of combined experience across multiple industries, ensuring strategic
                                        insights and tactical execution that delivers measurable outcomes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Infrastruktur & Server</h3>
                                    <p>Round-the-clock availability with personalized attention from dedicated account managers who
                                        understand your unique challenges and objectives.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-item">
                                <div class="icon-wrapper">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Keselamatan Data Pengguna</h3>
                                    <p>Streamlined processes and intelligent resource allocation reduce overhead while maximizing ROI,
                                        delivering premium results within your budget parameters.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Hubungi</span>
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
                                <h4>Maklumat Hubungan</h4>
                                <p>We're here to discuss your vision and explore how we can bring it to life together.</p>
                            </div>
                        </div>

                        <div class="contact-details">
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Emel Kami</span>
                                    <span class="detail-value">contact@example.com</span>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-telephone-outbound"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Hotline MBSA</span>
                                    <span class="detail-value">+1 (555) 432-8976</span>
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Alamat Kami</span>
                                    <span class="detail-value">547 Madison Avenue<br>New York, NY 10022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-wrapper">
                            <div class="form-header">
                                <h3>Tinggalkan Mesej Kepada Kami</h3>
                            </div>
                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Penuh</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat Emel</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subjek</label>
                                    <input type="text" name="subject" required="">
                                </div>
                                <div class="form-group">
                                    <label for="projectMessage">Mesej/Pesanan</label>
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
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="#" class="logo d-flex align-items-center">
                        <span class="sitename"><?php echo ('MYMPP | MBSA')?></span>
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
                    <h4><?php echo ('Pautan Pantas')?></h4>
                    <ul>
                        <li><a href="#"><?php echo ('Utama')?></a></li>
                        <li><a href="#"><?php echo ('Ahli Majlis')?></a></li>
                        <li><a href="#"><?php echo ('Perkhidmatan')?></a></li>
                        <li><a href="#"><?php echo ('Info Sistem')?></a></li>
                        <li><a href="#"><?php echo ('Hubungi Kami')?></a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4><?php echo ('Perkhidmatan Kami')?></h4>
                    <ul>
                        <li><a href="https://ipis.mbsa.gov.my/" target="_blank"><?php echo ('iPIS') ?></a></li>
                        <li><a href="https://ipusara.mbsa.gov.my/" target="_blank"><?php echo ('IPusara') ?></a></li>
                        <li><a href="https://www.mymbsa.gov.my/" target="_blank"><?php echo ('MyMBSA') ?></a></li>
                        <li><a href="https://mbsa.spab.gov.my/" target="_blank"><?php echo ('SISPAA MBSA') ?></a></li>
                        <li><a href="https://www.mbsa.gov.my/" target="_blank"><?php echo ('Portal Rasmi MBSA') ?></a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4><?php echo ('Hubungi Kami') ?></h4>
                    <p><?php echo ('Wisma MBSA') ?></p>
                    <p><?php echo ('Persiaran Perbandaran, 40000') ?></p>
                    <p><?php echo ('Shah Alam, Selangor Darul Ehsan') ?></p>
                    <p class="mt-4"><strong><?php echo ('Tel:') ?></strong> <span><?php echo ('03-55105133') ?></span></p>
                    <p><strong><?php echo ('Emel:') ?></strong> <span><?php echo ('mbsa@mbsa.gov.my') ?></span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p><?php echo ('©')?> <span>2025 Majlis Bandaraya Shah Alam</span> <strong class="px-1 sitename"><?php echo ('MYMPP | MBSA')?></strong> <span><?php echo ('Hak
                    Cipta Terpelihara')?></span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/portal.js"></script>

</body>

</html>