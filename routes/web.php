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

Route::get('admin/user', function () {
    return view('admin.page-dashboard.user');
})->name('admin.user');

Route::get('admin/e-commerse', function () {
    return view('admin.page-dashboard.e-commerse');
})->name('admin.e-commerse');

Route::get('admin/official', function () {
    return view('admin.page-dashboard.official');
})->name('admin.official');

Route::get('admin/category', function () {
    return view('admin.page-dashboard.category');
})->name('admin.category');

Route::get('admin/product', function () {
    return view('admin.page-dashboard.product');
})->name('admin.product');

Route::get('admin/promo', function () {
    return view('admin.page-dashboard.promo');
})->name('admin.promo');

Route::get('admin/order', function () {
    return view('admin.page-dashboard.order');
})->name('admin.order');

Route::get('admin/payment', function () {
    return view('admin.page-dashboard.payment');
})->name('admin.payment');

Route::get('admin/invoice', function () {
    return view('admin.page-dashboard.invoice');
})->name('admin.invoice');

Route::get('admin/landing-page', function () {
    return view('admin.page-dashboard.landing-page');
})->name('admin.landing-page');

Route::get('admin/home', function () {
    return view('admin.page-dashboard.home');
})->name('admin.home');

Route::get('admin/chat', function () {
    return view('admin.page-dashboard.chat');
})->name('admin.chat');

Route::get('admin/help', function () {
    return view('admin.page-dashboard.help');
})->name('admin.help');

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
