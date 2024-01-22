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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function() {
    Route::get('/', [Controllers\PageController::class, 'admin'])->name('index');
//    Route::put('/', [IndexController::class, 'saveGeneralData']);
//    Route::group(['as' => 'service-categories.', 'prefix' => 'service-categories'], function() {
//        Route::get('/', [ServiceCategoryController::class, 'index'])->name('index');
//        Route::get('/create', [ServiceCategoryController::class, 'create'])->name('create');
//        Route::post('/store', [ServiceCategoryController::class, 'store'])->name('store');
//        Route::get('/{serviceCategory}/edit', [ServiceCategoryController::class, 'edit'])->name('edit');
//        Route::put('/{serviceCategory}/update', [ServiceCategoryController::class, 'update'])->name('update');
//        Route::delete('/{serviceCategory}', [ServiceCategoryController::class, 'destroy'])->name('destroy');
//    });
    Route::group(['as' => 'services.', 'prefix' => 'services'], function() {
        Route::get('/', [Controllers\Admin\ServiceController::class, 'index'])->name('index');
        Route::get('/create', [Controllers\Admin\ServiceController::class, 'create'])->name('create');
        Route::post('/store', [Controllers\Admin\ServiceController::class, 'store'])->name('store');
        Route::get('/{service}/edit', [Controllers\Admin\ServiceController::class, 'edit'])->name('edit');
        Route::put('/{service}/update', [Controllers\Admin\ServiceController::class, 'update'])->name('update');
        Route::delete('/{service}', [Controllers\Admin\ServiceController::class, 'destroy'])->name('destroy');
    });
//    Route::group(['as' => 'employees.', 'prefix' => 'employees'], function() {
//        Route::get('/', [EmployeeController::class, 'index'])->name('index');
//        Route::get('/create', [EmployeeController::class, 'create'])->name('create');
//        Route::post('/store', [EmployeeController::class, 'store'])->name('store');
//        Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->name('edit');
//        Route::put('/{employee}/update', [EmployeeController::class, 'update'])->name('update');
//        Route::delete('/{employee}', [EmployeeController::class, 'destroy'])->name('destroy');
//    });
//    Route::group(['as' => 'bookings.', 'prefix' => 'bookings'], function() {
//        Route::get('/', [BookingController::class, 'index'])->name('index');
//        Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
//    });
//    Route::group(['as' => 'feedbacks.', 'prefix' => 'feedbacks'], function() {
//        Route::get('/', [FeedbackController::class, 'index'])->name('index');
//        Route::put('/{feedback}/approve', [FeedbackController::class, 'approve'])->name('approve');
//        Route::delete('/{feedback}', [FeedbackController::class, 'destroy'])->name('destroy');
//    });
});

require __DIR__.'/auth.php';
