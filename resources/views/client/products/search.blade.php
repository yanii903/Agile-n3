@extends('client.layout.default')

@section('content')

<!-- Breadcrumb -->
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>Search Products</h2>
                        <span> <a href="{{ route('home') }}">Home</a> - Search</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Page -->
<section class="section-shop padding-tb-100">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-12">
                <div class="cr-shop-sideview">
                    <form action="{{ route('client.products.search') }}" method="GET">
                        <!-- Từ khóa -->
                        <div class="mb-4">
                            <h4 class="cr-shop-sub-title">Keyword</h4>
                            <input type="text" name="keyword" class="form-control" placeholder="Search products..." value="{{ request('keyword') }}">
                        </div>

                        <!-- Danh mục -->
                        <div class="mb-4">
                            <h4 class="cr-shop-sub-title">Category</h4>
                            <select name="category_id" class="form-control">
                                <option value="">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Giá tiền -->
                        <div class="mb-4">
                            <h4 class="cr-shop-sub-title">Price Range</h4>
                            <div class="d-flex gap-2">
                                <input type="number" name="min_price" class="form-control" placeholder="Min" value="{{ request('min_price') }}">
                                <input type="number" name="max_price" class="form-control" placeholder="Max" value="{{ request('max_price') }}">
                            </div>
                        </div>

                        <!-- Nút tìm kiếm -->
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </form>
                </div>
            </div>

            <!-- Danh sách sản phẩm -->
            <div class="col-lg-9 col-12">
                <div class="row">
                    @if ($products->count() > 0)
                        @foreach ($products as $product)
                            <div class="col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/150' }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="javascript:void(0)">{{ $product->category->name ?? 'No Category' }}</a>
                                        </div>
                                        <a href="{{ route('client.user.products.detail', $product->id) }}" class="title">{{ $product->name }}</a>
                                        <p class="text">{{ $product->description }}</p>
                                        <p class="cr-price"><span class="new-price">{{ number_format($product->price, 2) }} VND</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $products->links() }}
                        </div>
                    @else
                        <p>No products found for your search.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
