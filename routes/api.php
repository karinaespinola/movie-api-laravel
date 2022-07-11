<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TvController;
use App\Http\Controllers\Api\MoviesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies',[MoviesController::class, 'getSuggestions']);
Route::get('/tv',[TvController::class, 'getSuggestions']);
Route::get('/movies/trending',[MoviesController::class, 'getTrendingMovies']);
Route::get('/tv/trending',[TvController::class, 'getTrendingShows']);