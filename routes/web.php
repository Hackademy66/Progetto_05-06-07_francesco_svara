<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;

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

// Routes Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');

// Routes Service
Route::get('/services', [ServiceController::class, 'services'])->name('services');

// Routes Article
Route::get('/articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('/article/dettaglio/{id}', [ArticleController::class, 'article_show'])->name('article-dettaglio');
Route::get('/article/create', [ArticleController::class, 'create'])->name('create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('store');