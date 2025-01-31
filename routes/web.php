<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect("/tasks");
});

Route::middleware("guest")->group(function() {
    Route::get('/tasks', [TaskController::class, "index"]);
});

Route::middleware("auth")->group(function() {
    Route::get('/tasks', [TaskController::class, "index"]);
    Route::get('/tasks/create', [TaskController::class, "create"]);
    Route::post('/tasks/create', [TaskController::class, "store"]);
});

Route::get('/users', [UserController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
    // return redirect("/tasks");
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
