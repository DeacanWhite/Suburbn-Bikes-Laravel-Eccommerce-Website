<header class="navbar">
    <nav class="nav-content">
        <!-- Logo -->
        <div class="logo" >
            <a href="{{ route('home.index') }}">
                <span class="sub">SUB</span><span class="urbn">URBN</span>
                <span class="bikes">BIKES</span>
            </a>
        </div>
        <!-- Desktop Page Links -->
        <div id="nav-links" class="nav-links">
            <ul>
                <li><a href="{{ url('/bikes') }}">BIKES</a></li>
                <li><a href="{{ url('/scooters') }}">SCOOTERS</a></li>
                <li><a href="{{ url('/apparels') }}">APPAREL</a></li>
                <li><a href="{{ url('/parts') }}">PARTS</a></li>
                <li><a href="{{ url('/services') }}">SERVICES</a></li>
            </ul>
        </div>

        <!-- Mobile Side Menu -->
        <div id="side-bar" class="side-bar">
            <ul>
                <!-- Close Menu Icon -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" id="close-icon">
                        <path d="M18 6.05L6 18.05" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 6.05L18 18.05" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <!-- Page Links -->
                <li><a href="{{ url('/bikes') }}">BIKES</a></li>
                <li><a href="{{ url('/scooters') }}">SCOOTERS</a></li>
                <li><a href="{{ url('/apparels') }}">APPAREL</a></li>
                <li><a href="{{ url('/parts') }}">PARTS</a></li>
                <li><a href="{{ url('/services') }}">SERVICES</a></li>
                <li><a href="#">LOCATIONS</a></li>
                <li><a href="{{ url('/dashboard') }}">PROFILE</a></li>
                <li><a href="{{ url('/cart') }}">VIEW CART</a></li>
            </ul>
        </div>
        <!-- Desktop Nav Icons -->
        <div class="nav-icons">
            <ul>
                <!-- Map Icon -->
                <li id="map-icon"><a href="#">
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
                <!-- Cart Icon -->
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
                <!-- Hamburger Menu Icon -->
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

<!-- Script Enables Side Menu Functionality -->
<script>
    function openNav() {
        document.getElementById("side-bar").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("side-bar").style.width = "0";
    }
</script>

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

    .navbar {
        position: fixed;
        top: 0;
        z-index: 999;
        background-color: #ffffff;
        border-bottom: 1px solid #dfdfdf;
        width: 100%;
        transition: all 0.8s;
    }

    .navbar a {
        color: #39393A;
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
        color: #39393A;
        font-family: Inter;
        font-size: 1.375rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 0.1375rem;
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
        padding-top: 17px;
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
        padding-top: 25px;
    }

    .nav-icons,
    .location,
    .profile {
        display: flex;
        gap: 30px;
    }

    .nav-icons {
        stroke: #39393A;
        stroke-width: 1.5;
        stroke-linecap: round;
    }

    .nav-icons path {
        stroke: #39393A !important;
    }

    #map-icon path{
        fill: #39393A !important;
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
        color: #aeaeae;
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
            color: #39393A;
        }

        .nav-icons li {
            display: none;
        }

        .side-bar {
            display: block;
        }

        .openbtn {
            display: block;
        }
    }
</style>
