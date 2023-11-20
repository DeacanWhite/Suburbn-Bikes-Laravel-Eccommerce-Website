<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Map</title>
        <meta
            name="viewport"
            content="initial-scale=1,maximum-scale=1,user-scalable=no"
        />

        <script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
        <link
            href="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css"
            rel="stylesheet"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat:wght@200&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="style-map.css" />
        <style></style>
    </head>
    <body>
    <!-- Load the `mapbox-gl-geocoder` plugin. -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

    @include('layouts.navbar')
    <main>
        <div class="title">
            <p>FIND A STORE NEAR YOU </p>
        </div>
        <div class="map-container">
            <div id="map"></div>
        </div>
    </main>
    @include('layouts.footer')
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

        .title{
            color: #000;
            font-family: Inter;
            font-size: 2.5rem;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: 0.25rem;
            text-align: center;
            margin-top: 8.94rem;
            margin-bottom: 3.75rem;

        }

        .map-container{
            display: flex;
            justify-content: center;
            max-width: 1454px;
            height: 85vh;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        #map {
            width: 100%;
            height: 100%;
            border-radius: 1rem;
            margin-left: 20px;
            margin-right: 20px;
        }

        .mapboxgl-ctrl-icon{
            background-color: #ffffff;
            border-radius: 2rem;
            width: 36px;
        }

        .mapboxgl-ctrl-group button {
            width: 48px;
            height: 48px;
            display: block;
            padding: 0;
            outline: none;
            border: 0;
            box-sizing: border-box;
            background-color: transparent;
            cursor: pointer;
            overflow: hidden;
        }

        /* TOP-LEFT section and Search */
        .mapboxgl-ctrl-top-left {
            display: flex;
            gap: 12px;
            top: 24px;
            left: 24px;
        }

        .mapboxgl-ctrl-top-left > div {
            margin: 0 !important;
        }

        .mapboxgl-ctrl-geocoder {
            display: flex;
            align-items: center;
            padding: 0px 0px 0px 15px;
            height: 48px;
        }

        @media screen and (min-width: 640px){
            .mapboxgl-ctrl-geocoder--icon-search {
                left: 7px;
                width: 24px !important;
                height: 24px !important;
            }
        }

        @media screen and (min-width: 640px){
            .mapboxgl-ctrl-geocoder--icon {
                top: 12px !important;
            }
        }
        .mapboxgl-ctrl-group{
            background-color: transparent;
            box-shadow: none !important;
            border: none;
        }

        .mapboxgl-ctrl-compass{
            display: none !important;
        }

        .mapboxgl-ctrl-zoom-in{
            margin-top: 10rem;
            margin-bottom: 12px;
        }

    </style>
        <script>
            mapboxgl.accessToken =
                "pk.eyJ1IjoiZGVhY2Fud2hpdGUiLCJhIjoiY2xsa2dqZTJlMXZzODNlcGtwa2dvNGhoOSJ9.LFZuIW75X-ER5nMXY55nsA";
            const map = new mapboxgl.Map({
                container: "map", // container ID
                // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
                style: "mapbox://styles/deacanwhite/cllkgwtrh00j401r87eb64zb7", // style URL
                center: [145.03749427712847, -37.81993534061152], // starting position [lng, lat]
                zoom: 15, // starting zoom
            });

            // Create a default Marker and add it to the map.
            const marker1 = new mapboxgl.Marker()
                .setLngLat([145.03749427712847, -37.81993534061152])
                .addTo(map);

            // full screen and nav controls.
            map.addControl(new mapboxgl.FullscreenControl());
            map.addControl(new mapboxgl.NavigationControl());

            // Add geolocate control to the map.
            map.addControl(
                new mapboxgl.GeolocateControl({
                    positionOptions: {
                        enableHighAccuracy: true
                    },
                    // When active the map will receive updates to the device's location as it changes.
                    trackUserLocation: true,
                    // Draw an arrow next to the location dot to indicate which direction the device is heading.
                    showUserHeading: true
                }),'top-left'
            );

            // Add a geocoder control to the map. (search bar)
            map.addControl(
                new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    mapboxgl: mapboxgl
                }),'top-left'
            );


        </script>
    </body>
</html>
