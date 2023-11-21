<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="{{ asset('css/transition-style.css') }}" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            font-family: "Montserrat", sans-serif;
        }


        body{
            animation: transitionIn 0.5s;
        }

        @keyframes transitionIn {
            from {
                opacity: 0;
                transform: rotateX(-10deg);
            }
            to {
                opacity: 1;
                transform: rotateX(0deg)
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar {
            position: fixed;
            top: 0;
            z-index: 999;
            color: #ffffff;
            width: 100%;
            transition: all 0.8s;
        }

        .navbar a {
            color: white;
        }

        .navbar-scrolled {
            background-color: #ffffff;
            border-bottom: 1px solid #dfdfdf;
        }

        .navbar-scrolled a {
            color: #000000;
        }

        .nav-content {
            height: 75px;
            width: 100%;
            max-width: 1454px;
            position: relative;
            padding: 0px 40px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: #ffffff;
            font-family: Inter;
            font-size: 1.375rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: 0.1375rem;
        }

        .navbar-scrolled .logo {
            color: #39393a;
        }

        .urbn {
            color: #b2d3a8;
        }

        .nav-links ul {
            display: inline-flex;
            flex-direction: row;
            gap: 30px;
            font-size: 0.875rem;
            color: #fff;
            font-family: Inter;
            font-style: normal;
            font-weight: 600;
        }

        .nav-icons ul {
            display: inline-flex;
            flex-direction: row;
            gap: 30px;
            font-size: 0.875rem;
            color: #fff;
            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            align-items: center;
        }

        .nav-icons,
        .location,
        .profile {
            display: flex;
            gap: 30px;
        }

        .nav-icons {
            stroke: #fff;
            stroke-width: 1.5;
            stroke-linecap: round;
        }

        .nav-icons path {
            stroke: white !important;
        }

        .navbar-scrolled .nav-icons #map-icon path {
            stroke: black !important;
            fill: black !important;
        }

        .navbar-scrolled .nav-icons path {
            stroke: black !important;
        }

        .side-bar {
            display: none;
        }

        .openbtn {
            display: none;
        }

        .side-bar {
            height: 45vh;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #ffffff;
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
            border-radius: 0 0 0 10px;
            box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);
            font-family: Inter;

        }

        .side-bar li a {
            text-decoration: none;
            font-size: 14px;
            color: #000000;
            display: block;
            transition: 0.3s;
            padding: 20px 0;
            margin: 0 20px;
            border-top: 1px solid #e5e5e5;
        }

        .side-bar a:hover {
            color: #f1f1f1;
        }

        .side-bar .closebtn {
            position: absolute;
            top: 0;
            right: 0;
            padding: 20px;
            margin-left: 50px;
            color: #000;
        }

        @media screen and (max-width: 900px) {
            .nav-links ul {
                display: none;
            }

            .nav-links ul li a {
                color: #000;
            }

            .nav-icons li:not(span) {
                display: none;
            }

            .side-bar {
                display: block;
            }

            .openbtn {
                display: block;
            }
        }

        .dropdown {
            position: relative;
            display: inline-flex;
        }

        .dropdown-content {
            display: none;
            flex-direction: column;
            position: absolute;
            background-color: #ffff;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;

        }

        .dropdown-content a{
            color: #2d3748;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


        .hero {
            background: linear-gradient(
                0deg,
                rgba(0, 0, 0, 0.3) 0%,
                rgba(0, 0, 0, 0.3) 100%
            ),
            url(https://cdn.discordapp.com/attachments/909028528270508095/1168763832596959324/daniel-salcius-RRcYcdGY630-unsplash.jpg?ex=6552f324&is=65407e24&hm=46c5a57d934426f36e809cc835788780f9ca0a2f04cef930d4c15bb699c21274&),
            rgb(156, 156, 156) -155.111px -248px / 118.97% 119.451% no-repeat;
            color: #ffffff;
            background-size: cover;
            background-position: center;
            height: 100vh;
            opacity: 0.8;
            position: relative;
            z-index: 1;
        }

        .hero-text-container {
            max-width: 1454px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 250px;
            padding-bottom: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Inter;
            color: #fff;
            text-align: center;
        }

        .hero p {
            font-size: 1.5rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-top: 4rem;
            width: 26.625rem;
        }
        .hero h1 {
            font-size: 9.375rem;
            font-style: normal;
            font-weight: 700;
            line-height: 8.75rem; /* 93.333% */
        }

        .hero a {
            border-radius: 1.25rem;
            background: #b2d3a8;
            display: inline-flex;
            padding: 0.625rem 1.625rem;
            justify-content: center;
            align-items: center;
            gap: 0.625rem;
            margin-top: 1.31rem;
            border: none;
            color: #fff;
            text-align: center;
            font-family: Inter;
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            cursor: pointer;
        }

        main {
            border-radius: 2rem 2rem;
            margin-top: -140px;
            position: relative;
            z-index: 2;
            border-radius: 3.125rem 3.125rem 0rem 0rem;
            background: #fff;
        }

        .trending-products {
            color: #000;
            text-align: center;
            font-size: 1.75rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding-top: 7.06rem;
        }

        .category-container {
            max-width: 60rem;
            display: inline-flex;
            align-items: center;
            gap: 2.5rem;
            margin-top: 3.31rem;
        }

        .category {
            width: 10rem;
            height: 10rem;
            font-size: 1rem;
            filter: grayscale(100%);
        }

        @media screen and (max-width: 1000px) {
            .category {
                width: 7.5rem;
                height: 7.5rem;
            }

            .category-container {
                gap: 1.5rem;
            }
        }

        .trending-products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2.5rem;
            margin-top: 3.31rem;
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

        .product-buttons button:hover {
            background: #80a572;
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

        .mid-banner img {
            height: 50.625rem;
            width: 100%;
            margin-top: 5.31rem;
            object-fit: cover;
            filter: brightness(50%);
        }

        .mid-banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://cdn.discordapp.com/attachments/909028528270508095/1168763856672272464/2e82f3bedfddb2eaaaa5903ae449329b.jpeg?ex=6552f32a&is=65407e2a&hm=7e320e28aed884fb6d4b91b4b146e776e65cb34e392d93b8254de7dc3538b794&);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
            height: 65vh;
            margin-top: 7.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mid-banner-text {
            position: relative;
            font-family: Inter;
            font-size: 5.625rem;
            font-style: normal;
            font-weight: 700;
            line-height: 6.1875rem; /* 110% */
            color: #ffffff;
            text-align: center;
            max-width: 95rem;
        }

        .mid-banner-text a {
            border-radius: 1.25rem;
            background: #b2d3a8;
            display: inline-flex;
            padding: 0.625rem 1.625rem;
            justify-content: center;
            align-items: center;
            gap: 0.625rem;
            margin-top: 1.31rem;
            border: none;
            color: #fff;
            text-align: center;
            font-family: Inter;
            font-size: 1rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            cursor: pointer;
        }

        .footer {
            width: 100%;
            height: 19.6875rem;
            margin-top: 5.31rem;
            background-color: #39393a;
            color: #fff;
        }

        .footer-container {
            padding-top: 3.71rem;
        }

        .logo-footer {
            font-family: Inter;
            font-size: 2.5625rem;
            font-style: normal;
            font-weight: 700;
            line-height: 2.53125rem; /* 98.78% */
        }

        .email-signup-banner{
            width: 100%;
            height: 35.75rem;
            background: #ECEEE8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .email-signup-banner h1{
            color: #000;
            text-align: center;
            font-family: Inter;
            font-size: 5.5625rem;
            font-style: normal;
            font-weight: 600;
            line-height: 6.1875rem; /* 111.236% */
            letter-spacing: -0.225rem;
            margin-bottom: 5rem;
        }

        .email-signup-banner p{
            color: #000;
            text-align: center;
            font-family: Inter;
            font-size: 1.0625rem;
            font-style: normal;
            font-weight: 400;
            line-height: 1.6875rem; /* 158.824% */
            letter-spacing: -0.0225rem;
            margin-top: 0.97rem;
        }

        .email-box{
            display: flex;
            width: 28.375rem;
            height: 3rem;
            padding: 0rem 0.3125rem;
            justify-content: ;
            flex-shrink: 0;
            border-radius: 3.125rem;
            border: 1px solid #E5E5E5;
            background: #FFF;
        }
    </style>


    <script defer src="script.js"></script>

    <title>Suburbn Bikes</title>
</head>

<body>
<header class="navbar">
    <nav class="nav-content">
        <div class="logo">
            <span class="sub">SUB</span><span class="urbn">URBN</span>
            <span class="bikes">BIKES</span>
        </div>
        <div id="nav-links" class="nav-links">
            <ul>
                <li><a href="{{ url('/bikes') }}">BIKES</a></li>
                <li><a href="{{ url('/scooters') }}">SCOOTERS</a></li>
                <li><a href="{{ url('/apparels') }}">APPAREL</a></li>
                <li><a href="{{ url('/parts') }}">PARTS</a></li>
                <li><a href="{{ url('/services') }}">SERVICES</a></li>
            </ul>
        </div>
        <div id="side-bar" class="side-bar">
            <ul>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" id="close-icon">
                        <path d="M18 6.05L6 18.05" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 6.05L18 18.05" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <li><a href="{{ url('/allbikes') }}">BIKES</a></li>
                <li><a href="{{ url('/scooters') }}">SCOOTERS</a></li>
                <li><a href="{{ url('/apparels') }}">APPAREL</a></li>
                <li><a href="{{ url('/parts') }}">PARTS</a></li>
                <li><a href="{{ url('/services') }}">SERVICES</a></li>
                <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M11 19.8929C15.4183 19.8929 19 16.3112 19 11.8929C19 7.47457 15.4183 3.89285 11 3.89285C6.58172 3.89285 3 7.47457 3 11.8929C3 16.3112 6.58172 19.8929 11 19.8929Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.0004 21.8928L16.6504 17.5428" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a></li>
                <li><a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a></li>
            </ul>
        </div>
        <div class="nav-icons">
            <ul>
                <li><a id="map-icon" href="{{ url('/location') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
                            <path d="M15.5 9.5C15.5 8.43913 15.0786 7.42172 14.3284 6.67157C13.5783 5.92143 12.5609 5.5 11.5 5.5C10.4391 5.5 9.42172 5.92143 8.67157 6.67157C7.92143 7.42172 7.5 8.43913 7.5 9.5C7.5 10.5609 7.92143 11.5783 8.67157 12.3284C9.42172 13.0786 10.4391 13.5 11.5 13.5C12.5609 13.5 13.5783 13.0786 14.3284 12.3284C15.0786 11.5783 15.5 10.5609 15.5 9.5ZM11.5 7C12.163 7 12.7989 7.26339 13.2678 7.73223C13.7366 8.20107 14 8.83696 14 9.5C14 10.163 13.7366 10.7989 13.2678 11.2678C12.7989 11.7366 12.163 12 11.5 12C10.837 12 10.2011 11.7366 9.73223 11.2678C9.26339 10.7989 9 10.163 9 9.5C9 8.83696 9.26339 8.20107 9.73223 7.73223C10.2011 7.26339 10.837 7 11.5 7Z" fill="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.9649 15.98C16.9629 15.98 16.9618 15.9777 16.963 15.9761L17.42 15.38C18.3614 14.2238 19.111 12.9239 19.64 11.53C19.87 10.78 20 9.99 20 9.17C20 4.66 16.2 1 11.5 1C6.8 1 3 4.66 3 9.17C3 9.99 3.13 10.79 3.36 11.54C3.61 12.31 4.08 13.22 4.8 14.28L5.17 14.82C5.44 15.19 5.73 15.58 6.05 15.98L6.54 16.6L7.07 17.24L7.65 17.9L8.25 18.6L8.91 19.3L9.61 20.05L10.33 20.81L10.45 20.93L10.71 21.2L11.11 21.6C11.3309 21.8209 11.6891 21.8209 11.91 21.6V21.6L12.67 20.8L13.4 20.04L14.1 19.3L14.43 18.94L15.06 18.24L15.66 17.56L16.2 16.91C16.3 16.81 16.38 16.7 16.47 16.59L16.9668 15.9839C16.9681 15.9824 16.9669 15.98 16.9649 15.98V15.98ZM11.5 2.5C15.42 2.5 18.5 5.54 18.5 9.17C18.5028 9.81535 18.4015 10.4569 18.2 11.07C17.96 11.85 17.35 12.97 16.22 14.47L15.78 15.05L15.3 15.65L15.06 15.95L14.51 16.59L13.94 17.24L13.31 17.94L13 18.28L12.31 19.01L11.59 19.76V19.76C11.5419 19.8134 11.4581 19.8134 11.41 19.76V19.76L10.69 19.01L10.01 18.29L9.37 17.59L8.77 16.92L8.21 16.26C8.04163 16.0614 7.87496 15.8614 7.71 15.66L7.22 15.05C6.92 14.67 6.65 14.3 6.4 13.95L6.04 13.43C5.51867 12.7106 5.09811 11.9233 4.79 11.09C4.59578 10.4686 4.49798 9.82106 4.5 9.17C4.5 5.54 7.58 2.5 11.5 2.5Z" fill="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a></li>
                <!-- Profile Icon -->
                <li><a href="{{ url('/dashboard') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a></li>
                <li><a href="{{ url('/cart') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <g clip-path="url(#clip0_394_105)">
                                <path d="M9 22.8929C9.55228 22.8929 10 22.4452 10 21.8929C10 21.3406 9.55228 20.8929 9 20.8929C8.44772 20.8929 8 21.3406 8 21.8929C8 22.4452 8.44772 22.8929 9 22.8929Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20 22.8929C20.5523 22.8929 21 22.4452 21 21.8929C21 21.3406 20.5523 20.8929 20 20.8929C19.4477 20.8929 19 21.3406 19 21.8929C19 22.4452 19.4477 22.8929 20 22.8929Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 1.89285H5L7.68 15.2829C7.77144 15.7433 8.02191 16.1569 8.38755 16.4512C8.75318 16.7455 9.2107 16.9019 9.68 16.8929H19.4C19.8693 16.9019 20.3268 16.7455 20.6925 16.4512C21.0581 16.1569 21.3086 15.7433 21.4 15.2829L23 6.89285H6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_394_105">
                                    <rect width="24" height="24" fill="white" transform="translate(0 0.892853)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a></li>
                <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">
                        <svg width="24" height="24" viewBox="0 0 20 16" fill="none" class="icon icon--menu   ">
                            <path d="M0.0131836 1.97266H19.9872" stroke="currentColor" stroke-width="2"stroke-linecap="round"></path>
                            <path d="M0.0131836 14.0269H19.9872" stroke="currentColor" stroke-width="2"stroke-linecap="round"></path>
                            <path d="M0.0131836 8H19.9872" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>
            </ul>

        </div>
    </nav>
</header>
<div class="hero">
    <div class="hero-text-container">
        <h1>READY TO RIDE?</h1>
        <p>Browse our latest selection of bikes and scooters</p>
        <a id="link" href="#trending-products">Explore</a>
    </div>
</div>
<main>
    <div id="trending-products" class="trending-products">
        <p>POPULAR CATEGORIES & TRENDING PRODUCTS</p>
        <div class="category-container">
            <div class="category">
                <img src="https://s3.ap-southeast-2.amazonaws.com/bikeexchange.au/homepage/icons/ebike-icon.svg" alt="ebike-icon">
                <p>Electric Bikes</p>
            </div>
            <div class="category">
                <img src="https://s3.ap-southeast-2.amazonaws.com/bikeexchange.au/homepage/icons/mtb-icon.svg" alt="mtb-icon">
                <p>Mountain Bikes</p>
            </div>
            <div class="category">
                <img src="https://s3.ap-southeast-2.amazonaws.com/bikeexchange.au/homepage/icons/clothing-icon.svg" alt="clothing-icon">
                <p>Clothing</p>
            </div>
            <div class="category">
                <img src="https://s3.ap-southeast-2.amazonaws.com/bikeexchange.au/homepage/icons/road-icon.svg" alt="road-icon">
                <p>Road Bikes</p>
            </div>
            <div class="category">
                <img src="https://s3.ap-southeast-2.amazonaws.com/bikeexchange.au/homepage/icons/gravel-icon.svg" alt="gravel-icon">
                <p>Gravel Bikes</p>
            </div>
        </div>
    </div>

    <div class="trending-products-container" id="productContainer">
        @foreach ($populars as $popular)

            <div class="product-card">
                <div class="product-image">
                    <img src="{{ $popular->img }}" alt="product-image">
                </div>
                <div class="product-info">
                    <div class="product-name-price">
                        <span class="product-name">{{ $popular->name }}</span>
                        <span class="product-price">A${{ number_format($popular->price, 2) }}</span>
                    </div>
                    <div class="product-buttons">
                        <button data-id="{{ $popular->prodNo }}" data-type="bike">Add to cart</button>
                        @if ($popular->size)
                            <select name="size" id="size">
                                <option value="{{ $popular->size }}">{{ $popular->size }}</option>
                            </select>
                        @endif
                        @if ($popular->color)
                            <select name="colour" id="colour">
                                <option value="{{ $popular->color }}">{{ ucfirst($popular->color) }}</option>
                            </select>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mid-banner">
        <div class="mid-banner-text">
            <h3>Affordable Servicing, All Year Round </h3>
            <a href="{{ url('/services') }}">Get Started</a>
        </div>
    </div>
    <!--<div class="email-signup-banner">
        <h1>Don't miss out.</h1>
        <div class="email-box">
            <input type="text" placeholder="Enter your email address">
            <button>Sign Up</button>
        </div>
        <p>Sign up to get the latest on new releases and more.</p>
    </div>-->
</main>
@include('layouts.footer')
<script>
    function openNav() {
        document.getElementById("side-bar").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("side-bar").style.width = "0";
    }
</script>
</body>

<script>
    //navbar scroll animation (transparent to solid)

    const headerEl = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            headerEl.classList.add('navbar-scrolled');
        } else {
            headerEl.classList.remove('navbar-scrolled');
        }
    });

    //handle product card info
    $(document).ready(function() {
        $('.product-buttons button').click(function() {
            var id = $(this).data('id');
            var type = $(this).data('type');

            $.ajax({
                url: '/add-to-cart',
                type: 'POST',
                data: {
                    id: id,
                    type: type,
                    _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                success: function(response) {
                    // Update your cart count, display a success message, etc.
                    console.log(response);
                },
                error: function(response) {
                    // Handle error
                    console.log(response);
                }
            });
        });
    });

</script>
</html>
