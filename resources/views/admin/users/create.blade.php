
@extends('admin.layout.master')

@section('content')
{{-- <div class="cr-main-content"> --}}
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>Thêm tài khoản</h5>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li>Thêm tài khoản</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cr-card card-default">
                    <div class="cr-card-content">
                            <div class="col-lg-12">
                                {{-- <div class="cr-vendor-upload-detail"> --}}
                                    <form method="POST" action="{{ route('admin.users.store') }}" class="row g-3">
                                        @csrf

                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Tên tài khoản</label>
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control slug-title">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="text" value="{{ old('email') }}" name="email" class="form-control slug-title">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control slug-title">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Số điện thoại</label>
                                            <input type="text" value="{{ old('phone') }}" name="phone" class="form-control slug-title">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Địa chỉ</label>
                                            <input type="text" value="{{ old('address') }}" name="address" class="form-control slug-title">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Chức vụ</label>
                                            <select name="role" class="form-control form-select">
                                                <option @selected(old('role') == "admin" ) value="admin">Admin</option>
                                                <option @selected(old('role') == "customer" ) value="customer">Customer</option>                                                
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn cr-btn-primary">Submit</button>
                                        </div>
                                    </form>
                                {{-- </div> --}}
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection