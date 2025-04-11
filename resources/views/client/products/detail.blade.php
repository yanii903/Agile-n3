@extends('client.layout.default')

@section('content')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Product</h2>
                            <span> <a href="index.html">Home</a> - product</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="section-product padding-t-100">
        <div class="container">
            <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-for">
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                            class="product-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading">{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="cr-size-and-weight">
                        <div class="cr-review-star">
                            <div class="cr-star">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p>( 75 Review )</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><label>Brand <span>:</span></label>Carrot Agile N3</li>
                                <li><label>Flavour <span>:</span></label>classic</li>
                                <li><label>Diet Type <span>:</span></label>Popular</li>
                                <li><label>Weight <span>:</span></label>200 Grams</li>
                                <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                <li><label>Items <span>:</span></label>1</li>
                            </ul>
                        </div>
                        <form method="POST" action="{{ route('client.carts.store') }}">
                            @csrf

                            <div class="cr-product-price">
                                <span class="new-price price" data-price="{{ $product->price }}">
                                    {{ number_format($product->price, 0, ',', '.') }} VND
                                </span>
                            </div>

                            <div class="cr-add-card">
                                <div class="cr-qty-main">
                                    <input type="text" name="quantity" value="1" class="quantity" minlength="1"
                                        maxlength="20">
                                    <button type="button" class="plus">+</button>
                                    <button type="button" class="minus">-</button>
                                </div>

                                @if (session()->has('name'))
                                    {{-- <div >
                                        <button type="submit" class="cr-button cr-shopping-bag">Add to cart</button>
                                    </div> --}}
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        {{-- <input type="hidden" name="quantity" value="1"> --}}
                                        <button class="cr-add-button cr-button cr-shopping-bag" type="submit" >Add to Cart</button>
                                @else
                                    <div class="cr-add-button">
                                        <a href="{{ route('client.user.login') }}" class="cr-button cr-shopping-bag">Add to
                                            cart</a>
                                    </div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-12">
                    <div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                    aria-selected="false">Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review"
                                    aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente odio, error dolore vero temporibus consequatur, nobis veniam odit
                                            dignissimos consectetur quae in perferendis
                                            doloribusdebitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                    <h4 class="heading">Packaging & Delivery</h4>
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente
                                            doloribus debitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>Brand <span>:</span></label>ESTA BETTERU CO</li>
                                            <li><label>Flavour <span>:</span></label>Super Saver Pack</li>
                                            <li><label>Diet Type <span>:</span></label>Vegetarian</li>
                                            <li><label>Weight <span>:</span></label>200 Grams</li>
                                            <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                            <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                            <li><label>Items <span>:</span></label>1</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                    <div class="post">
                                        <div class="content">
                                            <img src="assets/img/review/1.jpg" alt="review">
                                            <div class="details">
                                                <span class="date">Jan 08, 2024</span>
                                                <span class="name">Oreo Noman</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                            adipisci vel
                                            perferendis dolor! quae vero in perferendis provident quis.</p>
                                        <div class="content mt-30">
                                            <img src="assets/img/review/2.jpg" alt="review">
                                            <div class="details">
                                                <span class="date">Mar 22, 2024</span>
                                                <span class="name">Lina Wilson</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                            adipisci vel
                                            perferendis dolor! quae vero in perferendis provident quis.</p>
                                    </div>

                                    <h4 class="heading">Add a Review</h4>
                                    <form action="javascript:void(0)">
                                        <div class="cr-ratting-star">
                                            <span>Your rating :</span>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-name" placeholder="Name" type="text">
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="your-email" placeholder="Email*" type="email" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular products -->
    <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
        data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-popular-product">

                        @foreach ($products as $value)
                            @if ($value->id !== $product->id)
                                <div class="slick-slide">
                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                <img src="{{ asset('storage/' . $value->image) }}"
                                                    alt="{{ $value->name }}" class="product-image">
                                            </div>
                                            <div class="cr-side-view">
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                                <a class="model-oraganic-product" data-bs-toggle="modal"
                                                    href="#quickview" role="button" data-id="{{ $value->id }}">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </div>
                                            <a class="cr-shopping-bag" href="javascript:void(0)">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <a
                                                    href="shop-left-sidebar.html">{{ $value->category->name ?? 'Không có danh mục' }}</a>
                                                <div class="cr-star">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <p>(5.0)</p>
                                                </div>
                                            </div>
                                            <a href="{{ route('client.user.products.detail', ['id' => $value->id]) }}"
                                                class="title">{{ $value->name }}</a>
                                            <p class="cr-price"><span
                                                    class="new-price">{{ number_format($value->price, 0, ',', '.') }}
                                                    VND</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
