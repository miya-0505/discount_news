<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

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

/*ストア情報*/
Route::get('/StoreInfo',function() {
    return view('posts.store_info');
});

/*ストアページ*/
Route::get('/StorePage', function() {
    return view('posts.store_page');
});

/*マップ*/
Route::get('/currentLocation' ,function() {
    return view('posts.currentLocation');
});
Route::get('/result', [ResultController::class, 'currentLocation'])->name('result.currentLocation');
