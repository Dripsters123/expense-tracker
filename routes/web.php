<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('expenses', ExpenseController::class);


Route::resource('categories', CategoryController::class);
