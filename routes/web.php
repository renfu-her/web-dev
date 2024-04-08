<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\IndexController;


Route::grt('/', function(){
    return view('welcome');
});

Route::group(['prefix' => 'backend.'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('backend.home');
});
