@extends('layout')
@include('layouts.navbar')
<title>Cart</title>
@section('content')
    <div class="wrapper">
        <div class="title-breadcrumb" style="margin-top: 122px">
            <h3>your cart</h3>
            <ul class="breadcrumb">
                <li>Cart</li>
                <li><a href="#">Information</a></li>
                <li><a href="#">Its Yours!</a></li>
            </ul>
        </div>
        <table id="cart" class="table table-hover table-condensed" style="width: 70vw; margin-left: auto; margin-right: auto; margin-top: 2.44rem">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $prodNo => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $prodNo }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100"  class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart" style="background-color: #F25971;"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/') }}" class="btn btn-warning" style="background-color: #EEE4AF; color: #4b5563; border-color: #EEE4AF; "><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    <button class="btn btn-success" style="background-color: #CEE4DA; color: #4b5563; border-color: #CEE4DA; ">Checkout</button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <style>
        .wrapper{
            margin: 0 auto;
            max-width: 90.875rem;
        }

        .breadcrumb{
            background-color: transparent;
        }

        .title-breadcrumb h3 {
            color: #39393A;
            font-family: Inter;
            font-size: 2.5625rem;
            font-style: normal;
            font-weight: 700;
            line-height: 3rem; /* 117.073% */
            text-transform: uppercase;
            margin-top: 2.94rem;
        }

        .title-breadcrumb{
            padding-left: 40px;
        }

        /* Style the list */
        ul.breadcrumb {
            padding: 1rem 0;
            list-style: none;
        }

        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 0.75rem;
            font-weight: 700;
        }

        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #707070;
            text-decoration: none;
        }

        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            text-decoration: underline;
        }

    </style>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    prodNo: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        prodNo: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
