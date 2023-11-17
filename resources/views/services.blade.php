{{--<h1>hello</h1>--}}
{{--<p>Hello, {{ $bikes }}!</p>--}}

@include('layout.head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>services</title>
</head>

<body>
@include('layout.nav')
<div class="banner" style="width=100%; position: relative; height: 40vh; margin-top: 75px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center;">
    <div style="display: flex; height: 100%; align-items: center; justify-content: center;  padding-bottom: 5%;">
        <p style="color: white; font-size: 20rem; font-weight: bold;">Service</p>
    </div>
</div>

<main style="margin-bottom: 80px;">
{{--    service content--}}
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


