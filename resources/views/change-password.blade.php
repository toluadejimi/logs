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



                        <div class="d-flex justify-content-center">

                            <svg width="70" height="70" viewBox="0 0 126 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.05" cx="63" cy="63" r="63" fill="#0601B4"/>
                                <g clip-path="url(#clip0_0_1)">
                                    <path d="M77.3333 72.3333H74.6666V69.6666H77.3333V72.3333ZM69.3333 72.3333H72V69.6666H69.3333V72.3333ZM82.6666 72.3333H80V69.6666H82.6666V72.3333Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M56 59V52.3333C56 51.1077 56.2414 49.894 56.7105 48.7616C57.1795 47.6292 57.867 46.6004 58.7337 45.7337C59.6004 44.867 60.6292 44.1795 61.7616 43.7105C62.894 43.2414 64.1077 43 65.3333 43C66.559 43 67.7727 43.2414 68.905 43.7105C70.0374 44.1795 71.0663 44.867 71.933 45.7337C72.7997 46.6004 73.4872 47.6292 73.9562 48.7616C74.4253 49.894 74.6667 51.1077 74.6667 52.3333V59H78.6667C79.7275 59 80.7449 59.4214 81.4951 60.1716C82.2452 60.9217 82.6667 61.9391 82.6667 63V64.4667C84.1737 64.7727 85.5286 65.5903 86.5018 66.781C87.475 67.9717 88.0067 69.4622 88.0067 71C88.0067 72.5378 87.475 74.0283 86.5018 75.219C85.5286 76.4097 84.1737 77.2273 82.6667 77.5333V79C82.6667 80.0609 82.2452 81.0783 81.4951 81.8284C80.7449 82.5786 79.7275 83 78.6667 83H52C50.9391 83 49.9217 82.5786 49.1716 81.8284C48.4214 81.0783 48 80.0609 48 79V63C48 61.9391 48.4214 60.9217 49.1716 60.1716C49.9217 59.4214 50.9391 59 52 59H56ZM58.6667 52.3333C58.6667 50.5652 59.369 48.8695 60.6193 47.6193C61.8695 46.369 63.5652 45.6667 65.3333 45.6667C67.1014 45.6667 68.7971 46.369 70.0474 47.6193C71.2976 48.8695 72 50.5652 72 52.3333V59H58.6667V52.3333ZM70.6667 67C69.6058 67 68.5884 67.4214 67.8382 68.1716C67.0881 68.9217 66.6667 69.9391 66.6667 71C66.6667 72.0609 67.0881 73.0783 67.8382 73.8284C68.5884 74.5786 69.6058 75 70.6667 75H81.3333C82.3942 75 83.4116 74.5786 84.1618 73.8284C84.9119 73.0783 85.3333 72.0609 85.3333 71C85.3333 69.9391 84.9119 68.9217 84.1618 68.1716C83.4116 67.4214 82.3942 67 81.3333 67H70.6667Z" fill="#FF0B9E"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_0_1">
                                        <rect width="40" height="40" fill="white" transform="translate(48 43)"/>
                                    </clipPath>
                                </defs>
                            </svg>



                        </div>

                        <div class="mb-5 d-flex justify-content-center mt-3">
                            <strong> Update Password</strong>
                        </div>

                    <div class="row">




                        <div class="col-lg-9">

                            <div class="card">
                                <div class="card-body ">

                                    <div class="card-title">
                                        Update Password
                                    </div>




                                    <form action="update-password-now" method="POST">
                                        @csrf


                                        <div class="col-lg-6">
                                            <label>Choose a password</label>
                                            <input type="password" placeholder="Enter Password" class="form-control mb-2" required name="password">


                                            <label>Confirm password</label>
                                            <input type="password" placeholder="confirm password" class="form-control mb-2" required
                                                name="password_confirmation">

                                            <button class="btn btn-sm btn-success my-3" type="submit">
                                                Continue
                                            </button>
                                        </div>







                                    </form>



                                </div>


                            </div>



                        </div>



                    </div>










                </div>





            </div>
@endsection
