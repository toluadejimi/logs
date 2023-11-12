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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


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
    </script>


    <style>
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


    <script type="text/javascript">
        $(window).on('load', function() {
            $('#warning').modal('show');
        });
    </script>


</head>

<body>


    <div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body border-0">

                    <div class="card border-0">

                        <div class="card-body border-0">

                            <h4 class="my-3 text-center"> Welcome to Log Marketplace</h4>
                            <p class="text-center"> Your no 1 site for social/ digital accounts at the best prices to
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
                                        <td><a href="https://chat.whatsapp.com/I1DAA6YDWC8GjuQMU4Tn8I"><i class="fa fa-whatsapp fa-3x"
                                                    aria-hidden="true"></i></a></td>
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
            <strong class=" ">LOG MARKETPLACE</strong>
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



            {{-- Facebook --}}

            @foreach ($fbaged as $cat)
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                </ol>
            </nav>
            @endforeach


            <div class="card">
                <div class="card-body">


                    <table class="table table-sm table-responsive-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($fbaged_items as $data)


                            <td>
                                <a href="#" data-help="Click to read detailed description">
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                        width="20" loading="lazy">
                                </a>
                            </td>

                            <td class="small">
                                {{$data->title}}
                            </td>

                            <td class="small">
                                NGN{{ number_format($data->amount, 2) }}
                            </td>


                            <td class="small bold">{{ $data->qty }} pcs.</td>
                            <td>
                                @if ($data->qty == 0)
                                <div>
                                    <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                </div>



                                @else


                                <form action="/item-view?id={{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                        <div data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>
                                                {{-- <img src="{{ url('') }}/public/img/ic-basket.png" height="18"
                                                    width="21" alt> --}}
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </td>

                            @endif


                        </tbody>

                        @endforeach


                    </table>



                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all <ion-icon name="arrow-forward-outline">
                    </ion-icon></button>
            </form>



            {{-- FACEBOOK DATING --}}


            <div class="soc-bl">
                @foreach ($insta_cat as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($insta_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                {{-- <img src="{{ url('') }}/public/img/ic-basket.png" height="18"
                                                    width="21" alt> --}}

                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>









                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>





            {{-- OTHER COUNTRIES FACEBOOK --}}

            <div class="soc-bl">
                @foreach ($ot as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ot_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>




            {{-- Twitter--}}

            <div class="soc-bl">
                @foreach ($tw as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tw_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>








            {{-- Reedit--}}

            <div class="soc-bl">
                @foreach ($rd as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rd_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>

            {{-- Mail--}}

            <div class="soc-bl">
                @foreach ($ml as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ml_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="30" width="35" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>


            {{-- GV--}}

            <div class="soc-bl">
                @foreach ($gv as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gv_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>



            {{-- Instagram--}}

            <div class="soc-bl">
                @foreach ($in as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($in_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>


                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>
                </div>

            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>


            {{-- TikTok--}}

            <div class="soc-bl">
                @foreach ($tk as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($tk_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>


            {{-- Linkden--}}

            <div class="soc-bl">
                @foreach ($ln as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($ln_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>

            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>



            {{-- PVPN--}}

            <div class="soc-bl">
                @foreach ($pv as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pv_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>




            {{-- OTHERS--}}

            <div class="soc-bl">
                @foreach ($oth as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($oth_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>




            {{--SWEETEST OFFERS--}}

            <div class="soc-bl">
                @foreach ($swr as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($swr_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>


            {{--SNAP CHAT OFFERS--}}

            <div class="soc-bl">
                @foreach ($snap as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($snap_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>




            {{--SNAP CHAT OFFERS--}}

            <div class="soc-bl">
                @foreach ($strem as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($strem_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>




            {{--RESELLER OFFER--}}

            <div class="soc-bl">
                @foreach ($resell as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($resell_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>



            {{--SPECIAL--}}

            <div class="soc-bl">
                @foreach ($special as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $cat->title}}</li>

                    </ol>
                </nav>
                @endforeach



                <div class="card">
                    <div class="card-body">

                        <table class="table table-sm table-responsive-sm">
                            <thead class="thead-dark border border-warning">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($special_items as $data)

                                <td>
                                    <a href="#" data-help="Click to read detailed description">
                                        <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>

                                <td class="small">
                                    {{$data->title}}
                                </td>

                                <td class="small">
                                    NGN{{ number_format($data->amount, 2) }}
                                </td>


                                <td class="small bold">{{ $data->qty }} pcs.</td>
                                <td>
                                    @if ($data->qty == 0)
                                    <div>
                                        <img src="{{ url('') }}/public/img/out.png" height="45" width="120" alt>
                                    </div>



                                    @else


                                    <form action="/item-view?id={{ $data->id }}" method="POST">
                                        @csrf

                                        <div class="subscribe-cell" data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button" data-id="12005">
                                                <ion-icon class="text-success" name="cart-outline"></ion-icon>

                                            </button>
                                        </div>
                    </div>

                    </form>
                    </td>

                    @endif


                    </tbody>

                    @endforeach

                    </table>





                </div>




            </div>
            <form action="/allcatproduct" method="GET">
                @csrf
                <div id="subcat_48" class="collapse"></div>

                <input hidden name="cat_id" value="{{ $cat->id }}">
                <button type="submit" data-cat="48" data-collapse="#subcat_48" data-name="Hide accounts"
                    class="btn  btn-warning my-3 btn-sm btn-block">View all</button>
            </form>



































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



</body>






</html>
