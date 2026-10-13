<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Страница услуг с формой
Route::get('/services', [SiteController::class, 'services'])->name('services.form');

// Обработка отправки формы заявки через контроллер
Route::post('/services', [SiteController::class, 'storeService'])->name('services.store');
