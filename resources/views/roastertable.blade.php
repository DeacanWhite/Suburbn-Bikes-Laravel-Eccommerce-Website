{{-- roaster.view.blade.php --}}
@extends('layout')
@include('layouts.navbar')
<title>Roaster</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 50vh; margin-top: -40px; background-image: url('https://github.com/Alex11520/img/blob/main/img/service_desktop.jpeg?raw=true'); background-size: cover; background-position: center; border-radius: 1rem;">
        <div style="display: flex; height: 100%; align-items: center; justify-content: center; padding-bottom: 5%;">
            <p style="color: white; font-size: 15rem; font-weight: bold;">Roaster</p>
        </div>
    </div>

    <main style="margin-bottom: 80px; height: 40vh;">
        <div style="max-width: 800px; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <h1 style="color: #333; text-align: center;">Staff Roaster</h1>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                <tr style="background-color: #4b5563; color: white; text-align: left;">
                    <th style="padding: 12px 15px;">Staff Name</th>
                    <th style="padding: 12px 15px;">Position</th>
                    <th style="padding: 12px 15px;">Day</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roasters as $roaster)
                    <tr style="border-bottom: 1px solid #dddddd;">
                        <td style="padding: 12px 15px;">{{ $roaster->user->name }}</td>
                        <td style="padding: 12px 15px;">{{ $roaster->position }}</td>
                        <td style="padding: 12px 15px;">{{ $roaster->day }}</td>
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


