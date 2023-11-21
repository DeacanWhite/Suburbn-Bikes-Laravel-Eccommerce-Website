<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/transition-style.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
</head>
<body>
    @include('layouts.navbar')

    <!-- cart button (floating) -->

    <!--<div class="container-fluid" style="position: absolute;z-index: 999;">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown" >
                <button type="button" class="btn btn-info" data-toggle="dropdown" style="background-color: #B4C8C7; color: black; border-color: #B4C8C7; ">
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="background-color: #B4C8C7; color: black; border-color: #B4C8C7; "></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu" style="padding: 20px;">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
    @foreach((array) session('cart') as $id => $details)
        @php $total += $details['price'] * $details['quantity'] @endphp
    @endforeach
    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
        <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                    <img src="{{ $details['image'] }}" style="max-height: 100px"/>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="text-align: right;">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
    @endif
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
            <a href="{{ route('cart') }}" class="btn btn-primary btn-block" style="background-color: #718096; width: 50%; display: inline-block; margin-top: 10px;">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

    <div>
        @if(session('success'))
            <div class="alert alert-success" style="position: absolute; width: fit-content; bottom: 10%;left: 45%;;z-index: 1000; text-align: center; ">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
        @yield('scripts')
</body>
</html>
