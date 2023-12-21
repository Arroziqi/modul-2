@extends('layout.app')

@section('content')
    <section class="cover cover-latar">
        <div class="hero">
            <div class="latar">
                <h1>Belajar <span>HTML5</span> dengan santai nggak sii ?!...</h1>
                <p>Layaknya seorang seniman yang menggambarkan imaginasinya di setiap goresan, maka programmer
                    menggambarkan algoritmanya di setiap baris kodingan... Bacott!!!</p>
                <a href="" class="btn">Gas Belajar!</a>
                <a href="/posts" class="btn join-btn">Buat Postingan?!</a>
            </div>
            <img src="/img/hero2.svg" alt="" class="hero">

        </div>
    </section>
    <section class="cover cover-content">
        <div class="content col-12">
            <div class="kategori">
                <h4><span>Kategori</span></h4>
                <h2>Mau belajar apa nih?</h2>
                <p>Nggak usah bingung belajar apa yang penting mau belajar dulu, dah bagus ituu...</p>
                <div class="categories">
                    <div class="card daspro">
                        <i class="fa-solid fa-globe"></i>
                        <h4>Dasar pemrograman</h4>
                        <p>Pada kelas ini lo akan belajar hal mendasar dalam pemrograman dan menyiapkan lingkungan
                            yang nyaman sebelum mulai menulis kode.</p>
                    </div>
                    <div class="card asd">
                        <i class="fa-solid fa-globe"></i>
                        <h4>Dasar pemrograman</h4>
                        <p>Pada kelas ini lo akan belajar hal mendasar dalam pemrograman dan menyiapkan lingkungan
                            yang nyaman sebelum mulai menulis kode.</p>
                    </div>
                    <div class="card tutor-lain">
                        <i class="fa-solid fa-globe"></i>
                        <h4>Dasar pemrograman</h4>
                        <p>Pada kelas ini lo akan belajar hal mendasar dalam pemrograman dan menyiapkan lingkungan
                            yang nyaman sebelum mulai menulis kode.</p>
                    </div>
                </div>
            </div>
            <div class="update">
                <h4><span>Update</span></h4>
                <h2>Ada tulisan baru nih, gas baca yok!</h2>
                <p>Artikel terbaru yang lagi banyak dicari.</p>
                <div class="articles">
                    <div class="artikel">
                        <img src="/img/kategori1.jpg" alt="">
                        <h4>Judul artikel</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque sed distinctio,
                            eligendi odit doloremque iure architecto! Excepturi, nisi neque?.</p>
                    </div>
                    <div class="artikel">
                        <img src="/img/kategori2.jpg" alt="">
                        <h4>Judul artikel</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque sed distinctio,
                            eligendi odit doloremque iure architecto! Excepturi, nisi neque?.</p>
                    </div>
                    <div class="artikel">
                        <img src="/img/kategori3.jpg" alt="">
                        <h4>Judul artikel</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque sed distinctio,
                            eligendi odit doloremque iure architecto! Excepturi, nisi neque?.</p>
                    </div>
                    <div class="artikel">
                        <img src="/img/kategori4.jpg" alt="">
                        <h4>Judul artikel</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque cumque sed distinctio,
                            eligendi odit doloremque iure architecto! Excepturi, nisi neque?.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cover cover-subscribe">
        <div class="subscribe">
            <h4><span>Ramein yukk!!!</span></h4>
            <h2>Biar gak ketinggalan update bro...</h2>
            <p>Gas subscribe sekarang biar gak ketinggalan info kalau ada update terbaru. Subscribe biar kalau ada
                pembaruan aku bisa ngirim ke email kalian!</p>
            <button class="btn">Subscribe</button>
        </div>
    </section>
@endsection
