<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Product;


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

Route::get('add', [Product::class, 'add']);
Route::get('list', [Product::class, 'backlist']);
Route::get('list', 'Product@showList');
Route::get('list', 'Product@getData');
Route::Post('save', 'Product@save')->name('save');
Route::get('edit/{id}', 'Product@edit')->name('edit');
Route::Post('editsave/{id}', 'Product@update')->name('editsave');
Route::get('delete/{id}', 'Product@die');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
