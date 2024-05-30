<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employeecontroller;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    

    Route::get('employee-mngt', [Employeecontroller::class, 'index'])->name('employee-mngt.index');
    Route::post('employee-mngt', [Employeecontroller::class, 'store'])->name('employee-mngt.store');

    Route::get('employee-mngt/{id}/edit', [Employeecontroller::class, 'edit'])->name('employee-mngt.edit');
    Route::post('employee-mngt/{id}', [Employeecontroller::class, 'update'])->name('employee-mngt.update');

    Route::resource("/uniqueemployee", Employeecontroller::class);
});
