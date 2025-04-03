@extends('client.layout.default')

@section('content')
    <!-- Hero slider -->
    @include('client.components.heroSlider')

    <!-- Categories -->
    @include('client.components.category')

    <!-- Popular product -->
    @include('client.components.popularProduct')

    <!-- Product banner -->
    @include('client.components.productBanner')

    <!-- Services -->
    @include('client.components.service')

    <!-- Deal -->
    @include('client.components.deal')

    <!-- Popular product -->
    @include('client.components.popularProduct1')

    <!-- Testimonial -->
    @include('client.components.testimonial')

    <!-- Blog -->
    @include('client.components.blog')
@endsection
