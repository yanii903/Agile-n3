@extends('client.layout.default')

@section('content')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Register</h2>
                            <span> <a href="index.html">Home</a> - Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register -->
    <section class="section-register padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Register</h2>
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
                    <div class="cr-register" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <img src="{{ asset('assets/client/img/logo/logo.png') }}" alt="logo">
                        </div>
                        <form class="cr-content-form" method="POST" action="{{ route('client.user.registerForm') }}">
                            @csrf <!-- Thêm token CSRF bảo mật -->
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" placeholder="Enter Your First Name" class="cr-form-control">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="Enter Your email" class="cr-form-control">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address*</label>
                                        <input type="text" name="address" placeholder="Address" class="cr-form-control">
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Phone Number*</label>
                                        <input type="text" name="phone_number" placeholder="Enter Your phone number" class="cr-form-control">
                                        @error('phone_number')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Password*</label>
                                        <input type="password" name="password" placeholder="Enter Your Password" class="cr-form-control">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password*</label>
                                        <input type="password" name="password_confirmation" placeholder="Enter Your Confirm Password" class="cr-form-control">
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div> <!-- Hiển thị lỗi nếu có -->
                                        @enderror
                                    </div>
                                </div>

                                <div class="cr-register-buttons">
                                    <button type="submit" class="cr-button">Signup</button>
                                    <a href="{{ route('client.user.login') }}" class="link">Have an account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
