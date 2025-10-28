<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTTHController;
use App\Http\Controllers\CustomerTTHDetailController;

Route::resource('customers', CustomerController::class)->except(['edit','update','show']);
Route::resource('customer-tth', CustomerTTHController::class)->except(['edit','update']);
Route::resource('customer-tth-detail', CustomerTTHDetailController::class)->only(['edit','update','destroy']);

    Route::get('customer-tth/{tthno}', [CustomerTTHController::class, 'show'])
    ->name('customer-tth.show');

Route::get('/', function () {
    return view('welcome');
});
