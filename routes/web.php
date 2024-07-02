<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

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

Route::get('/', function () { return view('welcome'); });

Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
Route::get('/destination/{destination}', [DestinationController::class, 'view'])->name('destination.view');

Route::get('/contact', function () { return view('contact'); });