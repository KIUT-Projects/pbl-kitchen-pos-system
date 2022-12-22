<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::any('/products', [ApiController::class, 'products']);
Route::any('/product/{id}', [ApiController::class, 'product']);

Route::any('/order/store', [ApiController::class, 'orderStore']);

