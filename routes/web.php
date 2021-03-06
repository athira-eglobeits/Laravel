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

Route::view('/customer_register', "customer_register");
Route::view('/customer_login', "customer_login");

Route::post('/register', 'Customer@register');
Route::post('/login', 'Customer@login');
