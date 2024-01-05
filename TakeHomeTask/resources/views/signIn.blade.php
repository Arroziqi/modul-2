@extends('layout.main-2')

@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection


@section('content')
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #B3E0F0;">
                <div class="featured-image mb-3">
                    <img src="/img/logo.png" class="img-fluid" style="width: 500px;">
                </div>
                <small class="text-white text-wrap text-center"
                    style="width: 25rem;font-family: 'Courier New', Courier, monospace;">TranSync is a major's project of
                    Pemrograman Web and made by Ozi's team</small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Welcome to <strong>TranSync</strong></h2>
                        <p>Please login first or register if you don't have any account</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                    Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#" style="color: #B3E0F0;">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6"
                            style="background-color: #B3E0F0; border-color: rgb(255, 255, 255);">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="/img/Uper PNG.png" style="width:20px"
                                class="me-2"><small>Sign in with SSO Pertamina
                                University</small></button>
                    </div>
                    <div class="row" <small> Don't have account? <a href="/signUp" style="color: #B3E0F0;">Sign
                            Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
