<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ItemsController;/*商品登録機能用（投稿）*/

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*トップページ*/
Route::get('/', function() {
    return view('posts.top');
});

/*マイページ*/
Route::get('/MyPage',function() {
    return view('posts.my_page');
});

/*ログイン*/
Route::get('/LogIn',function() {
    return view('posts.login');
});

/*店舗ログイン*/
Route::get('/StoreLogin',function() {
    return view('auth.store_login');
});
/*-----------------------*/
Route::get('/admin/login', function () {
    return view('adminLogin');
});/*->middleware('guest:admin')*/
Route::get('/admin/dashboard', function () {
    return view('adminDashboard');
})->middleware('auth:admin');

Route::get('/admin/log', [\App\Http\Controllers\LoginController::class, 'adminLogin'])->name('login');
Route::post('/admin/log', [\App\Http\Controllers\Login::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [\App\Http\Controllers\LoginController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/logout', [\App\Http\Controllers\LoginController::class, 'adminLogout'])->name('admin.logout');


/*ストア新規登録*/
Route::get('/StoreRegister', function() {
    return view('auth.store_register');
});

Route::get('/admin/registers', [\App\Http\Controllers\RegisterController::class, 'adminRegisterForm']);

Route::post('/admin/register', [\App\Http\Controllers\RegisterController::class, 'adminRegister'])->middleware('auth:admin')->name('admin.register');


/*ストア情報*/
Route::get('/StoreInfo',function() {
    return view('posts.store_info');
});

/*ストアページ*/
Route::get('/StorePage', function() {
    return view('posts.store_page');
});
/*商品登録（投稿）ページ*/
Route::resource('items', ItemsController::class);
/*上記と下記は同義
Route::get('/items', [ItemController::class, 'index']);
Route::post('/items', [ItemController::class, 'store']);
*/

/*マップ*/
Route::get('/currentLocation' ,function() {
    return view('posts.currentLocation');
});
Route::get('/result', [ResultController::class, 'currentLocation'])->name('result.currentLocation');
