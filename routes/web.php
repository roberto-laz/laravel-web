<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoberMiddleware;

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


Route::middleware(['secured'])->group(function () {
    
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);

    Route::middleware(['robertito'])->group(function () {
        // yes you can group within a group 
    });

});

Route::middleware(['noLogin'])->group(function () {

    Route::get('/', function () {
        return to_route('users.index');
    });    

    Route::get('/admin', function () {
        return view('admin');
    });    

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/blank', function () {
        return view('blank');
    });

});

