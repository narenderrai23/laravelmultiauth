<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';


Route::get('/branch/dashboard', function () {
    return view('branch.dashboard');
})->middleware(['auth:branch'])->name('branch.dashboard');

require __DIR__ . '/branchauth.php';


Route::get('/editor/dashboard', function () {
    return view('editor.dashboard');
})->middleware(['auth:editor'])->name('editor.dashboard');

require __DIR__ . '/editorauth.php';
