{{-- filepath: d:\laragon\www\Agile-n3\resources\views\admin\products\edit.blade.php --}}
@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <div class="cr-page-title cr-page-title-2">
        <div class="cr-breadcrumb">
            <h5>Edit Product</h5>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="{{ route('admin.products.index') }}">Product List</a></li>
                <li>Edit Product</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="cr-card card-default">
                <div class="cr-card-content">
                    <div class="row cr-product-uploads">
                        <form class="d-flex gap-3" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PUT')
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
                                                    @if ($product->image)
                                                        <img class="cr-image-preview"
                                                            src="{{ asset('storage/' . $product->image) }}"
                                                            alt="{{ $product->name }}">
                                                    @else
                                                        <img class="cr-image-preview"
                                                            src="{{ asset('assets/admin/img/product/preview.jpg') }}"
                                                            alt="edit">
                                                    @endif
                                                </div>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                                name="name" value="{{ $product->name }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Select Categories</label>
                                            <select class="form-control form-select" name="category_id">
                                                @foreach ($categories as $value)
                                                    <option value="{{ $value->id }}"
                                                        {{ $product->category_id == $value->id ? 'selected' : '' }}>
                                                        {{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Price <span>( In USD )</span></label>
                                            <input type="number" class="form-control" id="price1" name="price" value="{{ $product->price }}" step="0.01">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Stock</label>
                                            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                                            @error('stock')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description">{{ $product->description }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Update Product</button>
                                            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
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

@endsection