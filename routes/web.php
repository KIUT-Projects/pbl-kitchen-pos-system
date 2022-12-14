<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Service\TelegramController;
use Illuminate\Support\Facades\Auth;
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

// AUTH ROUTES
Auth::routes();

// PUBLIC ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');

// SERVICE ROUTES
Route::prefix('service')->group(function (){

    // TELEGRAM
    Route::prefix('telegram')->group(function () {
        Route::any('/', [TelegramController::class, 'callback']);
    });

});
