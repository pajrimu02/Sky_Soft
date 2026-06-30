@extends('layouts.app')

@section('title', 'Home - SkySoft')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="hero-section d-flex align-items-center">

    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT TEXT -->
            <div class="col-lg-6 text-center text-lg-start">

                <h1 class="fw-bold display-4">
                    Build Modern <span class="text-primary">Digital Solutions</span> for Your Business
                </h1>

                <p class="lead text-secondary mt-3">
                    SkySoft membantu bisnis Anda berkembang dengan teknologi modern,
                    mulai dari website, mobile app, hingga UI/UX design profesional.
                </p>

                <div class="mt-4 d-flex gap-3 justify-content-center justify-content-lg-start">

                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">
                        Our Services
                    </a>

                    <a href="#" class="btn btn-outline-primary px-4 py-2 rounded-pill">
                        Contact Us
                    </a>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 text-center mt-5 mt-lg-0">

                <img src="{{ asset('images/hero/hero.png') }}"
                     class="img-fluid hero-img"
                     alt="SkySoft Hero">

            </div>

        </div>
    </div>
    

</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-5 bg-white">

    <div class="container">

        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <img src="{{ asset('images/about/about.png') }}"
                     class="img-fluid about-img"
                     alt="About SkySoft">
            </div>

            <!-- TEXT -->
            <div class="col-lg-6">

                <h2 class="fw-bold">
                    About <span class="text-primary">SkySoft</span>
                </h2>

                <p class="text-secondary mt-3">
                    SkySoft adalah perusahaan teknologi yang fokus pada pengembangan solusi digital modern
                    untuk membantu bisnis berkembang di era digital.
                </p>

                <p class="text-secondary">
                    Kami membangun website, aplikasi mobile, UI/UX design, serta sistem berbasis cloud
                    dengan standar profesional dan teknologi terbaru.
                </p>

                <!-- VISI -->
                <div class="mt-4">
                    <h5 class="fw-semibold">Our Vision</h5>
                    <p class="text-secondary">
                        Menjadi perusahaan teknologi terdepan yang memberikan solusi digital inovatif
                        untuk seluruh dunia.
                    </p>
                </div>

                <!-- MISI -->
                <div class="mt-3">
                    <h5 class="fw-semibold">Our Mission</h5>
                    <ul class="text-secondary">
                        <li>Memberikan solusi digital berkualitas tinggi</li>
                        <li>Mengutamakan kepuasan client</li>
                        <li>Inovasi teknologi tanpa batas</li>
                    </ul>
                </div>

                <a href="#" class="btn btn-primary mt-3 px-4 rounded-pill">
                    Read More
                </a>

            </div>

        </div>

    </div>

</section>

<!-- SERVICES SECTION -->
<section id="services" class="py-5 bg-light">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our <span class="text-primary">Services</span>
            </h2>
            <p class="text-secondary">
                Solusi digital lengkap untuk kebutuhan bisnis Anda
            </p>
        </div>

        <!-- CARDS -->
        <div class="row g-4">

            <!-- 1 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-code-slash fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">Web Development</h5>

                    <p class="text-secondary">
                        Pembuatan website modern, cepat, dan responsive untuk bisnis Anda.
                    </p>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-phone fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">Mobile App</h5>

                    <p class="text-secondary">
                        Aplikasi Android & iOS dengan teknologi modern dan performa tinggi.
                    </p>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-palette fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">UI/UX Design</h5>

                    <p class="text-secondary">
                        Desain tampilan modern, user friendly, dan profesional.
                    </p>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-cloud fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">Cloud Solution</h5>

                    <p class="text-secondary">
                        Sistem cloud aman, scalable, dan siap untuk bisnis besar.
                    </p>

                </div>
            </div>

            <!-- 5 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-shield-lock fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">Cyber Security</h5>

                    <p class="text-secondary">
                        Perlindungan sistem dari serangan dan ancaman digital.
                    </p>

                </div>
            </div>

            <!-- 6 -->
            <div class="col-md-4">
                <div class="card service-card h-100 text-center p-4 border-0 shadow-sm">

                    <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>

                    <h5 class="mt-3 fw-semibold">Digital Marketing</h5>

                    <p class="text-secondary">
                        Meningkatkan penjualan dengan strategi digital modern.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="py-5 bg-white">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our <span class="text-primary">Portfolio</span>
            </h2>
            <p class="text-secondary">
                Beberapa project yang sudah kami kerjakan
            </p>
        </div>

        <!-- FILTER (UI saja dulu) -->
        <div class="text-center mb-4">
            <button class="btn btn-outline-primary btn-sm mx-1">All</button>
            <button class="btn btn-outline-primary btn-sm mx-1">Web</button>
            <button class="btn btn-outline-primary btn-sm mx-1">Mobile</button>
            <button class="btn btn-outline-primary btn-sm mx-1">UI/UX</button>
        </div>

       <!-- GRID -->
<div class="row g-4">

    <!-- ITEM 1 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p1.jpg') }}" class="img-fluid" alt="Project 1">
            <div class="portfolio-overlay">
                <h5 class="text-white">E-Commerce Website</h5>
                <p class="text-light small">Laravel + Bootstrap</p>
            </div>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p2.jpg') }}" class="img-fluid" alt="Project 2">
            <div class="portfolio-overlay">
                <h5 class="text-white">Mobile Finance App</h5>
                <p class="text-light small">Flutter + API</p>
            </div>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p3.jpg') }}" class="img-fluid" alt="Project 3">
            <div class="portfolio-overlay">
                <h5 class="text-white">Admin Dashboard</h5>
                <p class="text-light small">Laravel + Bootstrap</p>
            </div>
        </div>
    </div>

    <!-- ITEM 4 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p4.jpg') }}" class="img-fluid" alt="Project 4">
            <div class="portfolio-overlay">
                <h5 class="text-white">Company Profile</h5>
                <p class="text-light small">HTML + CSS + JS</p>
            </div>
        </div>
    </div>

    <!-- ITEM 5 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p5.jpg') }}" class="img-fluid" alt="Project 5">
            <div class="portfolio-overlay">
                <h5 class="text-white">POS System</h5>
                <p class="text-light small">Laravel + MySQL</p>
            </div>
        </div>
    </div>

    <!-- ITEM 6 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p6.jpg') }}" class="img-fluid" alt="Project 6">
            <div class="portfolio-overlay">
                <h5 class="text-white">Landing Page UI</h5>
                <p class="text-light small">Bootstrap 5</p>
            </div>
        </div>
    </div>

    <!-- ITEM 7 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p7.jpg') }}" class="img-fluid" alt="Project 7">
            <div class="portfolio-overlay">
                <h5 class="text-white">School Management</h5>
                <p class="text-light small">Laravel System</p>
            </div>
        </div>
    </div>

    <!-- ITEM 8 -->
    <div class="col-md-3 col-sm-6">
        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio/p8.jpg') }}" class="img-fluid" alt="Project 8">
            <div class="portfolio-overlay">
                <h5 class="text-white">Portfolio Website</h5>
                <p class="text-light small">Frontend Design</p>
            </div>
        </div>
    </div>

</div>

    </div>

</section>

<!-- TEAM SECTION -->
<section id="team" class="py-5 bg-light">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our <span class="text-primary">Team</span>
            </h2>
            <p class="text-secondary">
                Tim profesional yang siap membantu bisnis Anda
            </p>
        </div>

        <!-- TEAM GRID -->
        <div class="row g-4 justify-content-center">

           <!-- TEAM GRID -->
            <div class="row g-4 justify-content-center">

                <!-- MEMBER 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Andi Pratama</h5>
                        <small class="text-primary">Frontend Developer</small>

                        <p class="text-secondary small mt-3">
                            Expert dalam membangun website modern menggunakan HTML, CSS, Bootstrap, dan Laravel.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/women/22.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Sarah Wijaya</h5>
                        <small class="text-primary">UI/UX Designer</small>

                        <p class="text-secondary small mt-3">
                            Mendesain antarmuka yang modern, sederhana, dan mudah digunakan pengguna.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/men/31.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Budi Santoso</h5>
                        <small class="text-primary">Backend Developer</small>

                        <p class="text-secondary small mt-3">
                            Berpengalaman membangun REST API dan sistem berbasis Laravel.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/women/45.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Nadia Putri</h5>
                        <small class="text-primary">Project Manager</small>

                        <p class="text-secondary small mt-3">
                            Mengelola timeline project dan memastikan kualitas pengembangan aplikasi.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/men/52.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Rizky Maulana</h5>
                        <small class="text-primary">Full Stack Developer</small>

                        <p class="text-secondary small mt-3">
                            Mengembangkan aplikasi web end-to-end menggunakan teknologi modern.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/women/61.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Jessica Tan</h5>
                        <small class="text-primary">Mobile Developer</small>

                        <p class="text-secondary small mt-3">
                            Mengembangkan aplikasi Android dan iOS menggunakan Flutter.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/men/74.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Fajar Hidayat</h5>
                        <small class="text-primary">DevOps Engineer</small>

                        <p class="text-secondary small mt-3">
                            Mengelola server cloud, deployment, dan keamanan infrastruktur.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

                <!-- MEMBER 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card team-card text-center border-0 shadow-sm p-4 h-100">

                        <img src="https://randomuser.me/api/portraits/women/81.jpg"
                            class="rounded-circle mx-auto team-img"
                            alt="Team">

                        <h5 class="mt-3 mb-1">Maya Lestari</h5>
                        <small class="text-primary">Digital Marketing</small>

                        <p class="text-secondary small mt-3">
                            Membantu meningkatkan brand awareness melalui strategi pemasaran digital.
                        </p>

                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-5 bg-white">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Contact <span class="text-primary">Us</span>
            </h2>
            <p class="text-secondary">
                Hubungi kami untuk konsultasi atau kerja sama project
            </p>
        </div>

        <div class="row g-4">

            <!-- CONTACT FORM -->
            <div class="col-lg-6">

                <div class="card border-0 shadow-sm p-4">

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subjek</label>
                            <input type="text" class="form-control" placeholder="Subjek pesan">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="5" placeholder="Tulis pesan..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

            <!-- CONTACT INFO -->
            <div class="col-lg-6">

                <div class="card border-0 shadow-sm p-4 h-100">

                    <h5 class="fw-bold mb-3">Info Kontak</h5>

                    <p class="text-secondary">
                        Silakan hubungi kami melalui informasi di bawah ini atau kirim pesan langsung.
                    </p>

                    <hr>

                    <p>
                        <i class="bi bi-geo-alt text-primary"></i>
                        Cianjur, Jawa Barat, Indonesia
                    </p>

                    <p>
                        <i class="bi bi-telephone text-primary"></i>
                        +62 812 3456 7890
                    </p>

                    <p>
                        <i class="bi bi-envelope text-primary"></i>
                        info@skysoft.com
                    </p>

                    <p>
                        <i class="bi bi-clock text-primary"></i>
                        Senin - Jumat (08:00 - 17:00)
                    </p>

                    <!-- SOCIAL -->
                    <div class="d-flex gap-3 mt-3">

                        <a href="#" class="text-dark fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark fs-5"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-dark fs-5"><i class="bi bi-whatsapp"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection