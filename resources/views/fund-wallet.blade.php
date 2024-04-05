@extends('layout.main2')
@section('content')

    <div class="container p-6">

        <div class="text-center">
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
        </div>


        <div class="mb-1 d-flex justify-content-center">

            <svg width="70" height="70" viewBox="0 0 152 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="76" cy="73.5" rx="76" ry="73.5" fill="#D9D9D9"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M103.385 62.9105C103.233 62.8995 103.064 62.8995 102.886 62.8995H95.8855C90.1519 62.8995 85.2473 67.3489 85.2473 73.1483C85.2473 78.9478 90.1547 83.3971 95.8855 83.3971H102.886C103.064 83.3971 103.233 83.3971 103.391 83.3862C104.569 83.3162 105.681 82.8262 106.521 82.0076C107.36 81.189 107.868 80.0977 107.952 78.9369C107.963 78.7729 107.963 78.5952 107.963 78.4313V67.8654C107.963 67.7014 107.963 67.5238 107.952 67.3598C107.868 66.199 107.36 65.1076 106.521 64.289C105.681 63.4705 104.569 62.9805 103.391 62.9105M95.2728 75.8814C96.7477 75.8814 97.9427 74.657 97.9427 73.1483C97.9427 71.6397 96.7477 70.4153 95.2728 70.4153C93.795 70.4153 92.6 71.6397 92.6 73.1483C92.6 74.657 93.795 75.8814 95.2728 75.8814Z"
                      fill="#FF0B9E"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M102.881 87.4967C102.976 87.4929 103.072 87.5114 103.159 87.5508C103.246 87.5902 103.323 87.6493 103.383 87.7233C103.442 87.7973 103.483 87.8842 103.503 87.9768C103.522 88.0695 103.519 88.1653 103.493 88.2565C102.939 90.2024 102.054 91.8641 100.638 93.2579C98.561 95.3077 95.9298 96.2123 92.6804 96.6441C89.5198 97.0622 85.4857 97.0622 80.3898 97.0622H74.5343C69.4383 97.0622 65.4015 97.0622 62.2436 96.6441C58.9942 96.2123 56.3631 95.3049 54.2865 93.2606C52.2126 91.2136 51.2922 88.62 50.8541 85.4169C50.4299 82.3012 50.4299 78.3247 50.4299 73.3014V72.9953C50.4299 67.972 50.4299 63.9928 50.8541 60.8771C51.2922 57.674 52.2126 55.0804 54.2865 53.0334C56.3631 50.9891 58.9942 50.0817 62.2436 49.6499C65.4043 49.2345 69.4383 49.2345 74.5343 49.2345H80.3898C85.4857 49.2345 89.5225 49.2345 92.6804 49.6526C95.9298 50.0845 98.561 50.9918 100.638 53.0361C102.054 54.4354 102.939 56.0944 103.493 58.0403C103.519 58.1315 103.522 58.2273 103.503 58.3199C103.483 58.4125 103.442 58.4994 103.383 58.5734C103.323 58.6474 103.246 58.7065 103.159 58.7459C103.072 58.7853 102.976 58.8038 102.881 58.8H95.8827C88.0171 58.8 81.0857 64.922 81.0857 73.1484C81.0857 81.3747 88.0171 87.4967 95.8827 87.4967H102.881ZM60.8269 60.1666C60.2754 60.1666 59.7465 60.3825 59.3565 60.7669C58.9666 61.1513 58.7475 61.6727 58.7475 62.2163C58.7475 62.7599 58.9666 63.2813 59.3565 63.6657C59.7465 64.0501 60.2754 64.2661 60.8269 64.2661H71.917C72.4685 64.2661 72.9974 64.0501 73.3873 63.6657C73.7773 63.2813 73.9964 62.7599 73.9964 62.2163C73.9964 61.6727 73.7773 61.1513 73.3873 60.7669C72.9974 60.3825 72.4685 60.1666 71.917 60.1666H60.8269Z"
                      fill="#FF0B9E"/>
            </svg>

        </div>

        <div class="d-flex justify-content-center mt-3 mb-5">
            <strong> Fund Wallet </strong>
        </div>


        <div class="row p-4">
            <div class="d-flex justify-content-start col-6">
                <button
                    style="background-color:rgb(255,255,255); border: 0px; padding: 10px; border-radius: 10px; color: grey"
                    id="span-3" class="button active" onclick="activateButton(this)">
                    Fund
                </button>
            </div>
            <div class="d-flex justify-content-end col-6">
                <button
                    style="border: 0px; background-color: rgb(30, 30, 30); padding: 10px; border-radius: 10px; color: grey"
                    id="div-2" class="button" onclick="activateButton(this)">
                    History
                </button>
            </div>
        </div>


        <form id="myDiv" action="fund-now" class="grid grid-cols-1" gap-3 method="POST">
            @csrf

            <label class=" d-flex justify-content-center mt-3 mb-1 text-gray-600 font-bold gap-3 text-sm">Enter the
                Amount (NGN)</label>
            <div class=" d-flex justify-content-center flex">
                <input
                    style="border-radius: 10px" class=" form-control mt-1 rounded-2xl col-8"
                    id="amount" type="number" max="999999" min="5" name="amount"
                    placeholder="Enter Amount" required="required">
            </div>


            <div class="flex mt-5 mb-4">


                <div class="d-flex justify-content-center">

                            <span
                                class="mt-1 inline-flex  items-center px-10 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 rounded">
                                Paywith
                            </span>

                    <select name="type"
                            style="border-radius: 8px; border: 0px; padding: 4px;" class="border-gray-300 gap-3 focus:border-primary focus:ring-1 focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm block w-full rounded-2xl"
                            id="amount" type="number" max="999999" min="5" name="amount"
                            placeholder="Enter the Amount you want Add" required="required">

                        <option class="text-center" value="1"> Instant Funding</option>
                        <option class="text-center" value="2"> Manual Funding</option>

                    </select>
                </div>

            </div>




            <button type="submit"
                    style="border-radius: 10px; border: 0px; background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%);"
                    class="p-3 mt-5 d-flex justify-content-center text-white text-small font-bold  btn btn-block rounded-2xl">
                Add Funds
            </button>
            <div style="height: 250px">

            </div>
        </form>


        <div id="myDiv3" class="container mx-auto px-5 md:px-100" style="height: 900px">


            <h4 class="d-flex justify-content-center mb-3 mt-4">List of Transactions</h4>


            @foreach($transaction as $data)

                <div class="card p-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                @if($data->type == 2)
                                    <div>
                                    <span
                                        class="text-small">Credit</span>
                                    </div>
                                @else
                                    <div>
                                    <span
                                        class=text-small">Debit</span>
                                    </div>
                                @endif

                            </div>

                            <div class="col">
                                <div class="text-small">₦ {{ number_format($data->amount, 2) }}</div>
                            </div>

                            @if ($data->status == 2)

                                <div>
                                    <div>
                                    <span
                                        class="badge text-small badge-success">Completed</span>
                                    </div>
                                </div>

                            @else

                                <div>
                                    <div>
                                        <a href="resolve-page?trx_ref={{$data->ref_id}}"
                                           class="badge text-small badge-warning">Resolve</a>
                                    </div>
                                </div>

                            @endif


                        </div>


                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection


