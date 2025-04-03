
@extends('admin.layout.master')

@section('content')
{{-- <div class="cr-main-content"> --}}
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>Sửa tài khoản</h5>
                <ul>
                    <li><a href="{{ route('admin.users.index') }}">Trang chủ</a></li>
                    <li>Sửa tài khoản</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cr-card card-default">
                    <div class="cr-card-content">
                            {{-- Nhận thông báo thêm thành công  --}}
                            {{-- @if (session('success'))
                                <x-alert type="success">
                                    {{ session('success') }}
                                </x-alert>
                            @endif --}}
                            <div class="col-lg-12">
                                    {{-- Form sửa tài khoản   --}}
                                    <form method="POST" action="{{ route('admin.users.update',[$user->id]) }}" class="row g-3">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Tên tài khoản</label>
                                            <input type="text" value="{{ $user->name }}" name="name" class="form-control slug-title">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="text" value="{{ $user->email }}" name="email" class="form-control slug-title">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Mật khẩu mới</label>
                                            <input type="password" name="password" class="form-control slug-title">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" value="{{ $user->phone }}" class="form-label">Số điện thoại</label>
                                            <input type="text" value="{{ $user->phone }}" name="phone" class="form-control slug-title">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" value="{{ $user->address }}" class="form-label">Địa chỉ</label>
                                            <input type="text" value="{{ $user->address }}" name="address" class="form-control slug-title">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Chức vụ</label>
                                            <select name="role" class="form-control form-select">
                                                <option @selected( $user->role == 'admin' ) value="admin">Admin</option>
                                                <option @selected( $user->role == 'customer' ) value="customer">Customer</option>                                                
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