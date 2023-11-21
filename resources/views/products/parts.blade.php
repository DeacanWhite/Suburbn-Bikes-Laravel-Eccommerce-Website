@extends('layout')
@include('layouts.navbar')
<title>Part</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 25.9375rem; margin-top: 85px; background-image: url('https://github.com/Alex11520/img/blob/main/img/component_desktop.jpg?raw=true'); background-size: cover; background-position: center; ">
        <div style="display: flex; height: 100%; align-items: center; justify-content: center; ">
            <p style="color: white; font-size: 20rem; font-weight: bold;">Part</p>
        </div>
    </div>
    {{--    css filter and product card--}}
    <style>
        main {

            position: relative;
            z-index: 2;
            border-radius: 3.125rem 3.125rem 0rem 0rem;
            background: #fff;
        }



        @media screen and (max-width: 1000px) {
            #category-container button {
                width: 7.5rem;
                height: 7.5rem;
            }

        }

        .trending-products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .product-image {
            display: flex; /* Use flexbox to center the image */
            justify-content: center; /* Center image horizontally */
            align-items: center; /* Center image vertically */
            overflow: hidden; /* Prevents the image from spilling out of the container */
            background-color: #eceee8;
            border-radius: 0.625rem 0.625rem 0 0;
        }

        .product-image img {
            max-width: 100%; /* Limits the maximum width to prevent the image from exceeding the card */
            max-height: 325px; /* Limits the maximum height to ensure consistency */
            width: auto; /* Allows the image width to adjust automatically */
            height: auto; /* Allows the image height to adjust automatically */
            object-fit: cover; /* Ensures the image covers the container without distorting the aspect ratio */
            background-color: #eceee8;
            border-radius: 0.625rem 0.625rem 0 0;
        }

        .product-card {
            width: 29rem;
            height: auto; /* Allows the card height to adjust based on content while maintaining a consistent image height */
            min-height: 26.1875rem; /* Sets a minimum height to ensure the card has a basic height even without an image */
            background-color: #fff;
            box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);
            border-radius: 0.625rem;
            font-family: Inter, serif;
            overflow: hidden; /* Prevents the image from spilling out of the card */
        }

        .product-info {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding-left: 0.81rem;
            padding-right: 0.81rem;
        }

        .product-name-price {
            font-size: 1rem;
            line-height: 1.575rem; /* 157.5% */
            display: flex;
            justify-content: space-between;
            margin-top: 0.31rem;
            margin-bottom: 1rem;
        }

        .product-name {
            font-weight: 400;
        }

        .product-price {
            font-weight: 700;
        }

        .product-buttons {
            display: flex;
            font-family: Inter;
        }

        .product-buttons button {
            display: flex;
            padding: 0.3125rem 0.625rem;
            justify-content: center;
            align-items: center;
            gap: 0.3125rem;
            border-radius: 0.3125rem;
            border: none;
            background: #b2d3a8;
            color: #fff;
            cursor: pointer;
            font-size: 0.875rem;
            font-style: normal;
            font-weight: 700;
            line-height: 1.575rem; /* 180% */
        }

        .product-buttons select {
            border-radius: 0.3125rem;
            border: 1px solid #dfdfdf;
            background: #fff;
            color: #929292;
            margin-left: 0.5rem;
            padding-left: 0.4rem;
            padding-right: 0.3rem;

            font-size: 0.875rem;
            font-style: normal;
            font-weight: 700;
            line-height: 1.575rem; /* 180% */
        }
    </style>
    <main style="margin-bottom: 80px; margin-top: 80px;">

        {{--        product container--}}
        <div class="trending-products-container" id="productContainer">
            @foreach ($parts as $part)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ $part->img }}" alt="product-image">
                    </div>
                    <div class="product-info">
                        <div class="product-name-price">
                            <span class="product-name">{{ $part->name }}</span>
                            <span class="product-price">A${{ number_format($part->price, 2) }}</span>
                        </div>
                        <div class="product-buttons">
                            <button data-id="{{ $part->prodNo }}" data-type="part" onclick="addToCart({{ $part->prodNo }})">Add to cart</button>
                            @if ($part->size)
                                <select name="size" id="size">
                                    <option value="{{ $part->size }}">{{ $part->size }}</option>
                                </select>
                            @endif
                            @if ($part->color)
                                <select name="colour" id="colour">
                                    <option value="{{ $part->color }}">{{ ucfirst($part->color) }}</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
    @include('layouts.footer')

@endsection
@section('scripts')
    <script>
        function addToCart(prodNo) {
            window.location.href = '/add-to-cart/' + prodNo;
        }
    </script>
@endsection
