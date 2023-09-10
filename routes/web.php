<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('articles', [ArticleController::class, 'index'])->name('articles');
Route::get('articles/{slug}', [ArticleController::class, 'view'])->name('articles.view');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('articles', AdminArticleController::class);

Route::resource('tags', TagController::class);

Route::resource('roles', RoleController::class);

Route::resource('users', UserController::class);

});

require __DIR__.'/auth.php';
