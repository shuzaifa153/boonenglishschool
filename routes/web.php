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

Route::get('welcome', function () {
    return view('welcome');
});

// ===================== +Project+ ==========================================


Route::get('/', function () {
    return view('home');
});

Route::get('adminpanal', function () {
    return view('adminpanal');
});

Route::get('login', function () {
    return view('login');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::resource('admin', 'App\Http\Controllers\SchoolManagementController');