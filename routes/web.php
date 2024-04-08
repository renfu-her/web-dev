<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\Backend\IndexController;


Route::get('/', function(){
    return 'OK';
});



Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::group(['prefix' => 'backend', 'name' => 'backend.'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('backend.home');

    Route::get('/', [IndexController::class, 'index'])->name('backend.users');
    Route::get('users/list', [IndexController::class, 'getUsers'])->name('backend.users.list');
});
