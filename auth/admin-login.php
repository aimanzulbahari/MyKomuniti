<?php
// Logic Goes Here
$site_name = "Log Masuk | Pentadbir Sistem"
?>

<!-- Update New UI -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/MBSA-Emblem.svg" type="image/x-icon">

    <!-- Google Font CDN -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../vendor/aos/aos.css" rel="stylesheet">
    <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-7.1.0/css/all.min.css" rel="stylesheet">

    <!-- Auth CSS -->
    <link rel="stylesheet" href="../assets/css/auth-css/auth.css">
</head>

<body class="index-page">
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="../assets/img/MBSA-Emblem.svg" alt="logo-mympp">
                <img src="../assets/img/logo/mympp-logo.png" alt="logo-mympp">
                <!-- <h1 class="sitename">Axis</h1> -->
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="../auth/mpp-login.php"><i class="fas fa-users" style="margin-right: 8px;"></i><?php echo ('Ahli Majlis') ?></a></li>
                    <li><a href="../auth/admin-login.php"><i class="fas fa-user-shield" style="margin-right: 8px;"></i><?php echo ('Pentadbir Sistem') ?></a></li>
                    <li><a href="../index.php"> <i class="fas fa-globe" style="margin-right: 8px;"></i><?php echo ('Portal Utama') ?></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <div class="login-wrapper">
        <!-- Brand Section -->
        <div class="brand-section">
            <div class="brand-logo">
                <h1><?php echo ('Log Masuk | Pentadbir Sistem')?></h1>
            </div>
            <div class="brand-description">
                <h2>Selamat datang ke Sistem MyMPP</h2>
                <p><?php echo ('Halaman Ini Hanya Kepada Pentadbir Sistem Sahaja')?></p>
            </div>
            <ul class="brand-features">
                <li><i class="fas fa-check-circle"></i> Akses kepada semua sistem dengan satu login</li>
                <li><i class="fas fa-check-circle"></i> Keselamatan data yang terjamin</li>
                <li><i class="fas fa-check-circle"></i> Pengurusan akaun yang mudah</li>
                <li><i class="fas fa-check-circle"></i> Sokongan 24/7 untuk pengguna</li>
            </ul>
        </div>

        <!-- Login Form Section -->
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <h3>Log Masuk</h3>
                    <p>Sila masukkan kelayakan anda untuk meneruskan</p>
                </div>

                <div class="login-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="icNumber" class="form-label">Nombor Kad Pengenalan</label>
                            <div class="input-group">
                                <i class="fas fa-id-card input-icon"></i>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="icNumber"
                                    placeholder="XXXXXX-XX-XXXX"
                                    maxlength="14"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Laluan</label>
                            <div class="input-group">
                                <i class="fas fa-lock input-icon"></i>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Masukkan kata laluan"
                                    required>
                                <i class="fas fa-eye password-toggle" id="toggleIcon" onclick="togglePassword()"></i>
                            </div>
                        </div>

                        <!--                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Ingat saya
                            </label>
                        </div> -->

                        <button type="submit" class="btn btn-primary btn-login">
                            LOG MASUK
                        </button>
                    </form>
                </div>

                <div class="login-footer">
                    <i class="fas fa-shield-alt"></i>
                    Dilindungi dengan enkripsi SSL 256-bit
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Vendor JS Files -->
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/php-email-form/validate.js"></script>
<script src="../vendor/aos/aos.js"></script>
<script src="../vendor/glightbox/js/glightbox.min.js"></script>
<script src="../vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../vendor/swiper/swiper-bundle.min.js"></script>
<script src="../vendor/particlesjs/particles.min.js"></script>
<script src="../assets/js/particle.js"></script>
<script src="../assets/js/portal.js"></script>

</html>