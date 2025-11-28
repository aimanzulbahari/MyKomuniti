<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahli Majlis MBSA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.2.10/swiper-bundle.min.css" rel="stylesheet">

    <style>
        :root {
            --background-color: #ffffff;
            --default-color: #666666;
            --heading-color: #000000;
            --accent-color: #313131;
            --surface-color: #ffffff;
            --contrast-color: #ffffff;
        }

        body {
            background-color: var(--background-color);
            min-height: 100vh;
            padding: 40px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--default-color);
        }

        .page-header {
            text-align: center;
            color: var(--heading-color);
            margin-bottom: 50px;
            padding: 30px 0;
        }

        .page-header .logo-mbsa {
            height: 80px;
            width: auto;
            margin-bottom: 20px;
        }

        .page-header h1 {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 10px;
            color: var(--heading-color);
        }

        .page-header p {
            font-size: 1.2rem;
            color: var(--default-color);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--default-color);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .back-link:hover {
            color: var(--accent-color);
            gap: 12px;
        }

        .back-link i {
            transition: transform 0.3s ease;
        }

        .back-link:hover i {
            transform: translateX(-3px);
        }

        .council-card {
            background: var(--surface-color);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .council-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .card-image-wrapper {
            position: relative;
            height: 280px;
            overflow: hidden;
            background: #f5f5f5;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .council-card:hover .card-image {
            transform: scale(1.1);
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(49, 49, 49, 0.6) 100%);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--heading-color);
            margin-bottom: 5px;
        }

        .card-position {
            color: var(--default-color);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .btn-info-custom {
            background-color: var(--accent-color);
            border: none;
            color: var(--contrast-color);
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-info-custom:hover {
            background-color: #000000;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(49, 49, 49, 0.3);
            color: var(--contrast-color);
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .modal-header {
            background-color: var(--accent-color);
            color: var(--contrast-color);
            border-radius: 15px 15px 0 0;
        }

        .modal-body {
            padding: 30px;
            background-color: var(--surface-color);
        }

        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: var(--heading-color);
            margin-bottom: 5px;
        }

        .info-value {
            color: var(--default-color);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="page-header" data-aos="fade-down">
            <img src="https://via.placeholder.com/80x80/313131/ffffff?text=MBSA" alt="Logo MBSA" class="logo-mbsa">
            <h1>Ahli Majlis MBSA</h1>
            <p>
                <a href="index.html" class="back-link">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke Halaman Utama
                </a>
            </p>
        </div>

        <div class="row" id="councilMembers">
            <!-- Cards akan dijana secara dinamik -->
        </div>
    </div>

    <!-- Modal untuk maklumat ahli majlis -->
    <div class="modal fade" id="infoModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Maklumat akan dipaparkan di sini -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.2.10/swiper-bundle.min.js"></script>

    <script src="../assets/js/mpp.js"></script>
</body>

</html>