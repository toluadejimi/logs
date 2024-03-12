<!doctype html>
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
    <title>Log Marketplace - BEST LOG SITE</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Log Marketplace</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{ url('') }}/public/concept/assets/images/avatar-1.jpg" alt=""
                                class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">


                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="admin-dashboard"><i
                                    class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                    class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/users" aria-controls="submenu-2"><i
                                    class="fa fa-fw fa-rocket"></i>Users</a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="products"><i class="fas fa-fw fa-chart-pie"></i>Products</a>

                        </li>


                        <li class="nav-item ">
                            <a class="nav-link" href="caterogies"><i
                                    class="fab fa-fw fa-wpforms"></i>Categories</a>


                        </li>

                        <li class="nav-item ">
                            <a class="nav-link active" href="coupon"><i
                                    class="fab fa-fw fa-wpforms"></i>Coupon</a>


                        </li>


                    </ul>


                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Coupons </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"
                                                                       class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->


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


                <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <h5>Add new Coupon</h5>

                                <form action="/new-coupon" method="POST">
                                    @csrf

                                    <div class="row">

                                        <div class="col">
                                            <div class="my-2">
                                                <label>Coupon Code</label>
                                                <input class="form-control" name="coupon_code" required type="text"
                                                       autofocus
                                                       placeholder="Enter your Code">
                                            </div>

                                        </div>


                                        <div class="col">
                                            <div class="my-2">
                                                <label>Percentage %</label>
                                                <input class="form-control" name="amount" required type="number"
                                                       autofocus
                                                       placeholder="0.00">
                                            </div>

                                        </div>

                                    </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>


                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Coupon</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $coupons_count }}</h1>
                                    </div>


                                </div>

                                <button type="button" data-toggle="modal" data-target="#addnew"
                                        class="btn btn-sm btn-dark"> Add New
                                </button>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Used</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $coupons_used }}</h1>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-dark"> {{ number_format($coupons_used_amount, 2) }}%
                                </button>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Pending</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $coupons_pending }}</h1>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-dark"> {{ number_format($coupons_pending_amount, 2) }}%
                                </button>
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">


                            <div class="card">
                                <div class="card-body ">


                                    <div class="card-title">
                                        All Coupons
                                    </div>

                                    <table class="table table-sm table-responsive-sm">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Code</th>
                                            <th scope="col">Percentage %</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach ($coupons as $data)

                                            <td>
                                                {{$data->coupon_code}}
                                            </td>

                                            <td>
                                                {{number_format($data->amount, 2)}}
                                            </td>


                                            @if($data->status == 0)
                                                <td>
                                                    <span class="badge badge-success text-white">Active</span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="badge badge-danger text-white">Inactive</span>
                                                </td>
                                            @endif


                                            <td>
                                                <a href="/delete-coupon?id={{ $data->id }}"
                                                   class="btn btn-sm btn-danger">Delete</a>

                                                <button type="button" data-toggle="modal" data-target="#update{{ $data->id }}"
                                                        class="btn btn-sm btn-dark"> Update
                                                </button>
                                            </td>


                                                <div class="modal fade" id="update{{ $data->id }}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                <h5>Update Coupon</h5>

                                                                <form action="/update-coupon?id={{$data->id}}" method="POST">
                                                                    @csrf

                                                                    <div class="row">

                                                                        <div class="col">
                                                                            <div class="my-2">
                                                                                <label>Coupon Code</label>
                                                                                <input class="form-control" name="coupon_code" required type="text"
                                                                                       autofocus value="{{$data->coupon_code}}">
                                                                            </div>

                                                                        </div>


                                                                        <div class="col">
                                                                            <div class="my-2">
                                                                                <label>Percentage %</label>
                                                                                <input class="form-control" name="amount" required type="text"
                                                                                       autofocus value="{{$data->amount}}">
                                                                            </div>

                                                                        </div>


                                                                        <div class="col-6">
                                                                            <div class="my-2">
                                                                                <label>Status</label>
                                                                                <select class="form-control" name="status" required>
                                                                                    <option value="0">Activate</option>
                                                                                    <option value="2">Deactivate</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Update</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                                                        </button>
                                                                    </div>


                                                                </form>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                        </tbody>


                                        @endforeach


                                    </table>


                                </div>


                            </div>


                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2018 Log Marketplace. All rights reserved. Dashboard by <a
                        href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ url('') }}/public/concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="{{ url('') }}/public/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="{{ url('') }}/public/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="{{ url('') }}/public/concept/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="{{ url('') }}/public/concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="{{ url('') }}/public/concept/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="{{ url('') }}/public/concept/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
