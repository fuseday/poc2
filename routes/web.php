<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class);
Route::get('/details', [PagesController::class, 'details']);
Route::get('/html', [PagesController::class, 'html']);
Route::get('/remote-components', [PagesController::class, 'remoteComponents']);

Route::group(['middleware' => ['auth:sanctum', 'verified'] ], function () {
    Route::get('/secret', [PagesController::class, 'secret']);
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
});

