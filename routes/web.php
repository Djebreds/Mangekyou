<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
    return view('welcome');
});

Route::get('admin/dashboard', function () {
    return view('admin.page-dashboard.dashboard');
})->name('admin.dashboard');

Route::get('admin/email', function () {
    return view('admin.page-dashboard.mail');
})->name('admin.email');

Route::get('/coba', function () {
    return view('admin.test');
});

Route::get('/test', function () {
    return view('verify');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile', function () {
})->middleware('verified');
