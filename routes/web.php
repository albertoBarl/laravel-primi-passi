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
    $title = "Primi passi in Laravel";
    return view('home', compact("title"));
});

// pagina 1
Route::get('/page1', function () {
    $titlep1 = "PAGE 1";
    return view('pages/page1', compact("titlep1"));
})->name("PAGE1");

// pagina 2
Route::get('/page2', function () {
    $titlep2 = "PAGE 2";
    return view('pages/page2', compact("titlep2"));
})->name("PAGE2");

// pagina 3
Route::get('/page3', function () {
    $titlep3 = "PAGE 3";
    return view('pages/page3', compact("titlep3"));
})->name("PAGE3");
