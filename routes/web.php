<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'openGame']);
Route::get('/gamePage', [HomeController::class, 'startGame']);
Route::get('/studyPage', [HomeController::class, 'startStudy']);
Route::get('{level}', [HomeController::class, 'loadGame']);