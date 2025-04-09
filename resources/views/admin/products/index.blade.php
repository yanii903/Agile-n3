@extends('admin.layout.master')

@section('content')
    <!-- main content -->
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>List Product</h5>
                <ul>
                    <li><a href="{{ route('admin.products.index') }}">Dashboard</a></li>
                    <li>List Product</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cr-card card-default product-list">
                    <div class="cr-card-content">
                        <div class="table-responsive">
                            <table id="product_list" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name ?? 'Không có danh mục' }}</td>
                                            <td>{{ number_format($product->price, 2) }} VND</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>
                                                @if ($product->image)
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                                        class="btn btn-sm btn-primary mx-1">Edit</a>
                                                    <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Hiển thị phân trang -->
                        <div class="d-flex justify-content-center mt-3">
                            {{ $products->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content end -->
@endsection
