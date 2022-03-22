<?php

use App\Http\Controllers\AspirasiController;
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

// User
Route::get('/', function () {
    return view('index');
});
Route::get('/profile', function () {
    return view('profile');
})->name('profil');

// Aspirasi
Route::post('/aspirasi/create', [AspirasiController::class, 'create']);