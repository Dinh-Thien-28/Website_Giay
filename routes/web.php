<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/single/{id}', [HomeController::class, 'product_detail'])->name('product_detail');


Route::get('dang-nhap', [LoginController::class, 'loginForm'])->name('login');
Route::post('dang-nhap', [LoginController::class, 'postLogin']);
Route::get('dang-xuat', function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');


Route::get('fake-password/{mk?}', function($mk = '123456'){
    return Hash::make($mk);
});
Route::get('demo-name/{id}', function($id){
    return $id;
})->middleware(['auth'])->name('demo_route');
