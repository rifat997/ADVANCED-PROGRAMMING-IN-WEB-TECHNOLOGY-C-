<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/Ourteams', [PagesController::class, 'Ourteams'])->name('Ourteams');
Route::get('/aboutus', [PagesController::class, 'aboutUs'])->name('aboutus');
Route::get('/contactus', [PagesController::class, 'contactus'])->name('contactus');


