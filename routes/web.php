<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\IndexController;


Route::get('/', function(){
    return view('welcome');
});

Route::group(['prefix' => 'backend', 'name' => 'backend.'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('backend.home');
});
