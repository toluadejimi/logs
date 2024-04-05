@extends('layout.main')
@section('content')


    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            padding: 10px;
            border: 1px solid #fff;
            margin: 2.5px;
            font-size: 20px;
            color: #222;
            background-color: #ff087c;
            border-radius: 10px;
            color: white;
        }
    </style>

    <!-- section start -->

    <div class="collection-wrapper">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="row">


                <div class="col-lg-6">

                    <div class="card">


                        <div class="card-body">


                            <div class="product-right">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="#" data-help="Click to read detailed description">
                                            <img src="{{ url('') }}/public/storage/content/images/{{ $icon }}" height="30" width="30" loading="lazy">
                                        </a>
                                    </div>

                                    <div class="col-10">
                                        <h4 class="mb-3">{{ $title }}</h4>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-5">
                                        <h5 class="">NGN{{ number_format($amount, 2) }}/Pcs</h5>
                                    </div>

                                    <div class="col-7">
                                        <button type="button" class="btn btn-outline-success btn-block">{{ $stock }} Available in stock</button>
                                        </span>
                                    </div>
                                </div>

                                <hr>


                                <div class="row">
                                    <div class="col-6">
                                        <button style="background-color: #4d4d4d; color: white" class="btn"
                                                onclick="decrementQuantity()">-
                                        </button>
                                        <span class="p-2" id="quantity">1</span>
                                        <button style="background-color: #FF0B9E; color: white" class="btn"
                                                onclick="incrementQuantity()">+
                                        </button>
                                    </div>

                                    <div class="col-6">
                                        <button type="button" style="background-color: #10113D; color: white" class="btn btn-block">NGN<span id="total">10.00</span></button>

                                    </div>
                                </div>


                                <hr>

                                <div class="p-2">
                                    <h6 class="">Share product</h6>


                                    {!! $shareComponent !!}

                                </div>

                                <hr>

                                    <form action="/buy-now" method="POST">
                                        @csrf

                                        <h6 class="">Have a coupon?</h6>
                                                <input class="form-control2 mb-3" name="coupon_code" type="text"
                                                       placeholder="Enter Coupon Code">

                                        <input type="hidden" id="quantityInput" name="quantity" value="1">
                                        <input type="hidden" name="item_id" value="{{ $item_id }}">


                                        <button type="submit" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%); color: white;" class="btn btn-block">Buy
                                            now
                                        </button>
                                </div>


                                </form>


                            </div>


                        </div>
                    </div>


                </div>



                <div class="col-lg-6">


                    <div class="card">
                        <div class="card-body">

                            <div class="card-title mt-3 text-center">
                                <h6>Disclaimer</h6>

                            </div>


                            <div class="text-center">
                                <p>By purchasing any product, you agree that you are fully aware of these
                                    terms/conditions and agree to follow them! 👉🏽<a href="/terms"> TERMS AND
                                        CONDITIONS</a></p>

                            </div>


                        </div>
                    </div>

                </div>


            </div>


        </div>

<!-- Section ends -->


<script>
    // Variables to track quantity and price
    let quantity = 1;
    const price = {{ $amount }};

    // Functions to increment and decrement quantity
    function incrementQuantity() {
        quantity++;
        updateView();
    }

    function decrementQuantity() {
        if (quantity > 1) {
            quantity--;
            updateView();
        }
    }

    // Function to update the view with new quantity and total
    function updateView() {
        const quantityElement = document.getElementById("quantity");
        const totalElement = document.getElementById("total");
        const quantityInput = document.getElementById("quantityInput");

        const total = (quantity * price).toFixed(2);

        quantityElement.textContent = quantity;
        totalElement.textContent = total;
        quantityInput.value = quantity;
    }

    // Function to submit quantity to the server
    function submitQuantity() {
        const quantityInput = document.getElementById("quantityInput");
        alert("Quantity submitted: " + quantityInput.value);
        // You can send the quantityInput.value to the server here
    }

    // Initialize the view
    updateView();
</script>

@endsection
