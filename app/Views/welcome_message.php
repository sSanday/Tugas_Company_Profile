<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - PT. Oyiisamm</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #f8f9fa;
            --dark-color: #2c3e50;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            padding-top: 76px;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white !important;
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            margin: 0 10px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--secondary-color) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
        }

        .section-padding {
            padding: 80px 0;
        }

        .bg-light-custom {
            background-color: var(--light-color);
        }

        .service-card {
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            border: none;
            border-radius: 10px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .icon-box i {
            font-size: 2rem;
            color: white;
        }

        .btn-primary-custom {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card {
            border-left: 4px solid var(--secondary-color);
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid var(--light-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: var(--dark-color);
            color: white;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            margin-right: 10px;
            transition: all 0.3s;
        }

        .social-icon:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }

        .section-title {
            position: relative;
            margin-bottom: 50px;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--secondary-color);
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .portfolio-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 152, 219, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .client-logo {
            height: 80px;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s;
        }

        .client-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://placehold.co/200x60/2c3e50/ffffff/png?text=Oyiisamm" alt="Oyiisamm" height="40" class="d-inline-block align-text-top me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Tim Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-bold mb-4">Solusi Inovatif untuk Bisnis Anda</h1>
                    <p class="lead mb-4">Kami membantu bisnis tumbuh dengan teknologi terkini dan konsultasi strategis untuk mencapai tujuan Anda.</p>
                    <a href="#contact" class="btn btn-light btn-lg rounded-pill px-4 py-2 me-3">Hubungi Kami <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="#services" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2">Layanan Kami</a>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Team Collaboration" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-title display-5 fw-bold">Tentang Perusahaan Kami</h2>
                    <p class="lead">Kami telah membantu bisnis sukses selama lebih dari 10 tahun</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Our Office" class="img-fluid rounded shadow mb-4">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-4">Cerita Kami</h3>
                    <p class="mb-4">Didirikan pada tahun 2013, perusahaan kami telah berkembang dari startup kecil menjadi penyedia solusi bisnis terkemuka. Kami telah membantu lebih dari 500 klien mencapai tujuan mereka melalui pendekatan inovatif dan tim yang berdedikasi.</p>
                    <p class="mb-4">Misi kami adalah memberdayakan bisnis dengan teknologi dan strategi yang mendorong pertumbuhan dan menciptakan kesuksesan berkelanjutan.</p>
                    <div class="d-flex flex-wrap">
                        <div class="me-4 mb-3 text-center">
                            <h4 class="fw-bold text-primary">500+</h4>
                            <p>Klien Dilayani</p>
                        </div>
                        <div class="me-4 mb-3 text-center">
                            <h4 class="fw-bold text-primary">50+</h4>
                            <p>Anggota Tim</p>
                        </div>
                        <div class="me-4 mb-3 text-center">
                            <h4 class="fw-bold text-primary">10+</h4>
                            <p>Tahun Pengalaman</p>
                        </div>
                        <div class="mb-3 text-center">
                            <h4 class="fw-bold text-primary">150+</h4>
                            <p>Proyek Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-light-custom">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-title display-5 fw-bold">Layanan Kami</h2>
                    <p class="lead">Solusi komprehensif untuk kebutuhan bisnis Anda</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-box">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4 class="card-title fw-bold">Web Development</h4>
                            <p class="card-text">Website dan aplikasi web kustom yang dibangun dengan teknologi terkini untuk membantu bisnis Anda menonjol.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-box">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h4 class="card-title fw-bold">Aplikasi Mobile</h4>
                            <p class="card-text">Aplikasi iOS dan Android yang dirancang untuk melibatkan pelanggan dan merampingkan operasi bisnis Anda.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-box">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="card-title fw-bold">Pemasaran Digital</h4>
                            <p class="card-text">Strategi pemasaran berbasis data untuk meningkatkan visibilitas online dan mendorong lebih banyak konversi.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <a href="#contact" class="btn btn-primary-custom">Lihat Semua Layanan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-title display-5 fw-bold">Portfolio Kami</h2>
                    <p class="lead">Beberapa proyek terbaru yang telah kami selesaikan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="E-commerce Website" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h4>E-commerce Website</h4>
                                <p>Platform belanja online dengan fitur lengkap</p>
                                <a href="#" class="btn btn-light btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Mobile App" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h4>Aplikasi Fitness</h4>
                                <p>Aplikasi mobile untuk tracking aktivitas fitness</p>
                                <a href="#" class="btn btn-light btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="portfolio-item">
                        <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Digital Marketing" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="text-center text-white">
                                <h4>Kampanye Pemasaran</h4>
                                <p>Strategi pemasaran digital untuk brand fashion</p>
                                <a href="#" class="btn btn-light btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section-padding bg-light-custom">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-title display-5 fw-bold">Tim Kami</h2>
                    <p class="lead">Orang-orang profesional di balik kesuksesan perusahaan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Team Member" class="team-img">
                        <h4>Budi Santoso</h4>
                        <p class="text-primary">CEO & Founder</p>
                        <p>Memimpin perusahaan dengan visi dan strategi yang jelas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Team Member" class="team-img">
                        <h4>Siti Rahayu</h4>
                        <p class="text-primary">CTO</p>
                        <p>Ahli teknologi dengan pengalaman lebih dari 15 tahun.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Team Member" class="team-img">
                        <h4>Agus Prasetyo</h4>
                        <p class="text-primary">Head of Marketing</p>
                        <p>Spesialis pemasaran digital dan strategi brand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="section-title display-5 fw-bold">Hubungi Kami</h2>
                    <p class="lead">Siap memulai proyek Anda? Hubungi kami hari ini</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Anda</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Anda</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom">Kirim Pesan</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box-sm me-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0">Jl. Ngaceng Crew No. 123</p>
                                    <p class="mb-0">Malang , 12540</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box-sm me-3">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <p class="mb-0">+62 21 1234 5678</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box-sm me-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="mb-0">info@perusahaanoyiisamm.com</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                                <div class="d-flex">
                                    <a href="#" class="social-icon me-3"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon me-3"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-icon me-3"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="social-icon me-3"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-white mb-4">PT. Oyiisamm</h5>
                    <p>Menyediakan solusi bisnis inovatif sejak 2013. Kami membantu bisnis tumbuh melalui teknologi, strategi, dan kreativitas.</p>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5 class="text-white mb-4">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Tentang</a></li>
                        <li class="mb-2"><a href="#services" class="text-white text-decoration-none">Layanan</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white mb-4">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Web Development</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Aplikasi Mobile</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Pemasaran Digital</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">UI/UX Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white mb-4">Berlangganan</h5>
                    <p>Berlangganan newsletter untuk mendapatkan update terbaru</p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda">
                            <button class="btn btn-primary" type="button">Berlangganan</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 PT. Oyiisamm. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Simple smooth scroll functionality
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 75,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
                navbar.style.padding = '10px 0';
            } else {
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '15px 0';
            }
        });
    </script>
</body>

</html>