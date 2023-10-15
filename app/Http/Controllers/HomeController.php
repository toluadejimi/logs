<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\SoldLog;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(request $request)
    {

        $user = Auth::id() ?? null;

        $fbaged = Category::where('id', 1)->get();
        $insta_cat = Category::where('id', 2)->get();
        $gv = Category::where('id', 3)->get();


        $fbaged_items = Item::where('cat_id', 1)->take(5)->get();
        $insta_items = Item::where('cat_id', 2)->take(5)->get();
        $gv_items = Item::where('cat_id', 3)->take(5)->get();



        return view('welcome', compact('fbaged', 'gv', 'gv_items',  'user', 'insta_items', 'fbaged_items', 'insta_cat'));
    }



    public function fund_wallet(Request $request)
    {
        $user = Auth::id() ?? null;
        $transaction = Transaction::latest()->where('user_id', Auth::id())->paginate(10);


        return view('fund-wallet', compact('user', 'transaction'));
    }


    public function fund_now(Request $request)
    {

        $request->validate([
            'amount'      => 'required|numeric|gt:0',
        ]);

        $key = env('WEBKEY');
        $ref = "LOG-" . random_int(000, 999) . date('ymdhis');
        $email = Auth::user()->email;

        $url = "https://web.enkpay.com/pay?amount=$request->amount&key=$key&ref=$ref&email=$email";


        $data                  = new Transaction();
        $data->user_id         = Auth::id();
        $data->amount          = $request->amount;
        $data->ref_id             = $ref;
        $data->status          = 1; //initiate
        $data->save();

        return Redirect::to($url);
    }


    public function verify_payment(request $request)
    {

        $trx_id = $request->trans_id;
        $ip = $request->ip();
        $status = $request->status;


        if ($status == 'failed') {

            Transaction::where('ref_id', $trx_id)->where('status', 1)->update(['status' => 3]);

            // $message =  Auth::user()->name . "| canceled funding |";
            // send_notification($message);

            return redirect('fund-wallet')->with('error', 'Transaction Declined');
        }




        $trxstatus = Transaction::where('ref_id', $trx_id)->first()->status ?? null;

        if ($trxstatus == 2) {

            // $message =  Auth::user()->name . "| is trying to fund  with | $request->trx_id  | " . number_format($request->amount, 2) . "\n\n IP ====> " . $request->ip();
            // send_notification($message);
            return redirect('fund-wallet')->with('error', 'Transaction already confirmed or not found');
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://web.enkpay.com/api/verify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('trans_id' => "$trx_id"),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);

        $status1 = $var->detail ?? null;
        $amount = $var->price ?? null;




        if ($status1 == 'success') {

            Transaction::where('ref_id', $trx_id)->update(['status' => 2]);
            User::where('id', Auth::id())->increment('wallet', $amount);
            $order_id = $trx_id;
            resolve_complete($order_id);
            $usr = User::where('id', Auth::id())->first() ?? null;
            return redirect('fund-wallet')->with('message', "Wallet has been funded with $amount");
        }

        // $message =  Auth::user()->name . "| is trying to fund  with | $request->trx_id  | " . number_format($request->amount, 2) . "\n\n IP ====> " . $request->ip();
        // send_notification($message);

        return redirect('fund-wallet')->with('error', 'Transaction already confirmed or not found');
    }





    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {


            $user = Auth::id() ?? null;

            $fbaged = Category::where('id', 1)->get();
            $insta_cat = Category::where('id', 2)->get();
            $gv = Category::where('id', 3)->get();


            $fbaged_items = Item::where('cat_id', 1)->take(5)->get();
            $insta_items = Item::where('cat_id', 2)->take(5)->get();
            $gv_items = Item::where('cat_id', 3)->take(5)->get();



            return view('welcome', compact('fbaged', 'gv', 'gv_items',  'user', 'insta_items', 'fbaged_items', 'insta_cat'));
        }

        return back()->with('error', "Email or Password Incorrect");
    }



    public function register(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the user after registration (optional)
        auth()->login($user);

        // Redirect the user to a protected route or dashboard
        return redirect('/');
    }





    public function profile(request $request)
    {


        $user = Auth::id();
        $orders = SoldLog::where('user_id', Auth::id())->get();


        return view('profile', compact('user', 'orders'));
    }




    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }


    public function session_resolve(request $request)
    {


        $resolve = session_resolve($request->session_id);

        $status = $resolve[0]['status'];
        $amount = $resolve[0]['amount'];
        $message = $resolve[0]['message'];


        if ($status == true) {
            User::where('id', Auth::id())->increment('balance', $amount);
            return back()->with('message', "Transaction successfully Resolved, NGN $amount added to ur wallet");
        }

        if ($status == false) {
            return back()->with('error', "$message");
        }
    }



    public function change_password(request $request)
    {

        $user = Auth::id();


        return view('change-password', compact('user'));
    }



    public function update_password_now(request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'password' => 'required|string|min:4|confirmed',
        ]);

        User::where('id', Auth::id())->update([
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect the user to a protected route or dashboard
        return back()->with('message', 'Password Changed Successfully');
    }
}
