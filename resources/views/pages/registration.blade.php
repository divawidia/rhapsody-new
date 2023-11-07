@extends('layouts.app')

@section('title')
    House Keeping | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Registrasi Online</h1>
                <p class="breadcumb-text">Calon Mahasiswa LPK Rhapsody Hospitality Development Center</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Registrasi Online</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="form-style4 login" data-bg-src="assets/img/bg/course-bg-pattern.jpg">
                        <h2 class="form-title">LOG IN</h2>
                        <div class="form-group">
                            <input type="text" autocomplete="off" name="email" id="email" placeholder="Username or email address">
                        </div>
                        <div class="form-group">
                            <input type="text" autocomplete="off" name="email" id="password" placeholder="Password">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto form-group">
                                <input type="checkbox" name="rememberlogin" id="rememberlogin">
                                <label for="rememberlogin">Remember me</label>
                            </div>
                            <div class="col-auto form-group">
                                <a class="forget-link" href="#">FORGET A PASSWORD?</a>
                            </div>
                        </div>
                        <button type="submit" class="vs-btn">Login</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-style4 signup" data-bg-src="assets/img/bg/course-bg-pattern.jpg">
                        <h2 class="form-title">SIGN UP</h2>
                        <div class="form-group">
                            <input type="text" autocomplete="off" name="signupname" id="signupname" placeholder="Complete Name">
                        </div>
                        <div class="form-group">
                            <input type="text" autocomplete="off" name="signupemail" id="signupemail" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <input type="text" autocomplete="off" name="signupphone" id="signupphone" placeholder="Password">
                        </div>
                        <button type="button" class="vs-btn">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
