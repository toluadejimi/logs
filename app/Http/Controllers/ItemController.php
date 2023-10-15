<?php

namespace App\Http\Controllers;

use App\Models\CmFormation;
use App\Models\Formation;
use App\Models\GmFormation;
use App\Models\Item;
use App\Models\OnetoncmFormations;
use App\Models\Output;
use App\Models\OutputTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ItemController extends Controller
{



    public function index(request $request)
    {


        $output = Output::select('name',  'id', 'sn', 'qty')->get();
        $gmesh = Output::where('id', 2)->first()->qty;
        $cmesh = Output::where('id', 1)->first()->qty;
        $lmesh = Output::where('id', 3)->first()->qty;
        $bs = Output::where('id', 4)->first()->qty;
        $bf = Output::where('id', 5)->first()->qty;
        $pl = Output::where('id', 6)->first()->qty;






        return view('welcome', compact('output', 'gmesh', 'pl', 'cmesh', 'lmesh', 'bs', 'bf'));
    }


    public function ton_produce(request $request)
    {

        $final_item = $request->item;
        $ton = $request->tons;

        if ($final_item == 2 && $ton == 1) {

            //1 TON OF Chick Mash
            $cm = GmFormation::where('id', 1)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Growers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Growers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Growers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Growers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Growers Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm->salt) {
                return back()->with('error', 'SALT is insufficient to produce Growers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Growers Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Growers Mash');
            }

            $fulzyme = Item::where('id', 19)->first()->qty;
            if ($fulzyme < $cm->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Growers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm->zerotox) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Growers Mash');
            }

            $gprmix = Item::where('id', 8)->first()->qty;
            if ($gprmix < $cm->gprmix) {
                return back()->with('error', "GROWER'S PREMIX is insufficient to produce Growers Mash");
            }




            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm->limestone);
            $salt = Item::where('id', 12)->decrement('qty', $cm->salt);
            $lysine = Item::where('id', 17)->decrement('qty', $cm->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm->methionine);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm->zerotox);
            $gprmix = Item::where('id', 8)->decrement('qty', $cm->gprmix);


            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->salt;
            $trx->issued_qty = 3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->lysine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->methionine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->fulzyme;
            $trx->type = 'debit';
            $trx->issued_qty = 0.3;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->zerotox;
            $trx->issued_qty = 0.3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 8)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm->gprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 2.5;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 1);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "1 Ton of Growser's Mash Restock successful");
        }



        if ($final_item == 2 && $ton == 2) {

            //1.5 TON OF Chick Mash
            $cm5 = GmFormation::where('id', 2)->first();

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < $cm5->maize) {
                return back()->with('error', 'MAIZE is insufficient to produce Growers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < $cm5->soya) {
                return back()->with('error', 'SOYA is insufficient to produce Growers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < $cm5->weathofful) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Growers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < $cm5->bonemeal) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Growers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < $cm5->limestone) {
                return back()->with('error', 'LIME STONE is insufficient to produce Growers Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < $cm5->salt) {
                return back()->with('error', 'SALT is insufficient to produce Growers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < $cm5->lysine) {
                return back()->with('error', 'LYSINE is insufficient to produce Growers Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < $cm5->methionine) {
                return back()->with('error', 'METHIONINE is insufficient to produce Growers Mash');
            }

            $fulzyme = Item::where('id', 19)->first()->qty;
            if ($fulzyme < $cm5->fulzyme) {
                return back()->with('error', 'FULZYME is insufficient to produce Growers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < $cm5->zerotox) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Growers Mash');
            }

            $gprmix = Item::where('id', 8)->first()->qty;
            if ($gprmix < $cm5->gprmix) {
                return back()->with('error', "GROWER'S PREMIX is insufficient to produce Growers Mash");
            }




            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', $cm5->maize);
            $soya = Item::where('id', 2)->decrement('qty', $cm5->soya);
            $weathofful = Item::where('id', 5)->decrement('qty', $cm5->weathofful);
            $bonemeal = Item::where('id', 3)->decrement('qty', $cm5->bonemeal);
            $limestone = Item::where('id', 4)->decrement('qty', $cm5->limestone);
            $salt = Item::where('id', 12)->decrement('qty', $cm5->salt);
            $lysine = Item::where('id', 17)->decrement('qty', $cm5->lysine);
            $methionine = Item::where('id', 18)->decrement('qty', $cm5->methionine);
            $fulzyme = Item::where('id', 19)->decrement('qty', $cm5->fulzyme);
            $zerotox = Item::where('id', 20)->decrement('qty', $cm5->zerotox);
            $gprmix = Item::where('id', 8)->decrement('qty', $cm5->gprmix);


            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = $cm5->maize;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = $cm5->soya;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = $cm5->weathofful;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = $cm5->bonemeal;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = $cm5->limestone;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->salt;
            $trx->issued_qty = 3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->lysine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->methionine;
            $trx->issued_qty = 1;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->fulzyme;
            $trx->type = 'debit';
            $trx->issued_qty = 0.3;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->zerotox;
            $trx->issued_qty = 0.3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 8)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = $cm5->gprmix;
            $trx->type = 'debit';
            $trx->issued_qty = 2.5;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 1.5);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1.5;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "1.5 Tons of Growser's Mash Restock successful");
        }

        // if ($final_item == 2 && $ton == 2) {

        //     //Maize
        //     $maize = Item::where('id', 1)->first()->qty;
        //     if ($maize < 750) {
        //         return back()->with('error', 'MAIZE is insufficient to produce Growers Mash');
        //     }
        //     $soya = Item::where('id', 2)->first()->qty;
        //     if ($soya < 285) {
        //         return back()->with('error', 'SOYA is insufficient to produce Growers Mash');
        //     }

        //     $weathofful = Item::where('id', 5)->first()->qty;
        //     if ($weathofful < 340.5) {
        //         return back()->with('error', 'WHEATOFFUL is insufficient to produce Growers Mash');
        //     }

        //     $bonemeal = Item::where('id', 3)->first()->qty;
        //     if ($bonemeal < 37.5) {
        //         return back()->with('error', 'BONE MEAL is insufficient to produce Growers Mash');
        //     }

        //     $limestone = Item::where('id', 4)->first()->qty;
        //     if ($limestone < 75) {
        //         return back()->with('error', 'LIME STONE is insufficient to produce Growers Mash');
        //     }

        //     $salt = Item::where('id', 12)->first()->qty;
        //     if ($salt < 4.5) {
        //         return back()->with('error', 'SALT is insufficient to produce Growers Mash');
        //     }

        //     $lysine = Item::where('id', 17)->first()->qty;
        //     if ($lysine < 1.5) {
        //         return back()->with('error', 'LYSINE is insufficient to produce Growers Mash');
        //     }

        //     $methionine = Item::where('id', 18)->first()->qty;
        //     if ($methionine < 1.5) {
        //         return back()->with('error', 'METHIONINE is insufficient to produce Growers Mash');
        //     }

        //     $fulzyme = Item::where('id', 19)->first()->qty;
        //     if ($fulzyme < 0.45) {
        //         return back()->with('error', 'FULZYME is insufficient to produce Growers Mash');
        //     }

        //     $zerotox = Item::where('id', 20)->first()->qty;
        //     if ($zerotox < 0.45) {
        //         return back()->with('error', 'ZEROTOX is insufficient to produce Growers Mash');
        //     }

        //     $gprmix = Item::where('id', 8)->first()->qty;
        //     if ($gprmix < 3.75) {
        //         return back()->with('error', "GROWER'S PREMIX is insufficient to produce Growers Mash");
        //     }




        //     //Deduction
        //     $maize = Item::where('id', 1)->decrement('qty', 750);
        //     $soya = Item::where('id', 2)->decrement('qty', 285);
        //     $weathofful = Item::where('id', 5)->decrement('qty', 340.5);
        //     $bonemeal = Item::where('id', 3)->decrement('qty', 37.5);
        //     $limestone = Item::where('id', 4)->decrement('qty', 75);
        //     $salt = Item::where('id', 12)->decrement('qty', 4.5);
        //     $lysine = Item::where('id', 17)->decrement('qty', 1.5);
        //     $methionine = Item::where('id', 18)->decrement('qty', 1.5);
        //     $fulzyme = Item::where('id', 19)->decrement('qty', 0.45);
        //     $zerotox = Item::where('id', 20)->decrement('qty', 0.45);
        //     $gprmix = Item::where('id', 8)->decrement('qty', 3.75);


        //     //history
        //     $balance = Item::where('id', 1)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 1;
        //     $trx->issued_qty = 750;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 2)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 2;
        //     $trx->issued_qty = 285;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 5)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 5;
        //     $trx->issued_qty = 340.5;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 3)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 3;
        //     $trx->issued_qty = 37.5;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 4)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 4;
        //     $trx->issued_qty = 75;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 12)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 12;
        //     $trx->issued_qty = 4.5;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 17)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 17;
        //     $trx->issued_qty = 1.5;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();


        //     $balance = Item::where('id', 18)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 18;
        //     $trx->issued_qty = 1.5;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 19)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 19;
        //     $trx->type = 'debit';
        //     $trx->issued_qty = 0.45;
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 20)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 20;
        //     $trx->issued_qty = 0.45;
        //     $trx->type = 'debit';
        //     $trx->balance = $balance;
        //     $trx->save();

        //     $balance = Item::where('id', 8)->first()->qty;
        //     $trx = new Transaction();
        //     $trx->item_id = 8;
        //     $trx->type = 'debit';
        //     $trx->issued_qty = 3.45;
        //     $trx->balance = $balance;
        //     $trx->save();



        //     $output = Output::where('id', $final_item)->increment('qty', 1.5);
        //     $balance = Output::where('id', $final_item)->first()->qty;

        //     $trx = new OutputTransaction();
        //     $trx->item_id = $final_item;
        //     $trx->type = 'credit';
        //     $trx->issued_qty = 1.5;
        //     $trx->balance = $balance;
        //     $trx->save();



        //     return back()->with('message', "1.5 Tons of Growser's Mash Restock successful");
        // }

        if ($final_item == 3 && $ton == 1) {

            //Maize
            $maize = Item::where('id', 1)->first()->qty;
            if ($maize < 580) {
                return back()->with('error', 'MAIZE is insufficient to produce Layers Mash');
            }
            $soya = Item::where('id', 2)->first()->qty;
            if ($soya < 190) {
                return back()->with('error', 'SOYA is insufficient to produce Layers Mash');
            }

            $weathofful = Item::where('id', 5)->first()->qty;
            if ($weathofful < 93) {
                return back()->with('error', 'WHEATOFFUL is insufficient to produce Layers Mash');
            }

            $bonemeal = Item::where('id', 3)->first()->qty;
            if ($bonemeal < 30) {
                return back()->with('error', 'BONE MEAL is insufficient to produce Layers Mash');
            }

            $limestone = Item::where('id', 4)->first()->qty;
            if ($limestone < 96) {
                return back()->with('error', 'LIME STONE is insufficient to produce Layers Mash');
            }

            $salt = Item::where('id', 12)->first()->qty;
            if ($salt < 3) {
                return back()->with('error', 'SALT is insufficient to produce Layers Mash');
            }

            $lysine = Item::where('id', 17)->first()->qty;
            if ($lysine < 2) {
                return back()->with('error', 'LYSINE is insufficient to produce Layers Mash');
            }

            $methionine = Item::where('id', 18)->first()->qty;
            if ($methionine < 2) {
                return back()->with('error', 'METHIONINE is insufficient to produce Layers Mash');
            }

            $fulzyme = Item::where('id', 19)->first()->qty;
            if ($fulzyme < 0.5) {
                return back()->with('error', 'FULZYME is insufficient to produce Layers Mash');
            }

            $zerotox = Item::where('id', 20)->first()->qty;
            if ($zerotox < 0.3) {
                return back()->with('error', 'ZEROTOX is insufficient to produce Layers Mash');
            }

            $lprmix = Item::where('id', 9)->first()->qty;
            if ($lprmix < 2.5) {
                return back()->with('error', "LAYER'S PREMIX is insufficient to produce Layers Mash");
            }




            //Deduction
            $maize = Item::where('id', 1)->decrement('qty', 580);
            $soya = Item::where('id', 2)->decrement('qty', 190);
            $weathofful = Item::where('id', 5)->decrement('qty', 93);
            $bonemeal = Item::where('id', 3)->decrement('qty', 30);
            $limestone = Item::where('id', 4)->decrement('qty', 96);
            $salt = Item::where('id', 12)->decrement('qty', 3);
            $lysine = Item::where('id', 17)->decrement('qty', 2);
            $methionine = Item::where('id', 18)->decrement('qty', 2);
            $fulzyme = Item::where('id', 19)->decrement('qty', 0.5);
            $zerotox = Item::where('id', 20)->decrement('qty', 0.3);
            $lprmix = Item::where('id', 9)->decrement('qty', 2.5);


            //history
            $balance = Item::where('id', 1)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 1;
            $trx->issued_qty = 580;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 2)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 2;
            $trx->issued_qty = 190;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 5)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 5;
            $trx->issued_qty = 93;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 3)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 3;
            $trx->issued_qty = 30;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 4)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 4;
            $trx->issued_qty = 96;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 12)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 12;
            $trx->issued_qty = 3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 17)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 17;
            $trx->issued_qty = 2;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();


            $balance = Item::where('id', 18)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 18;
            $trx->issued_qty = 2;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 19)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 19;
            $trx->type = 'debit';
            $trx->issued_qty = 0.5;
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 20)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 20;
            $trx->issued_qty = 0.3;
            $trx->type = 'debit';
            $trx->balance = $balance;
            $trx->save();

            $balance = Item::where('id', 9)->first()->qty;
            $trx = new Transaction();
            $trx->item_id = 8;
            $trx->type = 'debit';
            $trx->issued_qty = 2.5;
            $trx->balance = $balance;
            $trx->save();



            $output = Output::where('id', $final_item)->increment('qty', 1);
            $balance = Output::where('id', $final_item)->first()->qty;

            $trx = new OutputTransaction();
            $trx->item_id = $final_item;
            $trx->type = 'credit';
            $trx->issued_qty = 1;
            $trx->balance = $balance;
            $trx->save();



            return back()->with('message', "1 Ton of Layer's Mash Restock successful");
        }



        return back()->with('error', "No formation present");
    }



    public function history(request $request)
    {


        $item_history = OutputTransaction::latest()->get();
        $material_history = Transaction::latest()->get();


        return view('history', compact('item_history', 'material_history'));




    }





    public function add_new_stock(request $request)
    {

        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;


        Item::where('id', $id)->increment('qty', $qty);
        $trx = new Transaction();
        $trx->item_id = $id;
        $trx->issued_qty = (int)$qty;
        $trx->type = "credit";
        $trx->balance = (int)$get_qty + (int)$qty;
        $trx->save();

        return back()->with('message', "Item has been successfully Added ");
    }

    public function add_major_stock(request $request)
    {

        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;


        Output::where('id', $id)->increment('qty', $qty);
        $trx = new Transaction();
        $trx->item_id = $id;
        $trx->issued_qty = (int)$qty;
        $trx->type = "credit";
        $trx->balance = (int)$get_qty + (int)$qty;
        $trx->save();

        return back()->with('message', "Item has been successfully Added ");
    }






    public function issue_material_stock(request $request)
    {
        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Item::where('id', $id)->first()->qty;

        if ($get_qty < $qty) {
            return back()->with('error', "Insufficient Stock, Kindly restock and try again");
        } else {
            Item::where('id', $id)->decrement('qty', $qty);
            $trx = new Transaction();
            $trx->item_id = $id;
            $trx->issued_qty = (int)$qty;
            $trx->balance = (int)$get_qty - (int)$qty;
            $trx->type = "debit";
            $trx->save();
            return back()->with('message', "Item has been successfully Issued Out");
        }
    }






    public function item(request $request)
    {


        $items = Item::select('name',  'id', 'qty')->get();
        $major = Output::select('name',  'id', 'qty')->get();


        return view('items', compact('items', 'major'));
    }

    public function add_stock(request $request)
    {

        $name = $request->name;

        $new = new Item();
        $new->name = $name;
        $new->save();

        return back()->with('message', "Item added successfully");
    }


    public function issue_now(request $request)
    {


        $id = $request->item;
        $qty = $request->qty;

        $get_qty = Output::where('id', $id)->first()->qty;

        if ($get_qty < $qty) {
            return back()->with('error', "Insufficient Stock, Kindly restock and try again");
        } else {


            Output::where('id', $id)->decrement('qty', $qty);

            $trx = new OutputTransaction();
            $trx->item_id = $id;
            $trx->issued_qty = $qty;
            $trx->balance = $get_qty - $qty;
            $trx->type = 'debit';
            $trx->save();

            return back()->with('message', "Item has been successfully Issued Out");
        }





        $output = Output::select('name', 'sn', 'qty')->get();

        return view('welcome', compact('output'));
    }



    public function formation_view(){


        $formation_title = null;

        return view('formular', compact('formation_title'));




    }

	public function search(request $request)
	{



        $name = $request->name;
        $ton = $request->ton;

        if($name == 'gm' && $ton == 1 ){


            $formation = GmFormation::where('id', 1)->first();
            $formation_title = $formation->title ?? null;
            $fm_code = "gm1";


            return view ('formular', compact('formation','fm_code','formation_title'));


         }

         if($name == 'gm' && $ton == 15 ){


            $formation = GmFormation::where('id', 2)->first();
            $formation_title = $formation->title ?? null;
            $fm_code = "gm15";


            return view ('formular', compact('formation','fm_code','formation_title'));


         }




        if($name == 'cm' && $ton == 1 ){


           $formation = CmFormation::where('id', 1)->first();
           $formation_title = $formation->title ?? null;
           $formation_note = null;

           return view('formular', compact('formation', 'formation_note', 'formation_title'));

        }




        $formation_note = "No Formation Found";
        $formation_title = null;

        return view('formular', compact('formation_title', 'formation_note'));









	}

	public function update_formation(request $request)
	{


        if($request->fm_code == 'gm1'){


            GmFormation::where('id', 1)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'gprmix' => $request->gprmix,
                'lprmix' => $request->lprmix,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }




        if($request->fm_code == 'gm15'){


            GmFormation::where('id', 2)->update([

                'maize' => $request->maize,
                'soya' => $request->soya,
                'weathofful' => $request->weathofful,
                'bonemeal' => $request->bonemeal,
                'limestone' => $request->limestone,
                'salt' => $request->salt,
                'fulzyme' => $request->fulzyme,
                'zerotox' => $request->zerotox,
                'gprmix' => $request->gprmix,
                'lprmix' => $request->lprmix,


            ]);

            return back()->with('message', 'Chick Mash Formation has been updated');
        }


	}





}









