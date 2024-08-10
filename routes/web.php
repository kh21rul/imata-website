<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardDivisionController;

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
Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/divisi/{division:slug}', [DivisionController::class, 'show']);

Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index');
    Route::get('/blog/{post:slug}', 'show')->name('post');
    Route::post('/blog/{post:slug}/comments', 'storeComment');
});

Route::get('/galeri', [GaleryController::class, 'index']);
Route::get('/toko', [ProductController::class, 'index']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->middleware('auth');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('dashboard/tags/checkSlug', [AdminTagController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/tags', AdminTagController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/comments', AdminCommentController::class)->middleware('auth');

Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');

Route::resource('/dashboard/divisions', DashboardDivisionController::class)->middleware('auth');

Route::resource('/dashboard/members', DashboardMemberController::class)->middleware('auth');
