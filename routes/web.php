<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HierarchyController;
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

// Digital-clock
Route::get('/digital-clock', function () {
    return view('digital_clock');
});

Route::get('/hierarchies', [HierarchyController::class, 'index']);
