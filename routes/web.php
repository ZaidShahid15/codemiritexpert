<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/services',  [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('services.detail');
Route::get('/work',      [PageController::class, 'work'])->name('work');
Route::get('/about',     [PageController::class, 'about'])->name('about');
Route::get('/contact',   [PageController::class, 'contact'])->name('contact');

Route::post('/contact',  [ContactController::class, 'send'])->name('contact.send');
