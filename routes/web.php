<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        "comics" =>  config("comics"),
        "navmenu" => config("navigationmenu"),
        "topData" => config("footerTopData"),
        "bottomData" => config("footerBottomData"),
];
    return view('index', $data);
})->name("home");

Route::get('/chi-siamo', function(){

    $data = [
        "navmenu" => config("navigationmenu"),
        "topData" => config("footerTopData"),
        "bottomData" => config("footerBottomData"),
    ];

    return view('chi-siamo', $data);
})->name("whos");