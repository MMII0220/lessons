<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('posts/delete', [PostController::class, 'delete']);

Route::get('/posts/firstOrCreate', [PostController::class, 'firstOrCreate']);
Route::get('/posts/updateOrCreate', [PostController::class, 'updateOrCreate']);

Route::get('/about', [AboutController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/main', [MainController::class, 'index']);
