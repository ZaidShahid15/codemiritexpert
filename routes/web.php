<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/services',  [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('services.detail');
Route::get('/work',      [PageController::class, 'work'])->name('work');
Route::get('/work/{slug}', [PageController::class, 'workDetail'])->name('work.detail');
Route::get('/ai-solutions', [PageController::class, 'aiSolutions'])->name('ai-solutions');
Route::get('/blog',          [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}',   [PageController::class, 'blogDetail'])->name('blog.detail');
Route::get('/about',     [PageController::class, 'about'])->name('about');
Route::get('/contact',   [PageController::class, 'contact'])->name('contact');

Route::post('/contact',  [ContactController::class, 'send'])->name('contact.send');

Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/sitemap.xml', [PageController::class, 'sitemapXml'])->name('sitemap.xml');

