@extends('layout.main')
@section('content')

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


            <nav aria-label="breadcrumb my-3">
                <ol class="breadcrumb" style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $title}}</li>

                </ol>
            </nav>


            <div class="card mt-4">
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

                        @foreach ($items as $data)
                            <td class="">
                                <a href="#" data-help="Click to read detailed description">
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                         height="20" width="20" loading="lazy">
                                </a>
                            </td>
                            <td class="small col-sm-12">
                                <a href="item-view?id={{ $data->id }}">
                                    {{\Illuminate\Support\Str::limit($data->title,
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
                                                <button type="submit" class="form-control" type="button"
                                                        data-id="12005">
                                                    <ion-icon class="" style="border: 0px;" name="bag-add">
                                                    </ion-icon>
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

@endsection
