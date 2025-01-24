<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMailController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/ourServices', function () {
    return view('our-services');
})->name('our-services');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/trademark-renewal', function () {
    return view('trademark-renewal');
})->name('trademark-renewal');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('mail-contact', [ContactMailController::class, 'sendMail'])->name('mail-contact');

require __DIR__.'/auth.php';
