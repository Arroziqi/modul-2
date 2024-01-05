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
                <div
                    class="col-xl-8 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center border">
                    <div class="row px-4 gap-4">
                        <div
                            class="link-primary link col-2 p-3 text-capitalize border-bottom border-3 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fs-2 me-3 fa-route"></i>
                            <p class="text-wrap m-0">rencana perjalanan</p>
                        </div>
                        <div
                            class="link-primary link col-2 p-3 text-capitalize border-bottom border-3 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fs-2 me-3 fa-map-location-dot"></i>
                            <p class="text-wrap m-0">info rute</p>
                        </div>
                        <div
                            class="link-primary link col-2 p-3 text-capitalize border-bottom border-3 d-flex align-items-center justify-content-center">
                            <i class="fa-regular fs-2 me-3 fa-clock"></i>
                            <p class="text-wrap m-0">jadwal</p>
                        </div>
                        <div
                            class="link-primary link col-2 p-3 text-capitalize border-bottom border-3 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fs-2 me-3 fa-credit-card"></i>
                            <p class="text-wrap m-0">info pembayaran</p>
                        </div>
                    </div>
                    <form id="form-rute" action="" class="row justify-content-center align-items-end py-5">
                        <div class="col-3 d-flex flex-column gap-2">
                            <h6><span>Dari :</span></h6>
                            <div class="">
                                <select class="w-75" name="" id="">
                                    <option value="">Statsiun fatmawati</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-column gap-2">
                            <h6><span>Ke :</span></h6>
                            <div class="">
                                <select class="w-75" name="" id="">
                                    <option value="">Statsiun fatmawati</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-column gap-2">
                            <h6><span>Waktu Berangkat :</span></h6>
                            <div class="">
                                <input type="datetime-local" name="" id="">
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column gap-2">
                            <input class="btn btn-primary p-2 fs-5" type="submit" value="Cari rute">
                        </div>
                    </form>
                    <div id="hasil-rute" class="row justify-content-center"></div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Stasiun MRT</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Stasiun LRT</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="105" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Stasiun KAI Commuter</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="287" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Halte Transjakarta</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Armada</h2>
                    <p>Transync terintegrasi dengan berbagai armada transportasi umum, meliputi MRT, LRT, KAI, dan
                        Transjakarta</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <i
                                    style="background: url('https://www.jaklingkoindonesia.co.id/theme/jaklingkoindonesia/images/angkutan_mrt.png') no-repeat fixed center; background-size: cover; width: 100px; height: 100px;">
                                </i>
                            </div>
                            <h4><a href="">MRT</a></h4>
                            <p>Moda Raya Terpadu Jakarta adalah sistem transportasi rel angkutan cepat di Jakarta</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <i
                                    style="background: url('https://www.jaklingkoindonesia.co.id/theme/jaklingkoindonesia/images/angkutan_lrt.png') no-repeat fixed center; background-size: cover; width: 100px; height: 100px;">
                                </i>
                            </div>
                            <h4><a href="">LRT</a></h4>
                            <p>Lintas Raya Terpadu Jakarta adalah sistem lintas rel terpadu yang beroperasi di DKI Jakarta
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <i
                                    style="background: url('https://www.jaklingkoindonesia.co.id/theme/jaklingkoindonesia/images/angkutan_kaicommuter.png') no-repeat fixed center; background-size: cover; width: 100px; height: 100px;">
                                </i>
                            </div>
                            <h4><a href="">KAI Commuter</a></h4>
                            <p>KRL Commuter Line adalah sistem transportasi angkutan cepat komuter berbasis Kereta Rel
                                Listrik.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <i
                                    style="background: url('https://www.jaklingkoindonesia.co.id/theme/jaklingkoindonesia/images/angkutan_tj.png') no-repeat fixed center; background-size: cover; width: 100px; height: 100px;">
                                </i>
                            </div>
                            <h4><a href="">Transjakarta</a></h4>
                            <p>Transjakarta adalah sistem transportasi Bus Rapid Transit pertama di Asia Tenggara dan
                                Selatan.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg bg-white">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Info Terkini</h2>
                    <p></p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="slide-item">
                                <a href="https://jakartamrt.co.id/id/info-terkini/124163-orang-tercatat-gunakan-ratangga-pada-hari-terakhir-2023"
                                    target="blank" class="card">
                                    <div class="card-img"
                                        style="background: url('/img/berita/berita1.jpeg') no-repeat fixed center"></div>
                                    <h3>124.163 Orang Tercatat Gunakan Ratangga pada Hari Terakhir 2023</h3>
                                    <h4>02 Jan 2024</h4>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="slide-item">
                                <a href="https://jakartamrt.co.id/id/info-terkini/perubahan-jadwal-operasional-mrt-jakarta-saat-malam-tahun-baru-2024"
                                    target="blank" class="card">
                                    <div class="card-img"
                                        style="background: url('/img/berita/berita2.jpeg') no-repeat fixed center"></div>
                                    <h3>Perubahan Jadwal Operasional MRT Jakarta Saat Malam Tahun Baru 2024</h3>
                                    <h4>02 Jan 2024</h4>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="slide-item">
                                <a href="https://jakartamrt.co.id/id/info-terkini/mrt-jakarta-kembali-selenggarakan-pelatihan-service-excellence-academy"
                                    target="blank" class="card">
                                    <div class="card-img"
                                        style="background: url('/img/berita/berita3.jpeg') no-repeat fixed center"></div>
                                    <h3>MRT Jakarta Kembali Selenggarakan Pelatihan Service Excellence Academy</h3>
                                    <h4>02 Jan 2024</h4>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="slide-item">
                                <a href="https://commuterline.id/informasi-publik/berita/tembus-230-ribu-orang-stasiun-manggarai-menjadi-stasiun-transit-teramai"
                                    target="blank" class="card">
                                    <div class="card-img"
                                        style="background: url('/img/berita/berita4.jpeg') no-repeat fixed center"></div>
                                    <h3>Tembus 230 Ribu Orang, Stasiun Manggarai Menjadi Stasiun Transit Teramai</h3>
                                    <h4>02 Jan 2024</h4>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination mt-5"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        {{--
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                    curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                    non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                    turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                    tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                    molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam
                                sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                    ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                    adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                                vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section --> --}}

        @include('section.contact')

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
