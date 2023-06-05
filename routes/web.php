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

Route::get('/', function () {
    return view('welcome');
});
// login
Route::get('/login', fn()=> view('login'))->name('login');

// Admin
Route::get('/admin/home', fn()=> view('admin.index'))->name('admin.index');
Route::get('/admin/produk', fn()=> view('admin.produk'))->name('admin.produk');
Route::get('/admin/tambahProduk', fn()=> view('admin.tambahProduk'))->name('admin.tambahProduk');
Route::get('/admin/informasiProduk', fn()=> view('admin.informasiProduk'))->name('admin.informasiProduk');
Route::get('/admin/editProduk', fn()=> view('admin.editProduk'))->name('admin.editProduk');
Route::get('/admin/pesanan', fn()=> view('admin.pesanan'))->name('admin.pesanan');
Route::get('/admin/informasiPesanan', fn()=> view('admin.informasiPesanan'))->name('admin.informasiPesanan');

// Users
Route::get('/users/home', fn()=> view('users.index'))->name('users.index');
Route::get('/users/checkout', fn()=> view('users.checkout'))->name('users.checkout');
Route::get('/users/comfirmPayment', fn()=> view('users.comfirmPayment'))->name('users.comfirmPayment');
Route::get('/users/succes', fn()=> view('users.succes'))->name('users.succes');
