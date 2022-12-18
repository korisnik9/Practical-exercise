<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questionnaire;

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

Route::get('/info', function () {
    return view('info');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# post method for the form what we make in home page
Route::post('/save', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');


