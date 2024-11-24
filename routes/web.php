<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::controller(PostController::class)->prefix('post')->group(function () {
  Route::get('get', 'index');
});