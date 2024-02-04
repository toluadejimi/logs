<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any('e-fund',  [HomeController::class,'e_fund']);
Route::any('e-check',  [HomeController::class,'e_check']);





