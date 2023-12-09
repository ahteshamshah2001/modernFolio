<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;

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

// General Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('linktree', [HomeController::class, 'linktree'])->name('linktree');
Route::get('404', [HomeController::class, 'lost'])->name('404');

// Blog Routes
Route::resource('blogs', BlogController::class)->only(['index', 'show']);
Route::get('search', [BlogController::class, 'search'])->name('search');
Route::get('category/{slug}', [BlogController::class, 'category'])->name('category');
Route::get('/page/{slug}', [BlogController::class, 'pages'])->name('page');
Route::get('/feed', [BlogController::class, 'generateRssFeed'])->name('feed');

// Portfolio Routes
Route::get('portfolio', [HomeController::class, 'index'])->name('portfolio');

// Sitemap Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/post-sitemap.xml', [SitemapController::class, 'post'])->name('post-sitemap.xml');
Route::get('/category-sitemap.xml', [SitemapController::class, 'category'])->name('category-sitemap.xml');

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Blog Routes (p2)
Route::get('{slug}', [BlogController::class, 'detail'])->name('detail');
