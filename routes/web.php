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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');

Route::get('/test-image/{id}', function ($id) {
	$destination = \App\Models\Destination::findOrFail($id);
	\Log::info('Test Image', [
			'image_url' => $destination->getFirstMediaUrl('destinations'),
			'all_media' => $destination->getMedia('destinations')->toArray()
	]);
	return $destination->getFirstMediaUrl('destinations');
});