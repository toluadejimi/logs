<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::any('e-fund',  [HomeController::class,'e_fund']);
Route::any('e-check',  [HomeController::class,'e_check']);






