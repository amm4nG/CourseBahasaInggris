<?php
$kelas = $_POST['kelas'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>English8Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Logo_E8U_3.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- =======================================================
  * Template Name: ZenBlog - v1.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.bg-body {
    background-color: #ffffff;
    background-image: linear-gradient(45deg, #ffffff 0%, #fce5c3 25%, #ffffff 100%);
}

.back {
    background-color: rgb(255, 243, 239);
}

.bg-navbar {
    background-color: rgb(255, 114, 62);
}
</style>

<body class="back">

    <!-- ======= Header ======= -->
    <header id="header" class="header bg-white d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
 
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <!-- <h1 class="" style="color: orangered;">English8Up</h1> -->
                <img src="assets/img/Logo_E8U_3.png" width="75" height="70" alt=""> 

            <nav id="navbar" class="navbar ms-auto">
                <ul>
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="single-post.html" class="nav-link">Programs</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <!-- <a href="#" class="mx-2"><span class="bi-facebook"></span></a> -->
                <!-- <a href="#" class="mx-2"><span class="bi-twitter"></span></a> -->
                <!-- <a href="#" class="mx-2"><span class="bi-instagram"></span></a> -->

                <a href="#" class="mx-2 js-search-open"></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->

    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-4 shadow-lg back">
                            <p class="fs-3 fw-bold" style="color: rgba(255, 68, 0, 0.521);">Paket Reguler
                            </p>
                            <?php 
                            if($kelas == 'English for kids (3 - 6 Years Old)'){ ?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 1 Bulan</p>
                                            <p>Rp. 198.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Kids (3 - 6 Years Old) - Paket Reguler 1 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 535.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Kids (3 - 6 Years Old) - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.069.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Kids (3 - 6 Years Old) - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 2.138.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Kids (3 - 6 Years Old) - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'English for student (7 - 10 Years Old)'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 1 Bulan</p>
                                            <p>Rp. 230.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Student (7 - 10 Years Old) - Paket Reguler 1 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 621.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Student (7 - 10 Years Old) - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.242.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Student (7 - 10 Years Old) - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 2.484.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Student (7 - 10 Years Old) - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'English for Teens (11 - 16 Years Old)'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 1 Bulan</p>
                                            <p>Rp. 250.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Teens (11 - 16 Years Old) - Paket Reguler 1 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 675.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Teens (11 - 16 Years Old) - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.350.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Teens (11 - 16 Years Old) - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 2.680.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Teens (11 - 16 Years Old) - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            }elseif($kelas == 'Englih for Adults Beginner'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 1 Bulan</p>
                                            <p>Rp. 280.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Adults Beginner - Paket Reguler 1 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 756.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Adults Beginner - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.512.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Adults Beginner - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 3.024.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Adults Beginner - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            }elseif($kelas == 'Englih for Intermediate'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 1 Bulan</p>
                                            <p>Rp. 320.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Intermediate - Paket Reguler 1 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 864.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Intermediate - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.728.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Intermediate - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 3.456.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Intermediate - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            }elseif($kelas == 'English for Business'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 3 Bulan</p>
                                            <p>Rp. 945.000</p>

                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Bussiness - Paket Reguler 3 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 6 Bulan</p>
                                            <p>Rp. 1.890.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Bussiness - Paket Reguler 6 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket 12 Bulan</p>
                                            <p>Rp. 3.780.000</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Bussiness - Paket Reguler 12 Bulan. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <p class="fs-3 fw-bold mt-3" style="color: rgba(255, 68, 0, 0.521);">Paket Private
                            </p>
                            <?php
                            if($kelas == 'English for kids (3 - 6 Years Old)'){ ?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 49.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Kids (3 - 6 Years Old) - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'English for student (7 - 10 Years Old)'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 57.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Student (7 - 10 Years Old) - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'English for Teens (11 - 16 Years Old)'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 60.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Teens (11 - 16 Years Old) - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'Englih for Adults Beginner'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 70.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Adults Beginner - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'Englih for Intermediate'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 80.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Intermediate - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }elseif($kelas == 'English for Business'){?>
                            <div class="row">
                                <div class="col-md-3 mb-3 mt-3 text-center">
                                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <p class="card-text">Paket Private</p>
                                            <p>Rp. 99.000/Jam</p>
                                            <a href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus English For Bussiness - Paket Private. Mohon info lebih lanjut ya."
                                                class="btn text-center text-white shadow-sm"
                                                style="width: 12rem; background-color: rgba(255, 68, 0, 0.521);">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <p id="contact"></p>
    <footer id="footer" class="footer bg-white" style="margin-top: 4rem; color: orangered;">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-12">
                        <h1 class="mb-5 fw-bold">Contact Us</h1>
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="info-item info-item-borders">
                                    <h5> <i class="bi bi-geo-alt"></i>
                                        Address</h5>
                                    <p><a class="nav-link" href="https://maps.app.goo.gl/i4GHTVvx2jK5dhmP6">Perum
                                            Mustika Park
                                            Place Cluster Navarra
                                            Blok D4/18
                                        </a></p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="info-item info-item-borders">
                                    <h5><i class="bi bi-whatsapp"></i> Whatsapp</h5>
                                    <p><a class="nav-link"
                                            href="https://api.whatsapp.com/send?phone=6281218947318&text=Halo Admin English8Up, saya tertarik untuk daftar Kursus di English 8 up. Mohon info lebih lanjut ya.">+6281218947318</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="info-item">
                                    <h5><i class="bi bi-envelope"></i> Email</h5>
                                    <p><a class="nav-link" href="mailto:englishup8@gmail.com">englishup8@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal bg-body">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>English8Up</span></strong>. All Rights Reserved
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="https://youtube.com/@english8up" class="youtube"><i class="bi bi-youtube"
                                    style="color: orangered;"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100090011373537&mibextid=ZbWKwL"
                                class="facebook"><i class="bi bi-facebook" style="color: orangered;"></i></a>
                            <a href="https://instagram.com/english8_up?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                    class="bi bi-instagram" style="color: orangered;"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

    <a href="#" style="background-color: rgba(255, 68, 0, 0.521);"
        class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>