<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
Route::get('/property/{slug}', [PropertyController::class, 'show'])->name('property.show');
Route::get('/run-migrations', function () {
    // Only allow if a secret key matches (basic security)
    if (request('key') !== 'your-secret-key-here') {
        abort(403);
    }
    
    Artisan::call('migrate', ['--force' => true]);
    return Artisan::output();
});
