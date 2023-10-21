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
    <title>Log Marketplace - Bootstrap 4 Admin Dashboard Template</title>
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
                                <a class="nav-link active" href="products"><i
                                        class="fas fa-fw fa-chart-pie"></i>Products</a>

                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="caterogies"><i class="fab fa-fw fa-wpforms"></i>Categories</a>


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
                                <h2 class="pageheader-title">Products</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/admin-dashboard"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Products</li>
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



                    <div class="modal fade" id="addnewfr" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <h5>Add Front Product</h5>

                                    <form action="/add-front-product" method="POST" enctype="multipart/form-data">
                                        @csrf


                                        <div class="row">

                                            <div class="col-6 my-4">
                                                <label>Choose Product</label>
                                                <select class="form-control" name="pro_id" required required>

                                                    <option value="">Choose a Product</option>
                                                    @foreach ($pr_list as $data )
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach

                                                </select>



                                            </div>

                                            <div class="col-6 my-4">
                                                <label>Choose Category</label>
                                                <select class="form-control" name="cat_id" required required>

                                                    <option value="">Choose a Product</option>
                                                    @foreach ($cat as $data )
                                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                                    @endforeach

                                                </select>



                                            </div>


                                            <div class="col-6 my-4">
                                                <label>Amount(NGN)</label>
                                                <input type="number" class="form-control" required name="amount"
                                                    autofocus>

                                            </div>


                                            <div class="col-6 my-4">
                                                <label>Product Icon</label>
                                                <input type="file" name="image">

                                            </div>




                                        </div>


                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Add</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>


                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <h5>Add new Product</h5>

                                    <form action="/add-new-product" method="POST" enctype="multipart/form-data">
                                        @csrf


                                        <div class="row">

                                            <div class="col-4 my-4">
                                                <label>Choose Category</label>
                                                <select class="form-control" name="cat_id" required required>

                                                    <option value="">Choose a category</option>
                                                    @foreach ($cat as $data )
                                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                                    @endforeach

                                                </select>



                                            </div>

                                            <div class="col-4 my-4">
                                                <label>Choose Product</label>
                                                <select class="form-control" name="pr_id" required required>

                                                    <option value="">Choose a product</option>
                                                    @foreach ($pr_list as $data )
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach

                                                </select>



                                            </div>





                                            <div class="col-2 my-4">
                                                <label>Qty</label>
                                                <input class="form-control" required name="qty" autofocus>

                                            </div>


                                            <div class="col-12 my-4">
                                                <label>Choose File</label>
                                                <input type="file" name="file">

                                            </div>




                                        </div>


                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Add</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>


                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="addnewpr" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <h5>Add new Product</h5>

                                    <form action="/add-new-pr" method="POST">
                                        @csrf


                                        <label>Enter Title</label>
                                        <input class="form-control" required name="title" autofocus>



                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Add</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>


                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>














                    {{--

                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Google Voice</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $in }}</h1>
                                        </div>


                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Facebook</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $in }}</h1>
                                        </div>


                                    </div>

                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Instagram</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $in }}</h1>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Talkatone</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $in }}</h1>
                                        </div>


                                    </div>

                                </div>
                            </div>




                        </div>





                    </div>
                    --}}


                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">



                            <div class="card">
                                <div class="card-body ">


                                    <button type="button" data-toggle="modal" data-target="#addnew"
                                        class="btn btn-sm btn-dark my-3"> Add New Stock</button>


                                    <button type="button" data-toggle="modal" data-target="#addnewpr"
                                        class="btn btn-sm btn-success my-3"> Add New Product</button>


                                    <button type="button" data-toggle="modal" data-target="#addnewfr"
                                        class="btn btn-sm btn-warning my-3"> Add New Front Product</button>




                                    <div class="card-title">
                                        All Available Stock
                                    </div>

                                    <table class="table table-sm table-responsive-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($pr as $data)

                                            <td>
                                                {{$data->name}}
                                            </td>

                                            <td>
                                                {{$data->product_id}}
                                            </td>


                                            <td>
                                                <a href="/delete-main?id={{ $data->id }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td>



                                            {{-- <td>
                                                <a href="/delete-cat?id={{ $data->id }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td> --}}




                                        </tbody>



                                        @endforeach

                                    </table>

                                    <div class="d-flex">
                                        {!! $pr->links() !!}
                                    </div>



                                </div>


                            </div>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">



                            <div class="card">
                                <div class="card-body ">

                                    <div class="card-title">
                                        All Items
                                    </div>

                               

                                    <table id="myTabl" class="table table-sm table-responsive-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($item as $data)

                                            <tr>

                                                
                                            </tr>

                                            <td>
                                                {{$data->id}}
                                            </td>

                                            <td>
                                                {{$data->name}}
                                            </td>


                                            <td>
                                                <a href="/delete-pr?id={{ $data->id }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td>




                                        </tbody>



                                        @endforeach


                                    </table>


                                    <div class="d-flex">
                                        {!! $item->links() !!}
                                    </div>


                                </div>


                            </div>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">



                            <div class="card">
                                <div class="card-body ">

                                    <div class="card-title">
                                        All Front Product
                                    </div>

                                    <input class="form-control my-3" type="text" id="searchInput"
                                        placeholder="Search by Name">

                                    <table id="myTable" class="table table-sm table-responsive-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                {{-- <th scope="col">ID</th> --}}
                                                <th scope="col">Title</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Edit</th>





                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($front_pr as $data)

                                            <tr>

                                                
                                            </tr>

                                              
                                         
                                            <td>
                                                {{$data->title}}
                                            </td>

                                      
                                     
                                            <td>
                                                {{number_format($data->amount, 2)}}
                                            </td>

                                            <td>
                                                {{$data->qty}}
                                            </td>

                                            <td>
                                                {{$data->cat_id}}
                                            </td>



                                            <td>
                                                <a href="/delete-front-pr?id={{ $data->id }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td>


                                            <td><button type="button" data-toggle="modal"
                                                    data-target="#register{{  $data->id }}" class="btn btn-success">
                                                    <ion-icon name="person-add-outline"></ion-icon> Edit
                                                </button>

                                            </td>



                                            <div class="modal fade p-3" id="register{{  $data->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <h5 class="my-3">Edit Product</h5>

                                                            <form action="/edit-front-pr" method="POST">
                                                                @csrf

                                                                <label>Title</label>
                                                                <input class="form-control" name="title" required
                                                                    type="text" value="{{ $data->title }}">

                                                                <input class="form-control" name="id" required
                                                                    type="text" hidden value="{{ $data->id }}">


                                                                <div class="my-2">

                                                                    <label>Amount</label>
                                                                    <input class="form-control" name="amount" required
                                                                        type="number" value="{{ $data->amount }}">



                                                                    <label>Quantity</label>
                                                                    <input class="form-control" name="qty" required
                                                                        type="number" value="{{ $data->qty }}">


                                                                    <input hidden class="form-control mb-5" name="id"
                                                                        value="{{ $data->id }}" required type="number"
                                                                        autofocus>


                                                                </div>


                                                                <div class="my-4">
                                                                    <button class="btn btn-success" required
                                                                        type="submit" autofocus> Edit </button>
                                                                </div>






                                                            </form>


                                                        </div>

                                                        

                                                    </div>
                                                </div>
                                            </div>



                                        </tbody>



                                        @endforeach


                                    </table>


                                    {{ $front_pr->links() }}


                                </div>


                            </div>
                        </div>


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
                    Copyright © 2023 Log Marketplace. All rights reserved. Dashboard by <a
                        href="https://colorlib.com/wp/">LOGMARKET</a>.
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


    <script>
        // Get the input element and table
        const input = document.getElementById('searchInput');
        const table = document.getElementById('myTable');
        const rows = table.getElementsByTagName('tr');
    
        // Add an event listener to the input element
        input.addEventListener('keyup', function() {
            const filter = input.value.toLowerCase();
            
            // Loop through all table rows and hide those that don't match the search query
            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const name = row.getElementsByTagName('td')[0];
                if (name) {
                    const text = name.textContent || name.innerText;
                    if (text.toLowerCase().indexOf(filter) > -1) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        });
    </script>


    <script>
        // Get the input element and table
        const input = document.getElementById('searchInpu');
        const table = document.getElementById('myTabl');
        const rows = table.getElementsByTagName('tr');
    
        // Add an event listener to the input element
        input.addEventListener('keyup', function() {
            const filter = input.value.toLowerCase();
            
            // Loop through all table rows and hide those that don't match the search query
            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const name = row.getElementsByTagName('td')[0];
                if (name) {
                    const text = name.textContent || name.innerText;
                    if (text.toLowerCase().indexOf(filter) > -1) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        });
    </script>


</body>

</html>