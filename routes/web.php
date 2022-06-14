<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('admin/email', function () {
    return view('admin.mail.index');
})->name('admin.email');

Route::get('admin/user', function () {
    return view('admin.user.index');
})->name('admin.user');

Route::get('admin/e-commerse', function () {
    return view('admin.e-commerse.index');
})->name('admin.e-commerse');

Route::get('admin/official', function () {
    return view('admin.official.index');
})->name('admin.official');

Route::get('admin/category', function () {
    return view('admin.category.index');
})->name('admin.category');

Route::get('admin/product', function () {
    return view('admin.product.index');
})->name('admin.product');

Route::get('admin/promo', function () {
    return view('admin.promo.index');
})->name('admin.promo');

Route::get('admin/order', function () {
    return view('admin.order.index');
})->name('admin.order');

Route::get('admin/payment', function () {
    return view('admin.payment.index');
})->name('admin.payment');

Route::get('admin/invoice', function () {
    return view('admin.invoice.index');
})->name('admin.invoice');

Route::get('admin/landing-page', function () {
    return view('admin.landing-page.landing-page');
})->name('admin.landing-page');

Route::get('admin/home', function () {
    return view('admin.home.index');
})->name('admin.home');

Route::get('admin/chat', function () {
    return view('admin.chat.index');
})->name('admin.chat');

Route::get('admin/help', function () {
    return view('admin.settings.help');
})->name('admin.help');

Route::get('admin/profile', function () {
    return view('admin.settings.profile');
})->name('admin.profile');

Route::get('admin/setting', function () {
    return view('admin.settings.account-setting');
})->name('admin.setting');

Route::get('admin/help', function () {
    return view('admin.settings.help');
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
