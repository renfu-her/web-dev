<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\Backend\UserController;


Route::get('/', function () {
    return 'OK';
});





Route::group(['prefix' => 'backend', 'name' => 'backend.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('backend.home');

    Route::resource('/', UserController::class);
    Route::get('users/list', [UserController::class, 'getUsers'])->name('backend.users.list');

    Route::get('students', [StudentController::class, 'index']);
    Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
});
