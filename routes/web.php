<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// CLIENT PAGES
Route::get('/', [HomeController::class, 'getHome']);
Route::get('/login', [HomeController::class, 'getLogin'])->name('login');
Route::get('/product/{id}', [HomeController::class, 'getProduct']);
Route::get('/single/{id}', [HomeController::class, 'getSingle']);
Route::get('/contact', [HomeController::class, 'getContact']);
Route::get('/about', [HomeController::class, 'getAbout']);
Route::get('/checkout', [HomeController::class, 'getCheckout']);
Route::get('/payment', [HomeController::class, 'getPayment']);

//ADMIN PAGES
Route::get('/admin', [AdminController::class, 'getHome']);
Route::get('/admin/login', [AdminController::class, 'getLogin']);
Route::post('/admin/login', [AdminController::class, 'postLogin'])->name('login');

Route::get('/admin/addpro', [AdminController::class, 'getAddpro']);
Route::post('/admin/addpro', [AdminController::class, 'postAddpro'])->name('addpro');
Route::get('/admin/listpro', [AdminController::class, 'getListpro']);
Route::delete('/admin/delpro/{id}',[AdminController::class, 'Deletepro'])->name('delpro');
Route::get('/admin/updatepro/{id}', [AdminController::class, 'getUpdatepro']);
Route::post('/admin/updatepro/{id}', [AdminController::class, 'postUpdatepro'])->name('updatepro');

Route::get('/admin/addtype', [AdminController::class, 'getAddtype']);
Route::get('/admin/listtype', [AdminController::class, 'getListtype']);

Route::get('/admin/listbill', [AdminController::class, 'getListbill']);
Route::get('/admin/listbill/{id}', [AdminController::class, 'getNhanbill'])->name('nhan');
Route::get('/admin/listbill1/{id}', [AdminController::class, 'getHuybill'])->name('huy');

Route::get('/shipper', [AdminController::class, 'getShipper']);

Route::get('/admin/xempro', [AdminController::class, 'getXempro']);
