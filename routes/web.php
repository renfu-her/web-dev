<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AdminController;


Route::get('/', function () {
    return 'OK';
});


Route::group(['prefix' => 'backend', 'name' => 'backend.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('backend.home');

    Route::get('/', [UserController::class, 'index'])->name('backend.users');
    Route::resource('/users', UserController::class);
    Route::get('users/list', [UserController::class, 'getUsers'])->name('backend.users.list');

    Route::get('students', [StudentController::class, 'index']);
    Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

    Route::get('/logout', [AdminController::class, 'logout'])->name('backend.logout');
});

Route::get('/backend/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/backend/login', [AdminController::class, 'login']);
