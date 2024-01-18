<!DOCTYPE html>
<html lang="en">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('') }}/public/concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="{{ url('') }}/public/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Log Marketplace </title>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>  --}}


    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6533f1e0a84dd54dc48398a7/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();



    document.addEventListener("DOMContentLoaded", function () {
        // Simulate a 5-second delay
        setTimeout(function () {
            // Remove the loader after 5 seconds
                    // $('#warning').modal('show');

        }, 1000);

    });



    </script>

    <style>
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000cc;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .loader {
            max-width: 100%;
            /* Ensure the GIF doesn't exceed its natural size */
            max-height: 100vh;
            /* Ensure the GIF doesn't exceed the viewport height */
            width: auto;
            /* Allow the GIF to scale proportionally */
            height: auto;
            /* Allow the GIF to scale proportionally */
        }






        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            outline: 0;
            background-color: rgba(0, 0, 0, 0.343);
        }

        i {
            padding: 2px;
        }

        .child {
            width: 30px;
            height: 30px;
            /* Center horizontally*/
            position: center;
            margin: 0 auto;
        }
    </style>




</head>

<body>

    {{-- <div class="loader-wrapper">
        <img src="{{url('')}}/public/img/loader.gif" alt="Loading..." class="loader">
    </div> --}}



    <div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body border-0">

                    <div class="card border-0">

                        <div class="card-body border-0">

                            <h4 class="my-3 text-center"> Welcome to Log Marketplace</h4>
                            <p class="text-center"> The best site to shop social media accounts and services.
                            </p>
                            <p class="text-center"> For complaints/suggestions, text customer care here:
                            </p>
                            <p class="text-center"> Customer Care:<a href="https://t.me/logmarketplacee">Chat Customer
                                    Care</a>
                            <p class="text-center"> WhatsApp Group:<a
                                    href="https://chat.whatsapp.com/I1DAA6YDWC8GjuQMU4Tn8I">Join Whatsapp Group</a>
                            </p>

                            <p class="text-center"> Telegram Group:<a href="https://t.me/logsmarkeplace">Join Telegram
                                    Group</a>
                            </p>

                            <p class="text-center"> DO NOT MISS AN UPDATE </p>
                            <p class="text-center"> Join our announcement group: </p>

                            <div class="d-flex justify-content-center">

                                <link
                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
                                    rel="stylesheet" />
                                <table class="">
                                    <tr class="mr-2">
                                        <td class="ml-2"><a href="https://t.me/logsmarkeplace"><i class="fa fa-telegram"
                                                    style="font-size:40px"></i></a></td>
                                        <td><a href="https://chat.whatsapp.com/I1DAA6YDWC8GjuQMU4Tn8I"><i
                                                    class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a></td>
                                    </tr>
                                </table>


                            </div>







                        </div>





                        </p>


                        <button type="button" class="test-white btn btn-danger btn-sm my-1" data-dismiss="modal">I
                            Understand</button>


                    </div>




                </div>


            </div>




        </div>

    </div>







    <style>
        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #000000;
            border-radius: 0.25rem;
        }
    </style>

    <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


        <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">

            <svg width="205" height="45" viewBox="0 0 305 45" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="305" height="45" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1_72" transform="matrix(0.000560992 0 0 0.00380228 -0.00853955 0)"/>
                </pattern>
                <image id="image0_1_72" width="1813" height="263" xlink:href="data:image/png;base64,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"/>
                </defs>
                </svg>






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
            <li><a href="rules" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
                    <ion-icon name="help-circle-outline"></ion-icon> Rules
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
            <li> <a href="/login" class="btn btn-outline-dark mr-2"> Login </a></li>
            <li> <a href="/register" class="btn btn-dark">Register</a></li>
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


    <div class="container">



        <div class="container">
            <div class="flex">

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


            </div>

        </div>


        <div class="flex">

            @if($url != null)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Item purchased successfully!</strong><a href="{{ $url }}"> CLICK HERE TO VIEW YOUR ORDER 👉🏽
                    DOWNLOAD.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif





            <strong>HI {{ Auth::user()->username ?? "User"}}, </strong>
            <p class="text-muted">what are you buying today?</p>


            <div class="row">
                <div class="col-5">
                    @if ($categories->count())
                    <div class="category-nav my-3">
                        <button class="category-nav__button" style="background: #10113D;">
                            <span class="icon me-1"><img src="{{ url('')}}/public/img/grid.png"
                                    alt="@lang('image')"></span><span class="search-text text-white">@lang('
                                Category')</span>
                            <span class="arrow"><i class="las la-angle-down"></i></span>
                        </button>
                        <ul class="dropdown--menu" style="background: #10113D;">
                            @foreach ($categories as $category)
                            <li class="dropdown--menu__item text-white">
                                <a href="allcatproduct?cat_id={{$category->id}}" class="dropdown--menu__link">
                                    {{$category->title}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col-7 d-lg-none d-md-none">
                    <div class="search-box style-two w-100 my-3">
                        <form action="do-search" class="search-form">
                            <input type="text" class="form--control pill" name="keyword"
                                placeholder="@lang('Search...')"
                            >
                            <button type="submit" class="search-box__button">
                                <span class="icon text-white"><ion-icon name="search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>





            {{-- Facebook --}}

            @foreach ($fbaged as $cat)
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                </ol>
            </nav>
            @endforeach


            <div class="card">


                <div class="card-body">


                    <table class="table table-sm table-responsive-sm">
                        <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                            <tr class>
                                <th style="border-radius: 10px 0px 0px 10px;"></th>
                                <th>Product</th>
                                <th>Price</th>
                                <th></th>
                                <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($fbaged_items as $data)
                            <td class="">
                                <a href="#" data-help="Click to read detailed description">
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                        width="20" loading="lazy">
                                </a>
                            </td>
                            <td class="small col-sm-12">
                                <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                    50, '...Show more')}}</a>
                            </td>
                            <td>
                            </td>
                            <td class="small">
                                NGN{{ number_format($data->amount, 2) }}
                            </td>
                            <td>
                                @if ($data->qty == 0)
                                <div>
                                    0 pcs.
                                    <button type="button" class="form-control" type="button" data-id="12005">
                                        <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                    </button>
                                </div>
                                @else
                                <form action="/item-view?id={{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                        <div data-help="Buy Now">
                                            {{ $data->qty }} pcs.
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            @endif
                        </tbody>

                        @endforeach



                    </table>


                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>



                </div>
            </div>






            {{-- FACEBOOK DATING --}}


            <div class="soc-bl">
                @foreach ($insta_cat as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($insta_items as $data)

                                <td class="">
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                            width="20" loading="lazy">
                                    </a>
                                </td>
                                <td class="small col-sm-12">
                                    <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                        50, '...Show more')}}</a>
                                </td>
                                <td>
                                </td>
                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        0 pcs.
                                        <button type="button" class="form-control" type="button" data-id="12005">
                                            <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                        </button>
                                    </div>
                                    @else
                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf
                                        <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                            <div data-help="Buy Now">
                                                {{ $data->qty }} pcs.
                                                <button type="submit" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>










                </div>




            </div>



            <div class="soc-bl">
                @foreach ($ot as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ot_items as $data)

                                <td class="">
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                            width="20" loading="lazy">
                                    </a>
                                </td>
                                <td class="small col-sm-12">
                                    <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                        50, '...Show more')}}</a>
                                </td>
                                <td>
                                </td>
                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        0 pcs.
                                        <button type="button" class="form-control" type="button" data-id="12005">
                                            <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                        </button>
                                    </div>
                                    @else
                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf
                                        <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                            <div data-help="Buy Now">
                                                {{ $data->qty }} pcs.
                                                <button type="submit" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>





            {{-- Twitter--}}

            <div class="soc-bl">
                @foreach ($tw as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tw_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                                     @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>





            {{-- Reedit--}}

            <div class="soc-bl">
                @foreach ($rd as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rd_items as $data)

                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>



            {{-- Mail--}}

            <div class="soc-bl">
                @foreach ($ml as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ml_items as $data)

                             <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>





                </div>




            </div>


            {{-- GV--}}

            <div class="soc-bl">
                @foreach ($gv as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gv_items as $data)

                                <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>




            {{-- Instagram--}}

            <div class="soc-bl">
                @foreach ($in as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($in_items as $data)

                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>


                </div>

            </div>




            {{-- TikTok--}}

            <div class="soc-bl">
                @foreach ($tk as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tk_items as $data)

                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>


                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>



                </div>




            </div>



            {{-- Linkden--}}

            <div class="soc-bl">
                @foreach ($ln as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ln_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>


                </div>




            </div>


            {{-- PVPN--}}

            <div class="soc-bl">
                @foreach ($pv as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pv_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>




            {{-- OTHERS--}}

            <div class="soc-bl">
                @foreach ($oth as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($oth_items as $data)



                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>
            </div>



            {{--SWEETEST OFFERS--}}

            <div class="soc-bl">
                @foreach ($swr as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($swr_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>







            {{--SNAP CHAT OFFERS--}}

            <div class="soc-bl">
                @foreach ($snap as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($snap_items as $data)
                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>

                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>


            {{--SNAP CHAT OFFERS--}}

            <div class="soc-bl">
                @foreach ($strem as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($strem_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                    @endif


                    </tbody>

                    @endforeach

                    </table>


                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>






                </div>




            </div>




            {{--RESELLER OFFER--}}

            <div class="soc-bl">
                @foreach ($resell as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                <tr class>
                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th></th>
                                    <th style="border-radius: 0px 10px 10px 0px;">Stock</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($resell_items as $data)


                                        <td class="">
                                            <a href="#" data-help="Click to read detailed description">
                                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                                    width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            NGN{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button" data-id="12005">
                                                    <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                            @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control" type="button" data-id="12005">
                                                            <ion-icon class="" style="border: 0px;" name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>


                    <form action="/allcatproduct" method="GET">
                        @csrf
                        <div id="subcat_48" class="collapse"></div>

                        <input hidden name="cat_id" value="{{ $cat->id }}">
                        <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">View
                            all <ion-icon name="arrow-forward-outline">
                            </ion-icon></button>
                    </form>


                </div>




            </div>


        </section>










        <div class="container">

            <div class="card p-3">
                <div class="card-body p-3">

                </div>


                <h5>Why do people Buy social media accounts?</h5>
                <p class="small">A solid social media account can be a powerful tool for branding and marketing.</p>
                <p class="small">A good social media account has an active and responsive community fired up by the
                    topic or niche that brought them together.</p>
                <p class="small">Sometimes it makes sense to buy or sell a social media account depending on where
                    you are with your business and how goals have changed and evolved.</p>
                <p class="small">There is a thriving market for buying/selling social media accounts, but it’s
                    important to know what the best platforms are. </p>

                <p class="small"><strong>Let’s dig in!</strong></p>

            </div>

        </div>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="https://t.me/logsmarkeplace"
                            class="nav-link px-2 text-muted">Telegram</a></li>
                    <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="terms" class="nav-link px-2 text-muted">Terms & Condition</a></li>
                    <li class="nav-item"><a href="policy" class="nav-link px-2 text-muted">Policy</a></li>
                    <li class="nav-item"><a href="rules" class="nav-link px-2 text-muted">Rules</a></li>
                </ul>

                </ul>
                <p class="text-center text-muted">&copy; 2023 Log MarketPlace</p>
            </footer>
        </div>






    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #000000;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://t.me/logmarketplacee" class="float" target="_blank">
        <i class="fa fa-comment my-float"></i>
    </a>


    <script>
        $('.category-nav__button').on('click', function () {
            $('.category-nav__button .arrow').toggleClass('rotate');
            $('.dropdown--menu').toggleClass('active');
          });

          $(document).on('click', function (event) {
            var target = $(event.target);

            if (!target.closest('.category-nav__button').length && !target.closest('.dropdown--menu').length) {
              $('.dropdown--menu').removeClass('active');
            }
          });
    </script>

</body>

</html>
