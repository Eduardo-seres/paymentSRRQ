<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
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
    return view('paymentMSI');
});


Route::post('/procesar-pago', [PaymentController::class, 'createOrder']);


Route::get('/finanzas', function () {
    return view('fianzasSaldo');
});


Route::get('/passForgot', function () {
    return view('forgotPass');
});