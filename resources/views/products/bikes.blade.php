@extends('layout')
<title>Bikes</title>
@section('content')
    <div class="banner" style="width:100%; position: relative; height: 25.9375rem; background-image: url('https://github.com/Alex11520/img/blob/main/img/bike-1.png?raw=true'); background-size: cover; background-position: center; margin-top: 85px">
        <div style="display: flex; height: 100%; align-items: center; justify-content: flex-end; padding-right: 15%; padding-bottom: 5%;">
            <p style="color: white; font-size: 20rem; font-weight: bold;">Bike</p>
        </div>
    </div>

{{--        css filter and product card--}}
    <style>
        main {
            position: relative;
            z-index: 2;
            background: #fff;
        }

        .trending-products {
            color: #000;
            text-align: center;
            font-size: 1.75rem;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding-top: 2.56rem;
        }

        .category-container {
            max-width: 60rem;
            display: inline-flex;
            align-items: center;
            gap: 2.5rem;
            margin-top: 3.31rem;
            margin-bottom: 3.25rem;
        }


        @media screen and (max-width: 1000px) {
            #category-container button {
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

        .product-card {
            width: 29rem;
            height: 26.1875rem;
            background-color: #fff;
            box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.1);
            border-radius: 0.625rem;
            font-family: Inter, serif;
        }

        .product-image img {
            width: 100%;
            background-color: #eceee8;
            border-radius: 0.625rem 0.625rem 0 0;
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
    <main style="margin-bottom: 80px;">
{{--                category--}}
        <div class="trending-products">
            <div style="margin-top: 2.5rem; margin-bottom: 2.5rem; text-align: center;">
                <h2 style="font-size: 5rem;  font-weight: 700; margin-bottom: 2.5rem; color: #39393a ">Category</h2>
                <div class="category-container">
                    <button onclick="filterBikes('city bike')" style="width: 18rem; height: 10rem; background-color: #F4F4F4; color: #39393a; font-size: 2.25rem; font-weight: 600; border: none; border-radius: 0.5rem; ">City</button>
                    <button onclick="filterBikes('road bike')" style="width: 18rem; height: 10rem; background-color: #E8F3E5; color: #39393a; font-size: 2.25rem; font-weight: 600; border: none; border-radius: 0.5rem; ">Road</button>
                    <button onclick="filterBikes('mountain bike')" style="width: 18rem; height: 10rem; background-color: #CEE4DA; color: #39393a; font-size: 2.25rem; font-weight: 600; border: none; border-radius: 0.5rem; ">Mountain</button>
                </div>
            </div>
        </div>

{{--                product container--}}
        <div class="trending-products-container" id="productContainer">
            @foreach ($bikes as $bike)

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ $bike->img }}" alt="product-image">
                    </div>
                    <div class="product-info">
                        <div class="product-name-price">
                            <span class="product-name">{{ $bike->name }}</span>
                            <span class="product-price">A${{ number_format($bike->price, 2) }}</span>
                        </div>
                        <div class="product-buttons">
                            <button data-id="{{ $bike->prodNo }}" data-type="bike" onclick="addToCart({{ $bike->prodNo }})" >Add to cart</button>
                            @if ($bike->size)
                                <select name="size" id="size">
                                    <option value="{{ $bike->size }}">{{ $bike->size }}</option>
                                </select>
                            @endif
                            @if ($bike->color)
                                <select name="colour" id="colour">
                                    <option value="{{ $bike->color }}">{{ ucfirst($bike->color) }}</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
    @include('layouts.footer')

@endsection
@section('scripts')
    <script>
        document.getElementById('productContainer').addEventListener('click', function(event) {
            if (event.target.matches('button[data-type="bike"]')) {
                const prodNo = event.target.getAttribute('data-id');
                addToCart(prodNo);
            }
        });

        function addToCart(prodNo) {
            window.location.href = '/add-to-cart/' + prodNo;
        }

        function filterBikes(category2) {
            fetch(`/filter-bikes/${category2}`)
                .then(response => response.json())
                .then(bikes => {
                    const container = document.getElementById('productContainer');
                    container.innerHTML = ''; // clear container
                    bikes.forEach(bike => {
                        console.log(bike);
                        let price = bike.price ? parseFloat(bike.price).toFixed(2) : '0.00';
                        let sizeSelect = bike.size ? `<select name="size" id="size"><option value="${bike.size}">${bike.size}</option></select>` : '';
                        let colorSelect = bike.color ? `<select name="colour" id="colour"><option value="${bike.color}">${bike.color.charAt(0).toUpperCase() + bike.color.slice(1)}</option></select>` : '';

                        // build new card
                        container.innerHTML += `
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="${bike.img}" alt="${bike.name}">
                                </div>
                                <div class="product-info">
                                    <div class="product-name-price">
                                        <span class="product-name">${bike.name}</span>
                                        <span class="product-price">A$${parseFloat(bike.price).toFixed(2)}</span>
                                    </div>
                                    <div class="product-buttons">
                                        <button data-id="${bike.prodNo}" data-type="bike">Add to cart</button>
                                        ${sizeSelect}
                                        ${colorSelect}
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                })
                .catch(error => console.error('Error:', error));
        }


    </script>
@endsection
