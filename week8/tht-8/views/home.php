<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pertemuan 3</title>
  <!-- <base href="http://localhost:8080/praktikum-web/BlogWeb/public/"> -->
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/72192a27df.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <a href="" class="logo">
      <img src="resources/pictures/logo_turu-ae_light_big_logo.png" alt="" />
      <img src="resources/pictures/logo_turu-ae_light_font.png" alt="" />
    </a>
    <input type="checkbox" name="menu" id="menu" hidden />
    <div class="r-nav">
      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-solid fa-moon"></i>
      <label for="menu"><i class="fa-solid fa-bars"></i></label>
    </div>
    <nav class="col-12">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Tutorial</a></li>
        <li class="li-login">
          <a href="" class="btn btn-login">Login <i class="fa-solid fa-right-to-bracket"></i></a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="cover cover-latar">
      <img src="resources/pictures/hero2.svg" alt="" class="hero" />
      <div class="latar">
        <h1>Belajar <span>HTML5</span> dengan santai nggak sii ?!...</h1>
        <p>
          Layaknya seorang seniman yang menggambarkan imaginasinya di setiap
          goresan, maka programmer menggambarkan algoritmanya di setiap baris
          kodingan... Bacott!!!
        </p>
        <button class="btn">Gas Belajar!</button>
        <button class="btn join-btn">Join komunitas?!</button>
      </div>
    </section>
    <section class="cover cover-content">
      <div class="content col-12">
        <div class="kategori">
          <h4><span>Kategori</span></h4>
          <h2>Mau belajar apa nih?</h2>
          <p>
            Nggak usah bingung belajar apa yang penting mau belajar dulu, dah
            bagus ituu...
          </p>
          <div class="categories">
            <div class="card daspro">
              <i class="fa-solid fa-globe"></i>
              <h4>Dasar pemrograman</h4>
              <p>
                Pada kelas ini lo akan belajar hal mendasar dalam pemrograman
                dan menyiapkan lingkungan yang nyaman sebelum mulai menulis
                kode.
              </p>
            </div>
            <div class="card asd">
              <i class="fa-solid fa-globe"></i>
              <h4>Dasar pemrograman</h4>
              <p>
                Pada kelas ini lo akan belajar hal mendasar dalam pemrograman
                dan menyiapkan lingkungan yang nyaman sebelum mulai menulis
                kode.
              </p>
            </div>
            <div class="card tutor-lain">
              <i class="fa-solid fa-globe"></i>
              <h4>Dasar pemrograman</h4>
              <p>
                Pada kelas ini lo akan belajar hal mendasar dalam pemrograman
                dan menyiapkan lingkungan yang nyaman sebelum mulai menulis
                kode.
              </p>
            </div>
          </div>
        </div>
        <div class="update">
          <h4><span>Update</span></h4>
          <h2>Ada tulisan baru nih, gas baca yok!</h2>
          <p>Artikel terbaru yang lagi banyak dicari.</p>
          <div class="artikel-1">
            <img src="resources/pictures/kategori1.jpg" alt="" />
            <h4>Judul artikel</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
              cumque sed distinctio, eligendi odit doloremque iure architecto!
              Excepturi, nisi neque?.
            </p>
          </div>
          <div class="artikel-1">
            <img src="resources/pictures/kategori2.jpg" alt="" />
            <h4>Judul artikel</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
              cumque sed distinctio, eligendi odit doloremque iure architecto!
              Excepturi, nisi neque?.
            </p>
          </div>
          <div class="artikel-1">
            <img src="resources/pictures/kategori3.jpg" alt="" />
            <h4>Judul artikel</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
              cumque sed distinctio, eligendi odit doloremque iure architecto!
              Excepturi, nisi neque?.
            </p>
          </div>
          <div class="artikel-1">
            <img src="resources/pictures/kategori4.jpg" alt="" />
            <h4>Judul artikel</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
              cumque sed distinctio, eligendi odit doloremque iure architecto!
              Excepturi, nisi neque?.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="cover cover-subscribe">
      <div class="subscribe">
        <h4><span>Ramein yukk!!!</span></h4>
        <h2>Biar gak ketinggalan update bro...</h2>
        <p>
          Gas subscribe sekarang biar gak ketinggalan info kalau ada update
          terbaru. Subscribe biar kalau ada pembaruan aku bisa ngirim ke email
          kalian!
        </p>
        <button class="btn">Subscribe</button>
      </div>
    </section>
  </main>
  <footer>
    <section class="cover cover-footer">
      <div class="info">
        <img src="resources/pictures/logo_light.png" width="250" alt="logo" />
        <p>
          Tempat belajar <span>web development</span> dengan silabus yang
          singkat, terurut, dan mudah dipahami.
        </p>
      </div>
      <div class="tutorNav">
        <h3>Tutorial</h3>
        <ul>
          <li>
            <a href="">
              <p>Daspro</p>
            </a>
          </li>
          <li>
            <a href="">
              <p>ASD</p>
            </a>
          </li>
          <li>
            <a href="">
              <p>PBO</p>
            </a>
          </li>
        </ul>
      </div>
      <!-- <div class="tutorPop">
        <h3>Popular artikel kategori</h3>
        <ul>
          <li><a href="">Daspro</a></li>
          <li><a href="">ASD</a></li>
          <li><a href="">PBO</a></li>
        </ul>
      </div>
      <div class="sosmed">
        <h3>Social Media</h3>
        <ul>
          <li><a href="">Instagram</a></li>
          <li><a href="">Twitter</a></li>
          <li><a href="">Youtube Channel</a></li>
          <li><a href="">Telegram Channel</a></li>
          <li><a href="">Discord Channel</a></li>
        </ul>
      </div> -->
    </section>
    <h4>Contact Me On:</h4>
    <div class="contact">
      <a href=""><i class="fa-brands fa-instagram"></i></a>
      <a href=""><i class="fa-brands fa-x-twitter"></i></a>
      <a href=""><i class="fa-brands fa-github"></i></a>
      <a href=""><i class="fa-brands fa-youtube"></i></a>
      <a href=""><i class="fa-brands fa-telegram"></i></a>
      <a href=""><i class="fa-brands fa-discord"></i></a>
    </div>
    <section class="copyright">
      <p>&copy; 2023<strong>Arroziqi</strong></p>
    </section>
  </footer>
</body>

</html>