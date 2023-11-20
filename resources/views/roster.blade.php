@extends('layout')
@include('layouts.navbar')
<title>Roster</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 25.9375rem; margin-top: 85px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center;">
        <div style="display: flex; height: 100%; align-items: center; justify-content: center;  ">
            <p style="color: white; font-size: 15rem; font-weight: bold;">Create Roster</p>
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
        <div style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
            <h2 style="text-align: center; color: #333;">Set the roster</h2>
            <form action="{{ route('roster.set') }}" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                @csrf <!-- 确保包含 CSRF 令牌 -->

                <!-- 选择姓名 -->
                <label for="user_id" style="margin-bottom: 5px;">Name:</label>
                <select name="user_id" id="user_id" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    @foreach ($staffMembers as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                    @endforeach
                </select>

                <!-- 选择职位 -->
                <label for="position" style="margin-bottom: 5px;">Position:</label>
                <select name="position" id="position" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    <!-- 填写您希望提供选择的职位 -->
                    <option value="sale">sale</option>
                    <option value="admin">admin</option>
                    <option value="workshop">workshop</option>
                </select>

                <!-- 选择天 -->
                <label for="day" style="margin-bottom: 5px;">Day:</label>
                <select name="day" id="day" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>

                <!-- 提交按钮 -->
                <input type="submit" value="Submit">
            </form>

        </div>

        <div style="max-width: 800px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h1 style="color: #333; text-align: center;">Staff roster</h1>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                <tr style="background-color: #4b5563; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">Staff Name</th>
                    <th style="padding: 12px 15px;">Position</th>
                    <th style="padding: 12px 15px;">Day</th>
                    <th style="padding: 12px 15px;">Delete</th>

                </tr>
                </thead>
                <tbody>
                @foreach($rosters as $roster)
                    <tr style="border-bottom: 1px solid #dddddd;">
                        <td style="padding: 12px 15px;">{{ $roster->user->name }}</td>
                        <td style="padding: 12px 15px;">{{ $roster->position }}</td>
                        <td style="padding: 12px 15px;">{{ $roster->day }}</td>
                        <td style="padding: 12px 15px;">
                            <form action="{{ route('roster.destroy', $roster->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" style="border: none; background-color: #ff0000; color: white; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('layouts.footer')
@endsection
