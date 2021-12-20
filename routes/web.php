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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home_2');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');

Route::middleware("admin")->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

    //Category
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin_category_store');
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('/category/show/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    Route::get('/category/destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_destroy');



});

//admin_login
Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout_');
Route::post('/admin/login_check', [App\Http\Controllers\HomeController::class, 'login_check'])->name('login_check');


Route::get('/referance', [App\Http\Controllers\HomeController::class, 'referance'])->name('referance');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
