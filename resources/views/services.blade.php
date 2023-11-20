@extends('layout')
@include('layouts.navbar')
<title>Service</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 25.9375rem; margin-top: 85px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center;">
        <div style="display: flex; height: 100%; align-items: center; justify-content: center;  ">
            <p style="color: white; font-size: 20rem; font-weight: bold;">Service</p>
        </div>
    </div>
    {{--    css filter and product card--}}
    <style>
        main {
            margin-top: -140px;
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

        <div style="display: flex; justify-content: center; align-items: center; gap: 40px; padding: 50px;">
            <!-- Basic Service Plan -->
            <div style="width: 400px; height: 400px; padding: 40px; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 20px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); background-color: #ffffff; color: #4b5563;">
                <h1 style="margin-bottom: 20px;">Basic</h1>
                <p style="font-size: 2em; margin-bottom: 20px;">$119</p>
                <ul style="list-style: none;  font-size: 1.25em">
                    <li style="padding: 7px;">Safety Check</li>
                    <li style="padding: 7px;">Degrease & Clean</li>
                    <li style="padding: 7px;">General Tuning</li>
                    <li style="padding: 7px;">Lubricating</li>
                    <li style="padding: 7px;">Bolts Check</li>
                </ul>
            </div>

            <!-- General Service Plan -->
            <div style="width: 400px; height: 400px; padding: 40px; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 20px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); background-color: #E8F3E5;color: #4b5563;">
                <h1 style="margin-bottom: 20px;">General</h1>
                <p style="font-size: 2em; margin-bottom: 20px;">$169</p>
                <ul style="list-style: none; font-size: 1.25em;">
                    <li style="padding: 7px;">Basic +</li>
                    <li style="padding: 7px;">Wheels Check</li>
                    <li style="padding: 7px;">Polish</li>
                    <li style="padding: 7px;">Headset Check</li>
                    <li style="padding: 7px;">Bracket Check</li>
                </ul>
            </div>

            <!-- Premium Service Plan -->
            <div style="width: 400px; height: 400px; padding: 40px; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 20px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); background-color: #CEE4DA;color: #4b5563;">
                <h1 style="margin-bottom: 20px;">Premium</h1>
                <p style="font-size: 2em; margin-bottom: 20px;">$269</p>
                <ul style="list-style: none; font-size: 1.25em;">
                    <li style="padding: 7px;">General +</li>
                    <li style="padding: 7px;">New Cable</li>
                    <li style="padding: 7px;">Brake Bleed</li>
                    <li style="padding: 7px;">Grease</li>
                    <li style="padding: 7px;">Frame Check</li>
                </ul>
            </div>
        </div>


        {{--    booking form--}}
        <div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
            <h2 style="text-align: center; color: #333;">Service Booking Form</h2>

            <form action="{{ route('service.book') }}" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
                @csrf
                <label for="clientName" style="margin-bottom: 5px;">Your Name:</label>
                <input type="text" id="clientName" name="clientName" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">

                <label for="serviceName" style="margin-bottom: 5px;">Service Name:</label>
                <input type="text" id="serviceName" name="serviceName" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">

                <label for="time" style="margin-bottom: 5px;">Time:</label>
                <input type="text" id="time" name="time" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">

                <button type="submit" style="padding: 10px 20px; border: none; border-radius: 4px; background-color: #4b5563; color: white; cursor: pointer; margin-top: 10px;">
                    Book
                </button>
            </form>
        </div>

    </main>
    @include('layouts.footer')

@endsection


