<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teams', [TeamController::class, 'index']);
Route::post('/team/create', [TeamController::class, 'create']);
Route::get('/team/{id}', [TeamController::class, 'getOne']);
Route::get('/team/delete/{id}', [TeamController::class, 'delete']);
Route::post('/team/update', [TeamController::class, 'update']);
Route::get('/team/players', [TeamController::class, 'getPlayers']);


Route::get('/players', [PlayerController::class, 'index']);
Route::post('/player/create', [PlayerController::class, 'create']);
Route::get('/player/{id}', [PlayerController::class, 'getOne']);
Route::get('/player/delete/{id}', [PlayerController::class, 'delete']);
Route::post('/player/update', [PlayerController::class, 'update']);
Route::get('/player/team', [PlayerController::class, 'getPlayerTeam']);