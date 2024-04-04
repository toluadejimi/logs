@extends('layout.main')
@section('content')

    <div class="container min-vh-100>
        <div class=" flex">

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
    @if (session()->has('order'))
        <div class="alert alert-success">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Item purchased successfully!</strong><a href="{{ $url_data }}"> CLICK HERE TO VIEW YOUR
                    ORDER 👉🏽
                    DOWNLOAD.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif


    <div class="d-flex justify-content-center">

        <svg width="70" height="70" viewBox="0 0 214 209" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="107" cy="104.5" rx="107" ry="104.5" fill="#D9D9D9"/>
            <path d="M146.769 80.84H128.692C128.692 75.0477 126.407 69.4926 122.339 65.3968C118.271 61.301 112.753 59 107 59C101.247 59 95.7293 61.301 91.6612 65.3968C87.5931 69.4926 85.3077 75.0477 85.3077 80.84H67.2308C65.313 80.84 63.4739 81.607 62.1178 82.9723C60.7618 84.3375 60 86.1892 60 88.12V142.72C60 144.651 60.7618 146.502 62.1178 147.868C63.4739 149.233 65.313 150 67.2308 150H146.769C148.687 150 150.526 149.233 151.882 147.868C153.238 146.502 154 144.651 154 142.72V88.12C154 86.1892 153.238 84.3375 151.882 82.9723C150.526 81.607 148.687 80.84 146.769 80.84ZM92.5385 99.04C92.5385 100.005 92.1576 100.931 91.4795 101.614C90.8015 102.297 89.8819 102.68 88.9231 102.68C87.9642 102.68 87.0446 102.297 86.3666 101.614C85.6886 100.931 85.3077 100.005 85.3077 99.04V91.76C85.3077 90.7946 85.6886 89.8688 86.3666 89.1861C87.0446 88.5035 87.9642 88.12 88.9231 88.12C89.8819 88.12 90.8015 88.5035 91.4795 89.1861C92.1576 89.8688 92.5385 90.7946 92.5385 91.76V99.04ZM107 66.28C110.835 66.28 114.514 67.814 117.226 70.5445C119.938 73.2751 121.462 76.9784 121.462 80.84H92.5385C92.5385 76.9784 94.0621 73.2751 96.7741 70.5445C99.4862 67.814 103.165 66.28 107 66.28ZM128.692 99.04C128.692 100.005 128.311 100.931 127.633 101.614C126.955 102.297 126.036 102.68 125.077 102.68C124.118 102.68 123.198 102.297 122.52 101.614C121.842 100.931 121.462 100.005 121.462 99.04V91.76C121.462 90.7946 121.842 89.8688 122.52 89.1861C123.198 88.5035 124.118 88.12 125.077 88.12C126.036 88.12 126.955 88.5035 127.633 89.1861C128.311 89.8688 128.692 90.7946 128.692 91.76V99.04Z" fill="#FF0B9E"/>
        </svg>




    </div>

    <div class="d-flex justify-content-center mt-3 mb-5">
        <strong> My Orders </strong>
    </div>





    <div class="card my-3">
        <div class="card-body">

            <div class="card-title">
                All Orders
            </div>


            <table class="table table-sm table-responsive-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Data</th>
                    <th scope="col">Amount</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date/Time</th>


                </tr>
                </thead>
                <tbody>


                @forelse ($orders as $data)

                    <td class="small">
                        {{ $data->ref_id }}
                    </td>

                    <td class="small">
                        <a class="btn btn-sm btn-black" href="{{$data->item}}"> CLICK HERE TO VIEW YOUR
                        ORDER 👉🏽 DOWNLOAD.</a>
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

                @empty

                    <h5>No Record Found</h5>

                @endforelse


            </table>

            {{ $orders->links() }}


        </div>
    </div>



    <div class="col-12" style="height: 200px">

    </div>



@endsection
