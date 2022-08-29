<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('index');
});


//-------------------------------------------------------------------------
//PORTUGUÊS
//-------------------------------------------------------------------------
Route::get('/BR', function (Request $request) {
    app()->setlocale('br');
    $rota = $request->route();
    return view('index');
})->name('BR');

//-------------------------------------------------------------------------
//INGLÊS
//-------------------------------------------------------------------------
Route::get('/EN', function (Request $request) {
    app()->setlocale('en');
    return view('index');
})->name('EN');
//-------------------------------------------------------------------------

Route::get('/pappers', function () {
    return view('pappers');
})->name('pappers');

Route::get('/smarty', function () {
    app()->setlocale('br');
    return view('smarty');
})->name('smarty');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
