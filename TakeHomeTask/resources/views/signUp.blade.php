@extends('layout.main-2')

@section('css')
    <link rel="stylesheet" href="/css/signup.css">
@endsection


@section('content')
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #F0AA50;">
                <div class="featured-image mb-3">
                    <img src="/img/ss.png" class="img-fluid" style="width: 500px;">
                </div>
                <small class="text-white text-wrap text-center"
                    style="width: 25rem;font-family: 'Courier New', Courier, monospace; color: black;">TranSync is a major's
                    project of Pemrograman Web and made by Ozi's team</small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Welcome to <strong>TranSync</strong></h2>
                        <p>Let us help you to regist an account</p>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Full name">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Address">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Re-enter password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>I agree with all terms &
                                    conditions</small></label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6"
                            style="background-color: #F0AA50; border-color: rgb(255, 255, 255);">Sign up</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="/img/Uper PNG.png" style="width:20px"
                                class="me-2"><small>Sign in with SSO Pertamina
                                University</small></button>
                    </div>
                    <div class="row" <small> Already have an account? <a href="/signIn" style="color: #F0AA50;">Sign
                            In</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
