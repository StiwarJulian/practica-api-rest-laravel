<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index']);
//Route::apiResource('api/v1/posts', PostController::class);

Auth::routes();

Route::middleware('auth')->resource('posts', PostController::class)->only('index');

Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
