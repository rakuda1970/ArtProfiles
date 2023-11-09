<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\Controller;

use App\Http\Controllers\ArtProfilesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('/profiles', ArtProfilesController::class);

require __DIR__.'/auth.php';