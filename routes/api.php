<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::apiResource('v1/posts', PostController::class)->names([
    'index'  => 'api.posts.index',
    'store'  => 'api.posts.store',
    'update' => 'api.posts.update',
    'show'   => 'api.posts.show',
]);
