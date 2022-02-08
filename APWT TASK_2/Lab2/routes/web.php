<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Basic Routes
Route::get('/', [PagesController::class, 'index'])->name('home');


//Student Routes



Route::get('/registrationCreate', [RegistrationController::class, 'registrationCreate'])->name('registrationCreate');
Route::post('/registrationCreate', [RegistrationController::class, 'studentCreatesubmitted'])->name('registrationCreate');

Route::get('/loginCreate', [LoginController::class, 'loginCreate'])->name('loginCreate');
Route::post('/loginCreate', [LoginController::class, 'studentCreatesubmitted'])->name('loginCreate');

Route::get('/contactCreate', [ContactController::class, 'contactCreate'])->name('contactCreate');

Route::post('/contactCreate', [ContactController::class, 'studentCreatesubmitted'])->name('contactCreate');



