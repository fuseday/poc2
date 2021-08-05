<?php

use App\Torque\Entrypoints\Nested\DumpDie;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'joke' => __('chuck-norris.another_joke', [], 'en'),
        'entrypoint' => 'Nested.DumpDie@dd',
    ]);
});

Route::get('/details', function () {
    return Inertia::render('Details', [
        'bladeCounter' => view('partials.simple-counter')->render(),
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/secret', function () {
    return Inertia::render('HtmlPage', [
        'html' => view('partials.secret', [
            'shareIcon' => 'mdi-share',
//            'shareIcon' => 'mdi-share-circle', // switch me
        ])->render(),
    ]);
});

Route::get('/html', function () {
    return Inertia::render('HtmlPage', [
        'html' => view('partials.live-stream-demo')->render(),
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
