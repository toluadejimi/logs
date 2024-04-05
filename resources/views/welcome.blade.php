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


            <div class="flex">

                @if($url != null)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Item purchased successfully!</strong><a href="{{ $url }}"> CLICK HERE TO VIEW YOUR ORDER
                            👉🏽
                            DOWNLOAD.</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>


                    <!-- Recent -->
                    <div class="mb-5">
                        <div class="swiper-btn-center-lr">
                            <div class="swiper-container demo-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="#"><img
                                                src="{{ url('') }}/public/concept/assets/images/Logplace__11.png" class=""
                                                alt="..." width="100" height="50"></a></div>
                                    <div class="swiper-slide"><a href=" https://t.me/logmkp"><img
                                                src="{{ url('') }}/public/concept/assets/images/Logplace__2.png"
                                                class="d-block w-100"
                                                alt="..."></a></div>
                                    <div class="swiper-slide"><a href="https://tinyurl.com/logsgroup2"><img
                                                src="{{ url('') }}/public/concept/assets/images/Logplace__5.png"
                                                class="d-block w-100"
                                                alt="..."></a></div>
                                    <div class="swiper-slide"><img src="{{ url('') }}/public/concept/assets/images/Logplace__3.png"
                                                                   class="d-block w-100" alt="...">
                                    </div>
                                    <div class="swiper-slide"><a href="https://t.me/logmarketplacee"><img
                                                src="{{ url('') }}/public/concept/assets/images/Logplace__4.png"
                                                class="d-block w-100"
                                                alt="..."></a></div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent -->


            <strong class="mt-5">HI {{ Auth::user()->username ?? "User"}}, </strong>
            <p class="text-muted">what are you buying today?</p>


            <div class="row">
                <div class="col-5">
                    @if ($categories->count())
                        <div class="category-nav my-3">
                            <button class="category-nav__button" style="background: #10113D;">
                            <span class="icon me-1"><img src="{{ url('')}}/public/img/grid.png"
                                                         alt="@lang('image')"></span><span
                                    class="search-text text-white">@lang('
                                Category')</span>
                                <span class="arrow"><i class="las la-angle-down"></i></span>
                            </button>
                            <ul class="dropdown--menu" style="background: #10113D;">
                                @foreach ($categories as $category)
                                    <li class="dropdown--menu__item text-white">
                                        <a href="allcatproduct?cat_id={{$category->id}}"
                                           class="dropdown--menu__link">
                                            {{$category->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {{--            <div class="col-7 d-lg-none d-md-none">--}}
                {{--                <div class="search-box style-two w-100 my-3">--}}
                {{--                    <form action="do-search" class="search-form">--}}
                {{--                        <input type="text" class="form--control pill" name="keyword" placeholder="@lang('Search...')">--}}
                {{--                        <button type="submit" class="search-box__button">--}}
                {{--                                <span class="icon text-white">--}}
                {{--                                    <ion-icon name="search">--}}
                {{--                                </span>--}}
                {{--                        </button>--}}
                {{--                    </form>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>


            {{-- Facebook --}}

            @foreach ($fbaged as $cat)
                <nav aria-label="breadcrumb" class="my-3">
                    <ol class="breadcrumb"
                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
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
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                         height="20"
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
                                ₦{{ number_format($data->amount, 2) }}
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
                                                    <ion-icon class="" style="border: 0px;"
                                                              name="bag-add"></ion-icon>
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
                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                            View
                            all
                            <ion-icon name="arrow-forward-outline">
                            </ion-icon>
                        </button>
                    </form>


                </div>
            </div>


            {{-- FACEBOOK DATING --}}

            @foreach ($insta_cat as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"
                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
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
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                         height="20"
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
                                ₦{{ number_format($data->amount, 2) }}
                            </td>
                            <td>
                                @if ($data->qty == 0)
                                    <div>
                                        0 pcs.
                                        <button type="button" class="form-control" type="button"
                                                data-id="12005">
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
                                                    <ion-icon class="" style="border: 0px;"
                                                              name="bag-add"></ion-icon>
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
                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                            View
                            all
                            <ion-icon name="arrow-forward-outline">
                            </ion-icon>
                        </button>
                    </form>


                </div>


            </div>


            @foreach ($ot as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"
                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white"
                            aria-current="page">{{ $cat->title}}</li>

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
                                    <img src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                         height="20" width="20" loading="lazy">
                                </a>
                            </td>
                            <td class="small col-sm-12">
                                <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                        50, '...Show more')}}</a>
                            </td>
                            <td>
                            </td>
                            <td class="small">
                                ₦{{ number_format($data->amount, 2) }}
                            </td>
                            <td>
                                @if ($data->qty == 0)
                                    <div>
                                        0 pcs.
                                        <button type="button" class="form-control" type="button"
                                                data-id="12005">
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
                                                    <ion-icon class="" style="border: 0px;"
                                                              name="bag-add"></ion-icon>
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
                        <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                data-name="Hide accounts"
                                class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                            View
                            all
                            <ion-icon name="arrow-forward-outline">
                            </ion-icon>
                        </button>
                    </form>


                </div>


            </div>

            {{-- Twitter--}}
            @foreach ($tw as $cat)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb"
                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                        <li class="breadcrumb-item active text-white"
                            aria-current="page">{{ $cat->title}}</li>

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
                                    <img
                                        src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                        height="20" width="20" loading="lazy">
                                </a>
                            </td>
                            <td class="small col-sm-12">
                                <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                            </td>
                            <td>
                            </td>
                            <td class="small">
                                ₦{{ number_format($data->amount, 2) }}
                            </td>
                            <td>
                                @if ($data->qty == 0)
                                    <div>
                                        0 pcs.
                                        <button type="button" class="form-control" type="button"
                                                data-id="12005">
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
                                                    <ion-icon class="" style="border: 0px;"
                                                              name="bag-add"></ion-icon>
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
                        <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                data-name="Hide accounts"
                                class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                            View
                            all
                            <ion-icon name="arrow-forward-outline">
                            </ion-icon>
                        </button>
                    </form>


                </div>


            </div>


            {{-- Reedit--}}
                @foreach ($rd as $cat)
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"
                            style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                            <li class="breadcrumb-item active text-white"
                                aria-current="page">{{ $cat->title}}</li>

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
                                        <img
                                            src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                            height="20" width="20" loading="lazy">
                                    </a>
                                </td>
                                <td class="small col-sm-12">
                                    <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                </td>
                                <td>
                                </td>
                                <td class="small">
                                    ₦{{ number_format($data->amount, 2) }}
                                </td>
                                <td>
                                    @if ($data->qty == 0)
                                        <div>
                                            0 pcs.
                                            <button type="button" class="form-control" type="button"
                                                    data-id="12005">
                                                <ion-icon class="text-dark" name="bag-add"></ion-icon>
                                            </button>
                                        </div>
                                    @else
                                        <form action="/item-view?id={{ $data->id }}" method="POST">
                                            @csrf
                                            <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                <div data-help="Buy Now">
                                                    {{ $data->qty }} pcs.
                                                    <button type="submit" class="form-control"
                                                            type="button"
                                                            data-id="12005">
                                                        <ion-icon class="" style="border: 0px;"
                                                                  name="bag-add"></ion-icon>
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
                            <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                    data-name="Hide accounts"
                                    class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                    style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                View
                                all
                                <ion-icon name="arrow-forward-outline">
                                </ion-icon>
                            </button>
                        </form>


                    </div>


                </div>


                {{-- Mail--}}

                <div class="soc-bl">
                    @foreach ($ml as $cat)
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"
                                style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                <li class="breadcrumb-item active text-white"
                                    aria-current="page">{{ $cat->title}}</li>

                            </ol>
                        </nav>
                    @endforeach


                    <div class="card">
                        <div class="card-body">

                            <table class="table table-sm table-responsive-sm">
                                <thead
                                    style="border-radius: 100px; background: #10113D;color: #ffffff;">
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
                                            <img
                                                src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                height="20" width="20" loading="lazy">
                                        </a>
                                    </td>
                                    <td class="small col-sm-12">
                                        <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="small">
                                        ₦{{ number_format($data->amount, 2) }}
                                    </td>
                                    <td>
                                        @if ($data->qty == 0)
                                            <div>
                                                0 pcs.
                                                <button type="button" class="form-control" type="button"
                                                        data-id="12005">
                                                    <ion-icon class="text-dark"
                                                              name="bag-add"></ion-icon>
                                                </button>
                                            </div>
                                        @else
                                            <form action="/item-view?id={{ $data->id }}" method="POST">
                                                @csrf
                                                <div class="button-wrap" onclick="subscribeBuyItem(6);">
                                                    <div data-help="Buy Now">
                                                        {{ $data->qty }} pcs.
                                                        <button type="submit" class="form-control"
                                                                type="button"
                                                                data-id="12005">
                                                            <ion-icon class="" style="border: 0px;"
                                                                      name="bag-add"></ion-icon>
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
                                <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                        data-name="Hide accounts"
                                        class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                        style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                    View
                                    all
                                    <ion-icon name="arrow-forward-outline">
                                    </ion-icon>
                                </button>
                            </form>


                        </div>


                    </div>


                    {{-- GV--}}

                    <div class="soc-bl">
                        @foreach ($gv as $cat)
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb"
                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                    <li class="breadcrumb-item active text-white"
                                        aria-current="page">{{ $cat->title}}</li>

                                </ol>
                            </nav>
                        @endforeach


                        <div class="card">
                            <div class="card-body">

                                <table class="table table-sm table-responsive-sm">
                                    <thead
                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
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
                                                <img
                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                    height="20" width="20" loading="lazy">
                                            </a>
                                        </td>
                                        <td class="small col-sm-12">
                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="small">
                                            ₦{{ number_format($data->amount, 2) }}
                                        </td>
                                        <td>
                                            @if ($data->qty == 0)
                                                <div>
                                                    0 pcs.
                                                    <button type="button" class="form-control"
                                                            type="button"
                                                            data-id="12005">
                                                        <ion-icon class="text-dark"
                                                                  name="bag-add"></ion-icon>
                                                    </button>
                                                </div>
                                            @else
                                                <form action="/item-view?id={{ $data->id }}"
                                                      method="POST">
                                                    @csrf
                                                    <div class="button-wrap"
                                                         onclick="subscribeBuyItem(6);">
                                                        <div data-help="Buy Now">
                                                            {{ $data->qty }} pcs.
                                                            <button type="submit" class="form-control"
                                                                    type="button" data-id="12005">
                                                                <ion-icon class="" style="border: 0px;"
                                                                          name="bag-add"></ion-icon>
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
                                    <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                            data-name="Hide accounts"
                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                        View
                                        all
                                        <ion-icon name="arrow-forward-outline">
                                        </ion-icon>
                                    </button>
                                </form>


                            </div>


                        </div>


                        {{-- Instagram--}}

                        <div class="soc-bl">
                            @foreach ($in as $cat)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"
                                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                        <li class="breadcrumb-item active text-white"
                                            aria-current="page">{{ $cat->title}}</li>

                                    </ol>
                                </nav>
                            @endforeach


                            <div class="card">
                                <div class="card-body">

                                    <table class="table table-sm table-responsive-sm">
                                        <thead
                                            style="border-radius: 100px; background: #10113D;color: #ffffff;">
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
                                                <a href="#"
                                                   data-help="Click to read detailed description">
                                                    <img
                                                        src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                        height="20" width="20" loading="lazy">
                                                </a>
                                            </td>
                                            <td class="small col-sm-12">
                                                <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                            </td>
                                            <td>
                                            </td>
                                            <td class="small">
                                                ₦{{ number_format($data->amount, 2) }}
                                            </td>
                                            <td>
                                                @if ($data->qty == 0)
                                                    <div>
                                                        0 pcs.
                                                        <button type="button" class="form-control"
                                                                type="button"
                                                                data-id="12005">
                                                            <ion-icon class="text-dark"
                                                                      name="bag-add"></ion-icon>
                                                        </button>
                                                    </div>
                                                @else
                                                    <form action="/item-view?id={{ $data->id }}"
                                                          method="POST">
                                                        @csrf
                                                        <div class="button-wrap"
                                                             onclick="subscribeBuyItem(6);">
                                                            <div data-help="Buy Now">
                                                                {{ $data->qty }} pcs.
                                                                <button type="submit"
                                                                        class="form-control"
                                                                        type="button" data-id="12005">
                                                                    <ion-icon class=""
                                                                              style="border: 0px;"
                                                                              name="bag-add"></ion-icon>
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
                                        <button type="submit" data-cat="48" data-collapse="#subcat_48"
                                                data-name="Hide accounts"
                                                class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                            View
                                            all
                                            <ion-icon name="arrow-forward-outline">
                                            </ion-icon>
                                        </button>
                                    </form>


                                </div>

                            </div>


                            {{-- TikTok--}}

                            <div class="soc-bl">
                                @foreach ($tk as $cat)
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb"
                                            style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                            <li class="breadcrumb-item active text-white"
                                                aria-current="page">{{ $cat->title}}</li>

                                        </ol>
                                    </nav>
                                @endforeach


                                <div class="card">
                                    <div class="card-body">

                                        <table class="table table-sm table-responsive-sm">
                                            <thead
                                                style="border-radius: 100px; background: #10113D;color: #ffffff;">
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
                                                    <a href="#"
                                                       data-help="Click to read detailed description">
                                                        <img
                                                            src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                            height="20" width="20" loading="lazy">
                                                    </a>
                                                </td>
                                                <td class="small col-sm-12">
                                                    <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                </td>
                                                <td>
                                                </td>
                                                <td class="small">
                                                    ₦{{ number_format($data->amount, 2) }}
                                                </td>
                                                <td>
                                                    @if ($data->qty == 0)
                                                        <div>
                                                            0 pcs.
                                                            <button type="button" class="form-control"
                                                                    type="button" data-id="12005">
                                                                <ion-icon class="text-dark"
                                                                          name="bag-add"></ion-icon>
                                                            </button>
                                                        </div>
                                                    @else
                                                        <form action="/item-view?id={{ $data->id }}"
                                                              method="POST">
                                                            @csrf
                                                            <div class="button-wrap"
                                                                 onclick="subscribeBuyItem(6);">
                                                                <div data-help="Buy Now">
                                                                    {{ $data->qty }} pcs.
                                                                    <button type="submit"
                                                                            class="form-control"
                                                                            type="button"
                                                                            data-id="12005">
                                                                        <ion-icon class=""
                                                                                  style="border: 0px;"
                                                                                  name="bag-add"></ion-icon>
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
                                            <button type="submit" data-cat="48"
                                                    data-collapse="#subcat_48"
                                                    data-name="Hide accounts"
                                                    class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                    style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                View
                                                all
                                                <ion-icon name="arrow-forward-outline">
                                                </ion-icon>
                                            </button>
                                        </form>


                                    </div>


                                </div>


                                {{-- Linkden--}}

                                <div class="soc-bl">
                                    @foreach ($ln as $cat)
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb"
                                                style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                <li class="breadcrumb-item active text-white"
                                                    aria-current="page">{{ $cat->title}}</li>

                                            </ol>
                                        </nav>
                                    @endforeach


                                    <div class="card">
                                        <div class="card-body">

                                            <table class="table table-sm table-responsive-sm">
                                                <thead
                                                    style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                <tr class>
                                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                    <th style="border-radius: 0px 10px 10px 0px;">
                                                        Stock
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach ($ln_items as $data)


                                                    <td class="">
                                                        <a href="#"
                                                           data-help="Click to read detailed description">
                                                            <img
                                                                src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                height="20" width="20" loading="lazy">
                                                        </a>
                                                    </td>
                                                    <td class="small col-sm-12">
                                                        <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td class="small">
                                                        ₦{{ number_format($data->amount, 2) }}
                                                    </td>
                                                    <td>
                                                        @if ($data->qty == 0)
                                                            <div>
                                                                0 pcs.
                                                                <button type="button"
                                                                        class="form-control"
                                                                        type="button" data-id="12005">
                                                                    <ion-icon class="text-dark"
                                                                              name="bag-add"></ion-icon>
                                                                </button>
                                                            </div>
                                                        @else
                                                            <form action="/item-view?id={{ $data->id }}"
                                                                  method="POST">
                                                                @csrf
                                                                <div class="button-wrap"
                                                                     onclick="subscribeBuyItem(6);">
                                                                    <div data-help="Buy Now">
                                                                        {{ $data->qty }} pcs.
                                                                        <button type="submit"
                                                                                class="form-control"
                                                                                type="button"
                                                                                data-id="12005">
                                                                            <ion-icon class=""
                                                                                      style="border: 0px;"
                                                                                      name="bag-add"></ion-icon>
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
                                                <button type="submit" data-cat="48"
                                                        data-collapse="#subcat_48"
                                                        data-name="Hide accounts"
                                                        class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                        style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                    View
                                                    all
                                                    <ion-icon name="arrow-forward-outline">
                                                    </ion-icon>
                                                </button>
                                            </form>


                                        </div>


                                    </div>


                                    {{-- PVPN--}}

                                    <div class="soc-bl">
                                        @foreach ($pv as $cat)
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb"
                                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                    <li class="breadcrumb-item active text-white"
                                                        aria-current="page">{{ $cat->title}}</li>

                                                </ol>
                                            </nav>
                                        @endforeach


                                        <div class="card">
                                            <div class="card-body">

                                                <table class="table table-sm table-responsive-sm">
                                                    <thead
                                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                    <tr class>
                                                        <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th></th>
                                                        <th style="border-radius: 0px 10px 10px 0px;">
                                                            Stock
                                                        </th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($pv_items as $data)


                                                        <td class="">
                                                            <a href="#"
                                                               data-help="Click to read detailed description">
                                                                <img
                                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                    height="20" width="20"
                                                                    loading="lazy">
                                                            </a>
                                                        </td>
                                                        <td class="small col-sm-12">
                                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td class="small">
                                                            ₦{{ number_format($data->amount, 2) }}
                                                        </td>
                                                        <td>
                                                            @if ($data->qty == 0)
                                                                <div>
                                                                    0 pcs.
                                                                    <button type="button"
                                                                            class="form-control"
                                                                            type="button"
                                                                            data-id="12005">
                                                                        <ion-icon class="text-dark"
                                                                                  name="bag-add"></ion-icon>
                                                                    </button>
                                                                </div>
                                                            @else
                                                                <form
                                                                    action="/item-view?id={{ $data->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <div class="button-wrap"
                                                                         onclick="subscribeBuyItem(6);">
                                                                        <div data-help="Buy Now">
                                                                            {{ $data->qty }} pcs.
                                                                            <button type="submit"
                                                                                    class="form-control"
                                                                                    type="button"
                                                                                    data-id="12005">
                                                                                <ion-icon class=""
                                                                                          style="border: 0px;"
                                                                                          name="bag-add"></ion-icon>
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
                                                    <button type="submit" data-cat="48"
                                                            data-collapse="#subcat_48"
                                                            data-name="Hide accounts"
                                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                        View
                                                        all
                                                        <ion-icon name="arrow-forward-outline">
                                                        </ion-icon>
                                                    </button>
                                                </form>


                                            </div>


                                        </div>


                                        {{-- OTHERS--}}

                                        <div class="soc-bl">
                                            @foreach ($oth as $cat)
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb"
                                                        style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                        <li class="breadcrumb-item active text-white"
                                                            aria-current="page">{{ $cat->title}}</li>

                                                    </ol>
                                                </nav>
                                            @endforeach


                                            <div class="card">
                                                <div class="card-body">

                                                    <table class="table table-sm table-responsive-sm">
                                                        <thead
                                                            style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                        <tr class>
                                                            <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                            <th></th>
                                                            <th style="border-radius: 0px 10px 10px 0px;">
                                                                Stock
                                                            </th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach ($oth_items as $data)



                                                            <td class="">
                                                                <a href="#"
                                                                   data-help="Click to read detailed description">
                                                                    <img
                                                                        src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                        height="20" width="20"
                                                                        loading="lazy">
                                                                </a>
                                                            </td>
                                                            <td class="small col-sm-12">
                                                                <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td class="small">
                                                                ₦{{ number_format($data->amount, 2) }}
                                                            </td>
                                                            <td>
                                                                @if ($data->qty == 0)
                                                                    <div>
                                                                        0 pcs.
                                                                        <button type="button"
                                                                                class="form-control"
                                                                                type="button"
                                                                                data-id="12005">
                                                                            <ion-icon class="text-dark"
                                                                                      name="bag-add"></ion-icon>
                                                                        </button>
                                                                    </div>
                                                                @else
                                                                    <form
                                                                        action="/item-view?id={{ $data->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="button-wrap"
                                                                             onclick="subscribeBuyItem(6);">
                                                                            <div data-help="Buy Now">
                                                                                {{ $data->qty }} pcs.
                                                                                <button type="submit"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                    <ion-icon class=""
                                                                                              style="border: 0px;"
                                                                                              name="bag-add"></ion-icon>
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

                                                        <input hidden name="cat_id"
                                                               value="{{ $cat->id }}">
                                                        <button type="submit" data-cat="48"
                                                                data-collapse="#subcat_48"
                                                                data-name="Hide accounts"
                                                                class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                            View
                                                            all
                                                            <ion-icon name="arrow-forward-outline">
                                                            </ion-icon>
                                                        </button>
                                                    </form>


                                                </div>
                                            </div>


                                            {{--SWEETEST OFFERS--}}

                                            <div class="soc-bl">
                                                @foreach ($swr as $cat)
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb"
                                                            style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                            <li class="breadcrumb-item active text-white"
                                                                aria-current="page">{{ $cat->title}}</li>

                                                        </ol>
                                                    </nav>
                                                @endforeach


                                                <div class="card">
                                                    <div class="card-body">

                                                        <table
                                                            class="table table-sm table-responsive-sm">
                                                            <thead
                                                                style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                            <tr class>
                                                                <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                <th></th>
                                                                <th style="border-radius: 0px 10px 10px 0px;">
                                                                    Stock
                                                                </th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach ($swr_items as $data)


                                                                <td class="">
                                                                    <a href="#"
                                                                       data-help="Click to read detailed description">
                                                                        <img
                                                                            src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                            height="20" width="20"
                                                                            loading="lazy">
                                                                    </a>
                                                                </td>
                                                                <td class="small col-sm-12">
                                                                    <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td class="small">
                                                                    ₦{{ number_format($data->amount, 2) }}
                                                                </td>
                                                                <td>
                                                                    @if ($data->qty == 0)
                                                                        <div>
                                                                            0 pcs.
                                                                            <button type="button"
                                                                                    class="form-control"
                                                                                    type="button"
                                                                                    data-id="12005">
                                                                                <ion-icon
                                                                                    class="text-dark"
                                                                                    name="bag-add"></ion-icon>
                                                                            </button>
                                                                        </div>
                                                                    @else
                                                                        <form
                                                                            action="/item-view?id={{ $data->id }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="button-wrap"
                                                                                 onclick="subscribeBuyItem(6);">
                                                                                <div
                                                                                    data-help="Buy Now">
                                                                                    {{ $data->qty }}
                                                                                    pcs.
                                                                                    <button
                                                                                        type="submit"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                        <ion-icon
                                                                                            class=""
                                                                                            style="border: 0px;"
                                                                                            name="bag-add"></ion-icon>
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

                                                            <input hidden name="cat_id"
                                                                   value="{{ $cat->id }}">
                                                            <button type="submit" data-cat="48"
                                                                    data-collapse="#subcat_48"
                                                                    data-name="Hide accounts"
                                                                    class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                    style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                View
                                                                all
                                                                <ion-icon name="arrow-forward-outline">
                                                                </ion-icon>
                                                            </button>
                                                        </form>


                                                    </div>


                                                </div>


                                                {{--SNAP CHAT OFFERS--}}

                                                <div class="soc-bl">
                                                    @foreach ($snap as $cat)
                                                        <nav aria-label="breadcrumb">
                                                            <ol class="breadcrumb"
                                                                style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                <li class="breadcrumb-item active text-white"
                                                                    aria-current="page">{{ $cat->title}}</li>

                                                            </ol>
                                                        </nav>
                                                    @endforeach


                                                    <div class="card">
                                                        <div class="card-body">

                                                            <table
                                                                class="table table-sm table-responsive-sm">
                                                                <thead
                                                                    style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                                <tr class>
                                                                    <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                    <th>Product</th>
                                                                    <th>Price</th>
                                                                    <th></th>
                                                                    <th style="border-radius: 0px 10px 10px 0px;">
                                                                        Stock
                                                                    </th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                @foreach ($snap_items as $data)
                                                                    <td class="">
                                                                        <a href="#"
                                                                           data-help="Click to read detailed description">
                                                                            <img
                                                                                src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                                height="20" width="20"
                                                                                loading="lazy">
                                                                        </a>
                                                                    </td>
                                                                    <td class="small col-sm-12">
                                                                        <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                                    </td>
                                                                    <td>
                                                                    </td>
                                                                    <td class="small">
                                                                        ₦{{ number_format($data->amount, 2) }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($data->qty == 0)
                                                                            <div>
                                                                                0 pcs.
                                                                                <button type="button"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                    <ion-icon
                                                                                        class="text-dark"
                                                                                        name="bag-add"></ion-icon>
                                                                                </button>
                                                                            </div>
                                                                        @else
                                                                            <form
                                                                                action="/item-view?id={{ $data->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <div class="button-wrap"
                                                                                     onclick="subscribeBuyItem(6);">
                                                                                    <div
                                                                                        data-help="Buy Now">
                                                                                        {{ $data->qty }}
                                                                                        pcs.
                                                                                        <button
                                                                                            type="submit"
                                                                                            class="form-control"
                                                                                            type="button"
                                                                                            data-id="12005">
                                                                                            <ion-icon
                                                                                                class=""
                                                                                                style="border: 0px;"
                                                                                                name="bag-add"></ion-icon>
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
                                                                <div id="subcat_48"
                                                                     class="collapse"></div>

                                                                <input hidden name="cat_id"
                                                                       value="{{ $cat->id }}">
                                                                <button type="submit" data-cat="48"
                                                                        data-collapse="#subcat_48"
                                                                        data-name="Hide accounts"
                                                                        class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                        style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                    View
                                                                    all
                                                                    <ion-icon
                                                                        name="arrow-forward-outline">
                                                                    </ion-icon>
                                                                </button>
                                                            </form>


                                                        </div>


                                                    </div>


                                                    {{--Straming--}}

                                                    <div class="soc-bl">
                                                        @foreach ($strem as $cat)
                                                            <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb"
                                                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                    <li class="breadcrumb-item active text-white"
                                                                        aria-current="page">{{ $cat->title}}</li>

                                                                </ol>
                                                            </nav>
                                                        @endforeach


                                                        <div class="card">
                                                            <div class="card-body">

                                                                <table
                                                                    class="table table-sm table-responsive-sm">
                                                                    <thead
                                                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                                    <tr class>
                                                                        <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                        <th>Product</th>
                                                                        <th>Price</th>
                                                                        <th></th>
                                                                        <th style="border-radius: 0px 10px 10px 0px;">
                                                                            Stock
                                                                        </th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach ($strem_items as $data)


                                                                        <td class="">
                                                                            <a href="#"
                                                                               data-help="Click to read detailed description">
                                                                                <img
                                                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                                    height="20"
                                                                                    width="20"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </td>
                                                                        <td class="small col-sm-12">
                                                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                50, '...Show more')}}</a>
                                                                        </td>
                                                                        <td>
                                                                        </td>
                                                                        <td class="small">
                                                                            ₦{{ number_format($data->amount, 2) }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->qty == 0)
                                                                                <div>
                                                                                    0 pcs.
                                                                                    <button
                                                                                        type="button"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                        <ion-icon
                                                                                            class="text-dark"
                                                                                            name="bag-add"></ion-icon>
                                                                                    </button>
                                                                                </div>
                                                                            @else
                                                                                <form
                                                                                    action="/item-view?id={{ $data->id }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="button-wrap"
                                                                                        onclick="subscribeBuyItem(6);">
                                                                                        <div
                                                                                            data-help="Buy Now">
                                                                                            {{ $data->qty }}
                                                                                            pcs.
                                                                                            <button
                                                                                                type="submit"
                                                                                                class="form-control"
                                                                                                type="button"
                                                                                                data-id="12005">
                                                                                                <ion-icon
                                                                                                    class=""
                                                                                                    style="border: 0px;"
                                                                                                    name="bag-add"></ion-icon>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                        </td>
                                                                        @endif


                                                                    </tbody>

                                                                    @endforeach

                                                                </table>


                                                                <form action="/allcatproduct"
                                                                      method="GET">
                                                                    @csrf
                                                                    <div id="subcat_48"
                                                                         class="collapse"></div>

                                                                    <input hidden name="cat_id"
                                                                           value="{{ $cat->id }}">
                                                                    <button type="submit" data-cat="48"
                                                                            data-collapse="#subcat_48"
                                                                            data-name="Hide accounts"
                                                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                        View
                                                                        all
                                                                        <ion-icon
                                                                            name="arrow-forward-outline">
                                                                        </ion-icon>
                                                                    </button>
                                                                </form>


                                                            </div>


                                                        </div>


                                                        {{--RESELLER Deal--}}
                                                        @foreach ($resell as $cat)
                                                            <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb"
                                                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                    <li class="breadcrumb-item active text-white"
                                                                        aria-current="page">{{ $cat->title}}</li>

                                                                </ol>
                                                            </nav>
                                                        @endforeach


                                                        <div class="card">
                                                            <div class="card-body">

                                                                <table
                                                                    class="table table-sm table-responsive-sm">
                                                                    <thead
                                                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                                    <tr class>
                                                                        <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                        <th>Product</th>
                                                                        <th>Price</th>
                                                                        <th></th>
                                                                        <th style="border-radius: 0px 10px 10px 0px;">
                                                                            Stock
                                                                        </th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach ($resell_items as $data)


                                                                        <td class="">
                                                                            <a href="#"
                                                                               data-help="Click to read detailed description">
                                                                                <img
                                                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                                    height="20"
                                                                                    width="20"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </td>
                                                                        <td class="small col-sm-12">
                                                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                                                                                50, '...Show more')}}</a>
                                                                        </td>
                                                                        <td>
                                                                        </td>
                                                                        <td class="small">
                                                                            ₦{{ number_format($data->amount, 2) }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->qty == 0)
                                                                                <div>
                                                                                    0 pcs.
                                                                                    <button
                                                                                        type="button"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                        <ion-icon
                                                                                            class="text-dark"
                                                                                            name="bag-add"></ion-icon>
                                                                                    </button>
                                                                                </div>
                                                                            @else
                                                                                <form
                                                                                    action="/item-view?id={{ $data->id }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="button-wrap"
                                                                                        onclick="subscribeBuyItem(6);">
                                                                                        <div
                                                                                            data-help="Buy Now">
                                                                                            {{ $data->qty }}
                                                                                            pcs.
                                                                                            <button
                                                                                                type="submit"
                                                                                                class="form-control"
                                                                                                type="button"
                                                                                                data-id="12005">
                                                                                                <ion-icon
                                                                                                    class=""
                                                                                                    style="border: 0px;"
                                                                                                    name="bag-add"></ion-icon>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                        </td>

                                                                        @endif


                                                                    </tbody>

                                                                    @endforeach

                                                                </table>


                                                                <form action="/allcatproduct"
                                                                      method="GET">
                                                                    @csrf
                                                                    <div id="subcat_48"
                                                                         class="collapse"></div>

                                                                    <input hidden name="cat_id"
                                                                           value="{{ $cat->id }}">
                                                                    <button type="submit" data-cat="48"
                                                                            data-collapse="#subcat_48"
                                                                            data-name="Hide accounts"
                                                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                        View
                                                                        all
                                                                        <ion-icon
                                                                            name="arrow-forward-outline">
                                                                        </ion-icon>
                                                                    </button>
                                                                </form>


                                                            </div>


                                                        </div>


                                                        {{--COUNTRIES FACEBOOK (BELOW 50 FRIENDS)--}}
                                                        @foreach ($con_fb as $cat)
                                                            <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb"
                                                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                    <li class="breadcrumb-item active text-white"
                                                                        aria-current="page">{{ $cat->title}}</li>

                                                                </ol>
                                                            </nav>
                                                        @endforeach


                                                        <div class="card">
                                                            <div class="card-body">

                                                                <table
                                                                    class="table table-sm table-responsive-sm">
                                                                    <thead
                                                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                                    <tr class>
                                                                        <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                        <th>Product</th>
                                                                        <th>Price</th>
                                                                        <th></th>
                                                                        <th style="border-radius: 0px 10px 10px 0px;">
                                                                            Stock
                                                                        </th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach ($con_fb_items as $data)


                                                                        <td class="">
                                                                            <a href="#"
                                                                               data-help="Click to read detailed description">
                                                                                <img
                                                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                                    height="20"
                                                                                    width="20"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </td>
                                                                        <td class="small col-sm-12">
                                                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                                                                                50, '...Show more')}}</a>
                                                                        </td>
                                                                        <td>
                                                                        </td>
                                                                        <td class="small">
                                                                            ₦{{ number_format($data->amount, 2) }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->qty == 0)
                                                                                <div>
                                                                                    0 pcs.
                                                                                    <button
                                                                                        type="button"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                        <ion-icon
                                                                                            class="text-dark"
                                                                                            name="bag-add"></ion-icon>
                                                                                    </button>
                                                                                </div>
                                                                            @else
                                                                                <form
                                                                                    action="/item-view?id={{ $data->id }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="button-wrap"
                                                                                        onclick="subscribeBuyItem(6);">
                                                                                        <div
                                                                                            data-help="Buy Now">
                                                                                            {{ $data->qty }}
                                                                                            pcs.
                                                                                            <button
                                                                                                type="submit"
                                                                                                class="form-control"
                                                                                                type="button"
                                                                                                data-id="12005">
                                                                                                <ion-icon
                                                                                                    class=""
                                                                                                    style="border: 0px;"
                                                                                                    name="bag-add"></ion-icon>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                        </td>

                                                                        @endif


                                                                    </tbody>

                                                                    @endforeach

                                                                </table>


                                                                <form action="/allcatproduct"
                                                                      method="GET">
                                                                    @csrf
                                                                    <div id="subcat_48"
                                                                         class="collapse"></div>

                                                                    <input hidden name="cat_id"
                                                                           value="{{ $cat->id }}">
                                                                    <button type="submit" data-cat="48"
                                                                            data-collapse="#subcat_48"
                                                                            data-name="Hide accounts"
                                                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                        View
                                                                        all
                                                                        <ion-icon
                                                                            name="arrow-forward-outline">
                                                                        </ion-icon>
                                                                    </button>
                                                                </form>


                                                            </div>


                                                        </div>


                                                        {{--TOOLS--}}
                                                        @foreach ($tools as $cat)
                                                            <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb"
                                                                    style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                    <li class="breadcrumb-item active text-white"
                                                                        aria-current="page">{{ $cat->title}}</li>

                                                                </ol>
                                                            </nav>
                                                        @endforeach


                                                        <div class="card">
                                                            <div class="card-body">

                                                                <table
                                                                    class="table table-sm table-responsive-sm">
                                                                    <thead
                                                                        style="border-radius: 100px; background: #10113D;color: #ffffff;">
                                                                    <tr class>
                                                                        <th style="border-radius: 10px 0px 0px 10px;"></th>
                                                                        <th>Product</th>
                                                                        <th>Price</th>
                                                                        <th></th>
                                                                        <th style="border-radius: 0px 10px 10px 0px;">
                                                                            Stock
                                                                        </th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach ($tools_items as $data)


                                                                        <td class="">
                                                                            <a href="#"
                                                                               data-help="Click to read detailed description">
                                                                                <img
                                                                                    src="{{ url('') }}/public/storage/content/images/{{ $data->icon }}"
                                                                                    height="20"
                                                                                    width="20"
                                                                                    loading="lazy">
                                                                            </a>
                                                                        </td>
                                                                        <td class="small col-sm-12">
                                                                            <a href="item-view?id={{ $data->id }}"> {{\Illuminate\Support\Str::limit($data->title,
                                                                                                                50, '...Show more')}}</a>
                                                                        </td>
                                                                        <td>
                                                                        </td>
                                                                        <td class="small">
                                                                            ₦{{ number_format($data->amount, 2) }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->qty == 0)
                                                                                <div>
                                                                                    0 pcs.
                                                                                    <button
                                                                                        type="button"
                                                                                        class="form-control"
                                                                                        type="button"
                                                                                        data-id="12005">
                                                                                        <ion-icon
                                                                                            class="text-dark"
                                                                                            name="bag-add"></ion-icon>
                                                                                    </button>
                                                                                </div>
                                                                            @else
                                                                                <form
                                                                                    action="/item-view?id={{ $data->id }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div
                                                                                        class="button-wrap"
                                                                                        onclick="subscribeBuyItem(6);">
                                                                                        <div
                                                                                            data-help="Buy Now">
                                                                                            {{ $data->qty }}
                                                                                            pcs.
                                                                                            <button
                                                                                                type="submit"
                                                                                                class="form-control"
                                                                                                type="button"
                                                                                                data-id="12005">
                                                                                                <ion-icon
                                                                                                    class=""
                                                                                                    style="border: 0px;"
                                                                                                    name="bag-add"></ion-icon>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                        </td>

                                                                        @endif


                                                                    </tbody>

                                                                    @endforeach

                                                                </table>


                                                                <form action="/allcatproduct"
                                                                      method="GET">
                                                                    @csrf
                                                                    <div id="subcat_48"
                                                                         class="collapse"></div>

                                                                    <input hidden name="cat_id"
                                                                           value="{{ $cat->id }}">
                                                                    <button type="submit" data-cat="48"
                                                                            data-collapse="#subcat_48"
                                                                            data-name="Hide accounts"
                                                                            class="btn   btn-warning my-3 btn-sm btn-block text-white"
                                                                            style="border-radius: 10px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);">
                                                                        View
                                                                        all
                                                                        <ion-icon
                                                                            name="arrow-forward-outline">
                                                                        </ion-icon>
                                                                    </button>
                                                                </form>


                                                            </div>


                                                        </div>

                                                        {{-- End of product    --}}


                                                        <div class="container">

                                                            <div class="card p-3">
                                                                <div class="card-body p-3">

                                                                </div>


                                                                <h5>Why do people Buy social media
                                                                    accounts?</h5>
                                                                <p class="small">A solid social media
                                                                    account can be a powerful tool for
                                                                    branding and marketing.</p>
                                                                <p class="small">A good social media
                                                                    account
                                                                    has an active and responsive
                                                                    community
                                                                    fired up by the
                                                                    topic or niche that brought them
                                                                    together.</p>
                                                                <p class="small">Sometimes it makes
                                                                    sense to
                                                                    buy or sell a social media account
                                                                    depending on where
                                                                    you are with your business and how
                                                                    goals
                                                                    have changed and evolved.</p>
                                                                <p class="small">There is a thriving
                                                                    market
                                                                    for buying/selling social media
                                                                    accounts, but it’s
                                                                    important to know what the best
                                                                    platforms are. </p>

                                                                <p class="small"><strong>Let’s dig
                                                                        in!</strong></p>

                                                            </div>



                                                        </div>

                                                            <link rel="stylesheet"
                                                                  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                                                            <a href="https://t.me/logmarketplacee" class="float"
                                                               target="_blank">
                                                                <i class="fa fa-comment my-float"></i>
                                                            </a>
@endsection
