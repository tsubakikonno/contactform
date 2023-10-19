<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'store']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/manage', [ContactController::class, 'find']);
Route::post('/manage', [ContactController::class, 'find']);
Route::post('/search', [ContactController::class, 'search']);
Route::get('/search', [ContactController::class, 'search']);
Route::post('delete', [ContactController::class, 'delete']);

;
