<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserNotificationsController;
use App\Http\Controllers\Auth\PaymentController;
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

Route::get('/', function () {
    $articles = App\Models\Articles::take(2)->latest()->get();

    return view('welcome', [
        'articles' => $articles
    ]);
})->name('welcome');

Route::get('films', function () {
    return view('films');
});


Route::get('series', function () {
    return view('series');
});

Route::get('ratings', function () {
    return view('ratings');
});

Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');
Route::post('articles', [ArticlesController::class, 'store'])->name('articles.store');
Route::get('articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
Route::delete('articles/{article}', [ArticlesController::class, 'destroy'])->name('articles.destroy');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    
Route::get('contacts', [ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('payment', [PaymentController::class, 'create'])->name('payment.create');
Route::post('payment', [PaymentController::class, 'store'])->name('payment.store');

Route::get('notifications', [UserNotificationsController::class, 'show'])->name('notifications.show');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
