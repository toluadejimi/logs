<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Social Media Accounts for Sale - Facebook, Instagram and more</title>
    <meta name="description"
        content="Buy Facebook accounts, Instagram accounts, Twitter accs and more! Bulk and aged social media accounts. High quality!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="490663bfeb6915c8245bac0df6461bef1cf3c3c65fd34b2b07e971e27716c29a" />


    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    {{--
    <link href="{{ url('') }}/css/file.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('') }}/public/css/my.css"> --}}





</head>

<body>


    <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


        <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">
            <strong class=" ">LOGS MARKEPLACE</strong>
        </a>



        <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center  mb-md-0">
            <li><a href="/" class="nav-link badge badge-dark px-2 p-2 mr-2 link-secondary">
                    <ion-icon name="home-outline"></ion-icon> Home
                </a></li>
            @if($user != null)
            <li><a href="/fund-wallet" class=" nav-link badge badge-dark p-2 mr-2 px-2 link-dark">
                    <ion-icon name="wallet-outline"></ion-icon> Fund Wallet
                </a></li>
            @endif
            <li><a href="#" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
                    <ion-icon name="help-circle-outline"></ion-icon> FAQs
                </a></li>
            @if($user != null)
            <li><a href="/fund-account" class="badge  justify-content-center badge-danger p-2  center-block">
                    <ion-icon name="wallet-outline"></ion-icon>
                    NGN{{ number_format(Auth::user()->wallet, 2) }}
                </a></li>
            @endif
        </ul>

        @if($user == null)


        <ul class="nav col-md-auto mb-2  justify-content-center">
            <li> <button type="button" data-toggle="modal" data-target="#login"
                    class="btn btn-outline-dark mr-2 me-2">Login</button></li>
            <li><button type="button" data-toggle="modal" data-target="#register" class="btn btn-dark">
                    <ion-icon name="person-add-outline"></ion-icon> Sign-up
                </button>
            </li>
        </ul>



        @else


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li> <a href="/profile" class="btn btn-secondary mr-2">
                    <ion-icon name="person-circle-outline"></ion-icon> My Account
                </a>
            </li>
            <li> <a href="/log-out" class="btn btn-dark">
                    <ion-icon name="log-out-outline"></ion-icon> Log Out
                </a></li>
        </ul>








        @endif


    </header>


    <!-- section start -->
    <section>
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
                                    <h4>{{ $title }}</h4>
                                    <h5 class="my-2">NGN{{ number_format($amount, 2) }}/Pcs</h5>
                                    <span class="badge badge-pill badge-success p-2"> {{ $stock }} / Pcs
                                        Available</span>

                                    <hr>



                                    <div class="border-product">
                                        <h6 class="product-title">Product details</h6>
                                        <p>{{$description}}</p>
                                    </div>


                                    <hr>

                                    <div class="border-product">

                                        <p my-3>
                                            <button class="btn btn-lg btn-danger"
                                                onclick="decrementQuantity()">-</button>
                                            <span class="p-2" id="quantity">1</span>
                                            <button class="btn btn-lg btn-success"
                                                onclick="incrementQuantity()">+</button>
                                            x NGN{{ $amount }} = NGN<span id="total">10.00</span>
                                        </p>

                                        <hr>

                                        <form action="/buy-now" method="POST">
                                            @csrf

                                            <input type="hidden" id="quantityInput" name="quantity" value="1">
                                            <input type="hidden" name="item_id" value="{{ $item_id }}">


                                            <button type="submit" class="btn btn-dark btn-lg">Buy
                                                now</button>
                                    </div>


                                    </form>



                                </div>


                            </div>
                        </div>





                    </div>




                    <div class="col-lg-6">


                        <div class="card">


                            <div class="card-body">

                                <div class="card-title text-danger">
                                    <h6>Product Instructions</h6>

                                </div>



                                <div class="border-product">
                                    <p>{{$inst}}</p>

                                </div>



                            </div>
                        </div>










                    </div>


                </div>




            </div>





        </div>
        </div>
        </div>
    </section>
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


</body>


</html>
