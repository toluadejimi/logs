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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD8JTK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="main-wrapper black">
        {{-- <header>
            <div class="hdr-top">
                <div class="container">


                    <div class="flex">
                        <p>
                            AccsMarket - Accounts store </p>
                        <p class="xs-vis">
                            Accounts store </p>
                        <div id="navigation_right">


                            <div id="head_mob_navigation">


                            </div>


                        </div>

                    </div>


                </div>
            </div>

            <div class="hdr-bottom">
                <div class="container">
                    <div class="flex">
                        <div id="head" style="width: 100%">




                        </div>
                    </div>
                </div>
            </div>
        </header> --}}



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














        <div class="shadow"></div>
        <script src="js/pages/header.min.js%3Fv=1.25" async></script>
        <section class="soc-category" id="content">
            <div itemscope itemtype="https://schema.org/WebSite">
                <meta itemprop="name" content="accsmarket" />
                <meta itemprop="alternateName" content="accs-market" />
                <meta itemprop="alternateName" content="accs market" />
            </div>




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

                                    @foreach ($items as $data)

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
                                                <img src="{{ url('') }}/public/img/ic-subscribe.png" height="18"
                                                    width="21" alt>
                                            </button>
                                        </div>



                                        @else


                                        <form action="/item-view?id={{ $data->id }}" method="POST">
                                            @csrf

                                            <div class="subscribe-cell" data-help="Buy Now">
                                                <button type="submit" class="form-control" type="button"
                                                    data-id="12005">
                                                    {{-- <img src="{{ url('') }}/public/img/ic-basket.png" height="18"
                                                        width="21" alt> --}}

                                                    <ion-icon name="cart-outline"></ion-icon> Buy

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

            </div>
    </div>


    </section>

    <section>



        <div class="container my-3">
            <div class="flex">

                <div class="card">

                    <div class="card-body p-4">

                        <h5>ACQUISITION OF SOCIAL MEDIA ACCOUNTS & WHAT YOU SHOULD KNOW ABOUT IT</h5>
                        <p class="small">Regarding Social Media (SOMIA), it is evident that this is an effective and one
                            of
                            the
                            most
                            potent means capable of pitching in almost every business industry and market. Presently all
                            the
                            marketers make use Social Media a platform for steering customers. There are some
                            difficulties you
                            can meet when choosing the right Social Media sites for marketing purposes. It wont be
                            confusing
                            if you initially define the Social Media requirements that are to be used and choose the
                            right
                            supplier of Social Media accounts. The important thing is that nowadays people are highly
                            engaged with all types of SOMIA, and before to buy Social Media accounts first, you need to
                            know
                            which one is best for you. And after that, some consideration should be given to the
                            following
                            moments:</p>
                        <ul>
                            <li>Cost of Social Media accounts</li>
                            <li>How frequently should you post on chosen SOMIA</li>
                            <li>Message format</li>
                            <li>The way to get maximum profit from using Social Media</li>
                        </ul>
                        <p class="small">On our website, you will get to know a lot of useful information about the
                            contemporary
                            Social
                            Media sites profitable for Marketing on Social Media.</p>
                        <p class="small">It is essential to take into consideration all the above factors before buying
                            accounts of
                            modern
                            Social Media.</p>
                        <h5>WHAT TO ASK BEFORE BUYING ACCOUNTS</h5>
                        <p class="small">First of all, you should ask:</p>
                        <p class="small">- Where most of the target audiences are?</p>
                        <p class="small">It is essential to determine where the target audiences are spending their
                            time. This could
                            be
                            Instagram or Facebook or Twitter, whatever, but the thing is that purchased accounts with
                            followers are to be profitable in marketing. They have to be true but not fake accounts.</p>
                        <p class="small">- Where is the activity of accounts reflected?</p>
                        <p class="small">The inactive accounts of Social Media are useless, even if they are accessible
                            and well
                            promoted.
                            It is recommended to buy only active accounts. For example, lets take stats of Facebook,
                            according to a search engine journal, only 1.20 billion users are active on this Social
                            Media.
                        </p>
                        <p class="small">- What are the search results of followers?</p>
                        <p class="small">Try to determine what the users are searching for on SOMIA. This will bring you
                            closer to
                            profit.
                        </p>
                        <p class="small">- What Social Media meets your niche better than others?</p>
                        <p class="small">It is worth considering that you may not get leads from Social Media used by
                            other business
                            owners. Therefore, choose the Social Media sites that correspond to your niche.</p>
                        <h5>SOCIAL MEDIA ACCOUNTS FOR SALE - SUCCESSFUL SEARCHES</h5>
                        <p class="small">If you are looking for a reputed company to buy accounts, ACCSmarket.com is the
                            right
                            choice.
                            On
                            our website, you can find best, reliable, and persistent Social Media accounts at an
                            affordable
                            price.</p>
                        <p class="small">Choose and buy accounts Instagram, Facebook, Twitter, Reddit, Gmail, Yahoo, and
                            many others
                            for
                            your Social Media Marketing goals!</p>
                    </div>

                </div>

            </div>
        </div>
    </section>








    </div>



    <script src="https://openfpcdn.io/fingerprintjs/v3/umd.min.js"></script>
    <script src="js/helpers/fingerprint2.js"></script>





    <script src="js/helpers/jquery-3.6.4.min.js"></script>
    <script src="js/md5.min.js"></script>
    <script>
        var styles = [
        '/css/helpers/jquery-ui.min.css',
        '/css/helpers/font-awesome.min.css',
                '/css/helpers/tooltipster.bundle.min.css'
    ];
    for (var styleKey in styles) {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = styles[styleKey];
        document.head.append(link);
    }
    </script>
    <script src="js/helpers/swfobject-2.2.min.js"></script>
    <script src="js/helpers/evercookie.min.js"></script>
    <script src="js/helpers/bootstrap.min.js"></script>
    <script src="js/helpers/select2.full.min.js" defer></script>
    <script src="js/helpers/jquery-ui.min.js" defer></script>
    <script src="js/helpers/jquery.easing.1.3.js" defer></script>
    <script src="js/helpers/select2/i18n/ru.js" defer></script>
    <script src="js/order.js%3Fv=1.13"></script>
    <script src="js/common.min.js%3Fv=4.68" defer></script>
    <script src="js/default.min.js%3Fv=2.07" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"></script>
    <script src="js/bid.min.js%3Fv=1.12" defer></script>
    <script src="js/helpers/tooltipster.bundle.min.js" defer></script>
    <script>
        (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46180620 = new Ya.Metrika({
                    id:46180620,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/46180620" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
</body>

</html>
