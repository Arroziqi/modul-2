@extends('layout.main')

@section('css')
    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/template.css" rel="stylesheet">
@endsection


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Let's find new experience with <strong>TranSync</strong></h1>
                    <h2>TranSync is a major's project of Pemrograman Web and made by Ozi's team</h2>
                    <div>
                        <a href="/signIn" class="btn-get-started scrollto">Sign in</a>
                        <a href="/signUp" class="btn-get-started scrollto-dua">Sign up</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Team Section ======= -->
        <div class="section-title p-0">
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Developer TranSync terdiri dari mahasiswa Universitas Pertamina dengan latar belakang
                            keahlian yang berbeda dalam setiap aspek yang saling mendukung dan dibimbing oleh dosen
                            ahli sehingga menghasilkan sebuah website yang inovatif dan bermanfaat</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Ahmad Arroziqi</h4>
                                    <span>105221012</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href=""><i class="bi-twitter"></i></a>
                                        <a href=""><i class="bi-facebook"></i></a>
                                        <a href=""><i class="bi-instagram"></i></a>
                                        <a href=""> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Geovanni Rikal Bunga</h4>
                                    <span>10521014</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href="https://twitter.com/?lang=id"><i class="bi-twitter"></i></a>
                                        <a href="https://www.facebook.com"><i class="bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/gevanrikal_/"><i class="bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/gevanrikal/"> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Aom Rizky Wiratanu</h4>
                                    <span>105221010</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href=""><i class="bi-twitter"></i></a>
                                        <a href=""><i class="bi-facebook"></i></a>
                                        <a href=""><i class="bi-instagram"></i></a>
                                        <a href=""> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Reyner Wilson Lumbanraja</h4>
                                    <span>105221039</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href=""><i class="bi-twitter"></i></a>
                                        <a href=""><i class="bi-facebook"></i></a>
                                        <a href=""><i class="bi-instagram"></i></a>
                                        <a href=""> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="500">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Baiquni Krisna Adyarta</h4>
                                    <span>105221037</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href=""><i class="bi-twitter"></i></a>
                                        <a href=""><i class="bi-facebook"></i></a>
                                        <a href=""><i class="bi-instagram"></i></a>
                                        <a href=""> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="550">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="/img/team/team-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info" style="text-align: left;">
                                    <h4>Viranda Rahmatya Azzahroh</h4>
                                    <span>105221008</span>
                                    <p>Mahasiswa prodi Ilmu Komputer yang bertanggung jawab dalam pembuatan website
                                        TranSync</p>
                                    <div class="social">
                                        <a href=""><i class="bi-twitter"></i></a>
                                        <a href=""><i class="bi-facebook"></i></a>
                                        <a href=""><i class="bi-instagram"></i></a>
                                        <a href=""> <i class="bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->
        </div><!-- End team item -->



        <!-- ======= Contact Section ======= -->
        @include('section.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
@endsection

@section('js')
    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/template.js"></script>
@endsection
