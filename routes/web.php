<?php

use App\Models\Rack;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\RackController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\User\UserBookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('admin/category', CategoryController::class)->names('category');
Route::resource('admin/author', AuthorController::class)->names('author');
Route::resource('admin/rack', RackController::class)->names('rack');
Route::resource('admin/book', BookController::class)->names('book');





Route::get('/user/book', [UserBookController::class, 'index'])->name('UserBook');



require __DIR__.'/auth.php';
