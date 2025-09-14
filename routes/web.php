<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TtsController;

Route::get('/', [TtsController::class, 'index']);
Route::post('/speak', [TtsController::class, 'speak']);
