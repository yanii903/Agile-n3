@extends('admin.layout.master')

@section('content')
    <!-- Page title & breadcrumb -->
    <div class="cr-page-title cr-page-title-2">
        <div class="cr-breadcrumb">
            <h5>Add Product</h5>
            <ul>
                <li><a href="index.html">Carrot</a></li>
                <li>Add Product</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cr-card card-default">
                <div class="cr-card-content">
                    <div class="row cr-product-uploads">
                        <form class="d-flex gap-3" action="{{ route('admin.products.store') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="col-lg-4 mb-991">
                                <div class="cr-vendor-img-upload">
                                    <div class="cr-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="product_main" class="cr-image-upload"
                                                    accept=".png, .jpg, .jpeg" name="image">
                                                <label><i class="ri-pencil-line"></i></label>
                                            </div>
                                            <div class="avatar-preview cr-preview">
                                                <div class="imagePreview cr-div-preview">
                                                    <img class="cr-image-preview"
                                                        src="{{ asset('assets/admin/img/product/preview.jpg') }}"
                                                        alt="edit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="cr-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Product name</label>
                                            <input type="text" class="form-control slug-title" id="inputEmail4"
                                                name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Select Categories</label>
                                            <select class="form-control form-select" name="category_id">
                                                @foreach ($category as $value)
                                                    <option value="{{ $value->id }}"
                                                        {{ old('category_id') == $value->id ? 'selected' : '' }}>
                                                        {{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Price <span>( In USD )</span></label>
                                            <input type="number" class="form-control" id="price1" name="price"
                                                value="{{ old('price') }}">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Stock</label>
                                            <input type="number" class="form-control" id="quantity1" name="stock"
                                                value="{{ old('stock') }}">
                                            @error('stock')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn cr-btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
