<?php

namespace GvsuWebTeam\Hotels;

use Illuminate\Support\Facades\Route;
use GvsuWebTeam\Hotels\Http\Controllers\HotelController;

Route::get('hotels', [HotelController::class, 'index'])->name('hotels.index');

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'hotels/admin'], function() {
	Route::get('/', [HotelController::class, 'index'])->name('hotels.admin.index');
	Route::get('/create', [HotelController::class, 'create'])->name('hotels.admin.create');
	Route::post('/create', [HotelController::class, 'store'])->name('hotels.admin.store');
	Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('hotels.admin.edit');
	Route::patch('/{hotel}/edit', [HotelController::class, 'update'])->name('hotels.admin.update');
	Route::delete('/{hotel}', [HotelController::class, 'destroy'])->name('hotels.admin.destroy');
});
