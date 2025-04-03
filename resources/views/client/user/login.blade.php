@extends('client.layout.default')

@section('content')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Login</h2>
                            <span> <a href="index.html">Home</a> - Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login -->
    <section class="section-login padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Login</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cr-login" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img src="{{ asset('assets/client/img/logo/logo.png') }}" alt="logo">
                        </div>

                        <form class="cr-content-form" action="{{ route('client.user.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="cr-form-control"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password*</label>
                                <input type="password" name="password" placeholder="Enter Your Password"
                                    class="cr-form-control">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="remember">
                                <span class="form-group custom">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">Remember Me</label>
                                </span>
                                <a class="link" href="">Forgot Password?</a>
                            </div><br>

                            <div class="login-buttons">
                                <button type="submit" class="cr-button">Login</button>
                                <a href="" class="link">Signup?</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
