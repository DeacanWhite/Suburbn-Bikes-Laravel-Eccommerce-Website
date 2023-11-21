@extends('layout')
@include('layouts.navbar')
<title>Bookings</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 50vh; margin-top: -40px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center; border-radius: 1rem;">
        <div style="display: flex; height: 100%; align-items: center; justify-content: center;  padding-bottom: 5%;">
            <p style="color: white; font-size: 15rem; font-weight: bold;">Bookings</p>
        </div>
    </div>

    {{--    css filter and product card--}}
    <style>
        main {
            margin-top: -140px;
            position: relative;
            z-index: 2;
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
    <main style="margin-bottom: 80px; height: 40vh;">
        <!-- service.bookings.blade.php -->
        <div style="max-width: 800px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h1 style="color: #333; text-align: center;">Service Bookings</h1>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                <tr style="background-color: #4b5563; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">Client Name</th>
                    <th style="padding: 12px 15px;">Service Name</th>
                    <th style="padding: 12px 15px;">Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr style="border-bottom: 1px solid #dddddd;">
                        <td style="padding: 12px 15px;">{{ $booking->clientName }}</td>
                        <td style="padding: 12px 15px;">{{ $booking->serviceName }}</td>
                        <td style="padding: 12px 15px;">{{ $booking->time }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
