<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak</h2>
            <p>Jangan sungkan untuk segera hubungi kami jika Anda menemukan permasalahan pada website kami atau Anda
                hendak mengirimkan pertanyaan.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>Kota Jakarta Selatan, Daerah Khusus
                        Ibukota Jakarta 12220</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Kami</h3>
                    <p>transync@gamil.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Hubungi Kami</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.066075282142!2d106.7889774!3d-6.2285507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f13094c83677%3A0x1f4300031365732b!2sUniversitas%20Pertamina!5e0!3m2!1sid!2sid!4v1704393949629!5m2!1sid!2sid"
                    frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="/send-email" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nama lengkap" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Alamat email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Pesan kamu telah terkirim. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
