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


</head>
<body>



        <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


            <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">
                <strong class=" ">LOG MARKETPLACE</strong>
            </a>



            <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center text-white  mb-md-0">
                <li><a href="/" class="nav-link badge badge-dark text-white px-2 p-2 mr-2">
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
                                <label>Usename</label>
                                <input class="form-control" name="username" required type="text" autofocus
                                    placeholder="Enter your username">
                            </div>

                            <div class="my-2">
                                <label>Email</label>
                                <input class="form-control" name="email" required type="email" autofocus
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
                                <label>Email</label>
                                <input class="form-control" name="email" required type="email" autofocus
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



        <div class="shadow"></div>
        <script src="js/pages/header.min.js%3Fv=1.25" async></script>
        <section class="soc-category" id="content">





            <div class="wrap-breadcrumbs">
                <div class="container">
                    <div class="block" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">

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


                    <div class="row">


                        <div class="col-3 mb-4">


                            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                                <a href="/"
                                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">


                                    <span class="fs-4">Username -:{{ Auth::user()->username }}</span>

                                </a>
                                <span class="fs-4">Email -: {{ Auth::user()->email }}</span>

                                <hr>
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active" aria-current="page">
                                            <ion-icon name="archive-outline"></ion-icon>
                                            My orders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/fund-wallet" class="nav-link text-white">
                                            <ion-icon name="wallet-outline"></ion-icon>
                                            Fund Wallet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/change-password" class="nav-link text-white">
                                            <ion-icon name="key-outline"></ion-icon>
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://t.me/logsmarkeplace" class="nav-link text-white">
                                            <ion-icon name="help-circle-outline"></ion-icon>
                                            Support
                                        </a>
                                    </li>


                                    <li>
                                        <a href="https://palashsmm.com" class="nav-link text-white">
                                            <ion-icon name="help-circle-outline"></ion-icon>
                                            Boost account
                                        </a>
                                    </li>



                                </ul>
                                <hr>

                            </div>

                        </div>


                        <div class="col-lg-9">

                            <div class="card">
                                <div class="card-body ">

                                    <div class="card-title">
                                        All Orders
                                    </div>

                                    <table class="table table-sm table-responsive-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Data</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">QTY</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date/Time</th>


                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($orders as $data)

                                            <td class="small">
                                                <a class"btn btn-sm btn-black" href="{{$data->item}}"> CLICK HERE TO VIEW YOUR ORDER 👉🏽 DOWNLOAD.</a>
                                            </td>

                                            <td class="small">
                                                NGN{{ number_format($data->amount, 2) }}
                                            </td>

                                            <td class="small">
                                                {{ number_format($data->qty) }}
                                            </td>

                                            <td>
                                                <span class="badge badge-pill badge-success">Completed</span>
                                            </td>

                                            <td>
                                                {{ $data->created_at }}
                                            </td>






                                        </tbody>

                                        @endforeach


                                    </table>

                                    {{ $orders->links() }}

                                </div>


                            </div>



                        </div>



                    </div>










                </div>





            </div>
        </section>

    </div>
    </div>





    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a></li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li> <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Telegram</a></li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="terms" class="nav-link px-2 text-muted">Terms & Condition</a></li>
                <li class="nav-item"><a href="policy" class="nav-link px-2 text-muted">Policy</a></li>
                <li class="nav-item"><a href="rules" class="nav-link px-2 text-muted">Rules</a></li>

            </ul>
            <p class="text-center text-muted">&copy; 2023 Log Market Place</p>
        </footer>
    </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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

</body>

</html>
