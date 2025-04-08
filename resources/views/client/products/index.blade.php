@extends('client.layout.default')

@section('content')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Shop</h2>
                            <span> <a href="index.html">Home</a> - Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop -->
    <section class="section-shop padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Categories</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="row">
                        <div class="col-12">
                            <div class="cr-shop-bredekamp">
                                <div class="cr-toggle">
                                    <a href="javascript:void(0)" class="gridCol active-grid">
                                        <i class="ri-grid-line"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gridRow">
                                        <i class="ri-list-check-2"></i>
                                    </a>
                                </div>
                                <div class="center-content">
                                    <span>We found 29 items for you!</span>
                                </div>
                                <div class="cr-select">
                                    <label>Sort By :</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Featured</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-50 mb-minus-24">
                        @foreach ($products as $product)
                            <div class="col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                alt="product-{{ $product->id }}">
                                        </div>
                                        <div class="cr-side-view">
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                                role="button" data-id="{{ $product->id }}">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a
                                                href="shop-left-sidebar.html">{{ $product->category->name ?? 'Không có danh mục' }}</a>
                                        </div>
                                        <a href="{{ route('client.user.products.detail', ['id' => $product->id]) }}" class="title">{{ $product->name }}</a>
                                        <p class="text">{{ $product->description }}</p>
                                        <p class="cr-price"><span
                                                class="new-price">{{ number_format($product->price, 0, ',', '.') }}
                                                VND</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <nav aria-label="..." class="cr-pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
