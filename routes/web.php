<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('api/users', [UserController::class, 'index']);
Route::get('api/users/{id}', [UserController::class, 'show']);

Route::get('api/books', [BookController::class, 'index']);
Route::get('api/books/{id}', [BookController::class, 'show']);

Route::get('api/loans', [LoanController::class, 'index']);
Route::get('api/loans/{id}', [LoanController::class, 'show']);