<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrderController;

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

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Destinations
Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
Route::get('/destination/{destination}', [DestinationController::class, 'view'])->name('destination.view');

// Order
Route::post('/destination/order', [OrderController::class, 'create'])->name('order.create');
Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth', 'verified'])->name('order.index');
Route::put('/orders/{order}/pay', [OrderController::class, 'pay'])->middleware(['auth', 'verified'])->name('order.pay');

// Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Etc
Route::get('/contact', function () { return view('contact'); })->name('contact');

