<?php

use App\Http\Controllers\MovieController;
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

Route::get('/',function(){return view('welcome');});
Route::get('upload', [MovieController::class, 'form']);
Route::post('store-data', [MovieController::class, 'storeData']);
Route::get('all-movies', [MovieController::class, 'allMovies']);
Route::get('{url}',[MovieController::class, 'movieInfo']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
