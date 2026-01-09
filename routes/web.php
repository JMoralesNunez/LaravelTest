<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    Route::get('users/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::get('users/create/new', [UsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [UsersController::class,'store'])->name('users.store');
    Route::post('users/update/{id}', [UsersController::class,'update'])->name('users.update');
    Route::delete('users/delete/{id}', [UsersController::class,'destroy'])->name('users.destroy');

});
