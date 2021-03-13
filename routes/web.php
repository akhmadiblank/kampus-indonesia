<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
//     return view('home');
// });
//Route::get('/', [AccountController::class, 'index']);
Route::get('/', [PageController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('accounts', AccountController::class);
    Route::resource('info', InfoController::class);

    //
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
