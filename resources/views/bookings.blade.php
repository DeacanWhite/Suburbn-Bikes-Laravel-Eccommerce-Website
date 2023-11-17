@include('layout.head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>services</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
@include('layout.nav')
<div class="banner" style="width=100%; position: relative; height: 40vh; margin-top: 75px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center;">
    <div style="display: flex; height: 100%; align-items: center; justify-content: center;  padding-bottom: 5%;">
        <p style="color: white; font-size: 15rem; font-weight: bold;">Bookings</p>
    </div>
</div>

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
<footer style="width: 100%; height: 168px; background-color: #39393A; color: white; position: relative; bottom: 0; font-family: 'Inter', serif; padding-top: 40px;">
    <div style="position: absolute; width: 192px; height: 120px; top: 18px; left: 160px;">
        <!-- Brand Icon -->
        <p style="font-weight: 700; font-size: 41px; line-height: 40.5px; color: white;">
            SUB<br /><span style="color: #B2D3A8;">URBN</span>
        </p>
    </div>
    <div style="position: absolute; top: 68px; right: 160px; text-align: right;">
        <!-- Contact Us -->
        <p style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; white-space: nowrap;">
            Contact Us : suburbn@gmail.com
        </p>
    </div>
    <div style="position: absolute; top: 68px; right: 416px; text-align: right;">
        <!-- Manager Login -->
        <p style="font-weight: 400; font-size: 16px; line-height: 20px; color: white; margin-right: 20px;">
            Manager Login
        </p>
    </div>
    <div style="position: absolute; top: 68px; right: 556px; text-align: right;">
        <!-- Staff Login -->
        <p style="font-weight: 400; font-size: 16px; line-height: 20px; color: white;">
            Staff Login
        </p>
    </div>
</footer>


</body>
</html>
