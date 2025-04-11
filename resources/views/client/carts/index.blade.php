@extends('client.layout.default')

@section('content')
    <section class="section-cart padding-t-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Cart</h2>
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
                    <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="row">
                            <form action="#">
                                <div class="cr-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($carts as $cart)
                                                <tr>
                                                    <td class="cr-cart-name">
                                                        <a href="javascript:void(0)">
                                                            <img src="{{ $cart->product->image ? asset('storage/' . $cart->product->image) : 'https://via.placeholder.com/150' }}"
                                                                alt="product-{{ $cart->product->id }}" class="cr-cart-img">
                                                            {{ $cart->product->name }}
                                                        </a>
                                                    </td>
                                                    <td class="cr-cart-price">
                                                        <span class="amount">{{ number_format($cart->product->price, 2) }}
                                                            VND</span>
                                                    </td>
                                                    <td class="cr-cart-qty">
                                                        <div class="cart-qty-plus-minus">
                                                            <button type="button" class="plus">+</button>
                                                            <input type="text" placeholder="."
                                                                value="{{ $cart->quantity }}" minlength="1" maxlength="20"
                                                                class="quantity">
                                                            <button type="button" class="minus">-</button>
                                                        </div>
                                                    </td>
                                                    <td class="cr-cart-subtotal">
                                                        {{ number_format($cart->product->price * $cart->quantity) }} VND
                                                    </td>
                                                    <td class="cr-cart-remove">
                                                        <a href="{{ route('client.carts.destroy', $cart->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Your cart is empty.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        {{ $carts->links() }}
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cr-cart-update-bottom">
                                            <a href="{{ route('client.user.products') }}" class="cr-links">Continue
                                                Shopping</a>
                                            <a href="javascript:void(0)" class="cr-button">
                                                Check Out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
<section class="section-cart padding-t-100">
    <div class="container">
        <div class="row d-none">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="cr-banner">
                        <h2>Cart</h2>
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
                <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="row">
                        <form action="#">
                            <div class="cr-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($carts as $cart)
                                            <tr>
                                                <td class="cr-cart-name">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ $cart->product->image ? asset('storage/' . $cart->product->image) : 'https://via.placeholder.com/150' }}" alt="product-{{ $cart->product->id }}" class="cr-cart-img">
                                                        {{ $cart->product->name }}
                                                    </a>
                                                </td>
                                                <td class="cr-cart-price">
                                                    <span class="amount">{{ number_format($cart->product->price, 2) }} VND</span>
                                                </td>
                                                <td class="cr-cart-qty">
                                                    <div class="cart-qty-plus-minus">
                                                        <button type="button" class="plus">+</button>
                                                        <input type="text" placeholder="." value="{{ $cart->quantity }}" minlength="1" maxlength="20" class="quantity">
                                                        <button type="button" class="minus">-</button>
                                                    </div>
                                                </td>
                                                <td class="cr-cart-subtotal">{{ number_format($cart->product->price * $cart->quantity, 2) }} VND</td>
                                                <td class="cr-cart-remove">
                                                    {{-- {{ route('client.carts.destroy', $cart->id) }} --}}
                                                    <form action="#" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Your cart is empty.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    {{ $carts->links() }}
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cr-cart-update-bottom">
                                        <a href="{{ route('client.user.products') }}" class="cr-links">Continue Shopping</a>
                                        <a href="javascript:void(0)" class="cr-button">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</section>
@endsection
