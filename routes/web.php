<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',  [PostsController::class, 'index']);
Route::post('/posts',  [PostsController::class, 'create']);

Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

Route::get('/posts/update/{post}',  [PostsController::class, 'updatePage']);

Route::post('/posts/update/{post}',  [PostsController::class, 'update']);

