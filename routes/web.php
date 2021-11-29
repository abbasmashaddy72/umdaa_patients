<?php

use App\Http\Controllers\CityLocalityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/doctors', function () {
        return view('doctors');
    })->name('doctors');

    Route::get('doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::post('doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::post('doctor/destroy/{id}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

    Route::get('/reviews', function () {
        return view('reviews');
    })->name('reviews');

    Route::get('review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('review/store', [ReviewController::class, 'store'])->name('review.store');
    Route::get('review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::post('review/update/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::post('review/destroy/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::post('service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

    Route::post('get-cities-by-state', [CityLocalityController::class, 'getCity']);
    Route::post('get-localities-by-cities', [CityLocalityController::class, 'getLocality']);
});
