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


    <div class="container">

        <div class="card p-3">
            <div class="card-body p-3">

            </div>

            <h3>PRIVACY POLICY</h3>

             
            <p>We go to great lengths to protect our user’s privacy. Here are some of the things we promise to do:<br><br>
            - We will never publicize your email, password or any personal contact information.<br>
            - We will never sell or offer your information to any third parties under any circumstances or laws.<br>
            - We may use cookies to store your login session in order to log you in automatically.<br>
            - We will never spam or use your email to send anything unrelated to Logmarketplace.</p><br><br>


            <strong>Retaining and Securing Your Information</strong><br>
            We take appropriate security measures designed to protect against unauthorized access to or unauthorized
            alteration, disclosure or destruction of data. <br>These include internal reviews of our data collection,
            storage, and processing practices, and introducing security measures, including physical security measures,
            to guard against unauthorized access to systems where we store personal data.<br><br>
            We restrict access to personal information to log marketplace employees, service providers and agents who
            need to know that information in order to operate, develop or improve our services. These individuals are
            bound by confidentiality obligations.<br><br>

            <strong>Third Party Sites</strong>
            While using the Site you may encounter links to third party websites. Log marketplace is not responsible for
            these sites and has no responsibility or liability whatsoever with regard to privacy matters or any other
            legal matter with respect to such sites. We encourage you to carefully read the privacy policies and the
            terms of use or service of such websites. Our terms of use and our privacy policy apply only to information
            collected by us in accordance with this policy.
        </div>

    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a>
                </li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="terms" class="nav-link px-2 text-muted">Terms & Condition</a></li>
                <li class="nav-item"><a href="policy" class="nav-link px-2 text-muted">Policy</a></li>
                <li class="nav-item"><a href="rules" class="nav-link px-2 text-muted">Rules</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Log MarketPlace</p>
        </footer>
    </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


</html>
