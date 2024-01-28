<?php

use App\Http\Controllers;
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

Route::get('/', [Controllers\PageController::class, 'index'])->name('index');
Route::get('/certificates', [Controllers\PageController::class, 'certificates'])->name('certificates');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [Controllers\PageController::class, 'admin'])->name('index');
    Route::group(['as' => 'services.', 'prefix' => 'services'], function () {
        Route::get('/', [Controllers\Admin\ServiceController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\Admin\ServiceController::class, 'create'])->name('create');
        Route::post('/store', [Controllers\Admin\ServiceController::class, 'store'])->name('store');
        Route::get('/{service}/edit', [Controllers\Admin\ServiceController::class, 'edit'])->name('edit');
        Route::put('/{service}/update', [Controllers\Admin\ServiceController::class, 'update'])->name('update');
        Route::delete('/{service}', [Controllers\Admin\ServiceController::class, 'destroy'])->name('destroy');
    });
    Route::group(['as' => 'requests.', 'prefix' => 'requests'], function () {
        Route::get('/', [Controllers\Admin\RequestController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\Admin\RequestController::class, 'create'])->name('create');
        Route::post('/store', [Controllers\Admin\RequestController::class, 'store'])->name('store');
        Route::get('/{service}/edit', [Controllers\Admin\RequestController::class, 'edit'])->name('edit');
        Route::put('/{service}/update', [Controllers\Admin\RequestController::class, 'update'])->name('update');
        Route::delete('/{service}', [Controllers\Admin\RequestController::class, 'destroy'])->name('destroy');
    });
    Route::group(['as' => 'reviews.', 'prefix' => 'reviews'], function () {
        Route::get('/', [Controllers\Admin\ReviewController::class, 'index'])->name('index');
    });
});

require __DIR__ . '/auth.php';
