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

</head>

<body>



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




      {{-- Register Modal --}}

      <!-- Modal -->
      <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">

                  <div class="modal-body">
                      <h5>Register</h5>

                      <form action="/register" method="POST">
                          @csrf

                          <div class="my-2">
                              <label>Username</label>
                              <input class="form-control" name="username" required type="text" autofocus
                                  placeholder="Enter your username">
                          </div>

                          <div class="my-2">
                              <label>Email</label>
                              <input class="form-control" name="email" required type="text" autofocus
                                  placeholder="Enter your Email Address">
                          </div>

                          <div class="my-2">
                              <label>Password</label>
                              <input class="form-control" name="password" required type="text" autofocus
                                  placeholder="Enter your Password">
                          </div>

                          <div class="my-2">
                              <label>Confirm Password</label>
                              <input class="form-control" name="password_confirmation" required type="text" autofocus
                                  placeholder="Confirm your Password">
                          </div>


                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Register</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>


                      </form>


                  </div>

              </div>
          </div>
      </div>

      {{-- Login Modal --}}

      <!-- Modal -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">

                  <div class="modal-body">

                      <h2>Login</h2>
                      <form action="/login" method="POST">
                          @csrf

                          <div class="my-2">
                              <label>Username</label>
                              <input class="form-control" name="email" required type="text" autofocus
                                  placeholder="Enter your Email">
                          </div>

                          <div class="my-2">
                              <label>Password</label>
                              <input class="form-control" name="password" required type="text" autofocus
                                  placeholder="Enter your password">
                          </div>



                          <a href="/forgot-password" class="mt-3 mb-3 text-dark">Forgot password</a>


                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Login</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>


                      </form>



                  </div>

              </div>
          </div>
      </div>



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
                                <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                    <button class="form-control" type="button" data-id="12005">
                                        <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21"
                                            alt>
                                    </button>
                                </div>



                                @else


                                <form action="/item-view?id={{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                        <div data-help="Buy Now">
                                            <button type="submit" class="form-control" type="button"
                                                data-id="12005">
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
                                <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                    <button class="form-control" type="button" data-id="12005">
                                        <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21"
                                            alt>
                                    </button>
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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
                                <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}" height="20"
                                    width="35" loading="lazy">
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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
                            <div class="subscribe-cell" data-help="Subscribe to newsletter">
                                <button class="form-control" type="button" data-id="12005">
                                    <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18" width="21" alt>
                                </button>
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

            <h5>WHAT TO ASK BEFORE BUYING ACCOUNTS</h5>
            <p class="small">First of all, you should ask:</p>
            <p class="small">- Where most of the target audiences are?</p>
            <p class="small">It is essential to determine where the target audiences are spending their time. This could
                be
                Instagram or Facebook or Twitter, whatever, but the thing is that purchased accounts with
                followers are to be profitable in marketing. They have to be true but not fake accounts.</p>
            <p class="small">- Where is the activity of accounts reflected?</p>
            <p class="small">The inactive accounts of Social Media are useless, even if they are accessible and well
                promoted.
                It is recommended to buy only active accounts. For example, lets take stats of Facebook,
                according to a search engine journal, only 1.20 billion users are active on this Social Media.
            </p>
            <p class="small">- What are the search results of followers?</p>
            <p class="small">Try to determine what the users are searching for on SOMIA. This will bring you closer to
                profit.
            </p>
            <p class="small">- What Social Media meets your niche better than others?</p>
            <p class="small">It is worth considering that you may not get leads from Social Media used by other business
                owners. Therefore, choose the Social Media sites that correspond to your niche.</p>

        </div>

    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a></li>
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
</body>






</html>
