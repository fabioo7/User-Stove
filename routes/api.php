<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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


Route::GET('users', [apiController::class, 'users']);
Route::GET('checkUsers/{id}',  [apiController::class, 'checkUsers']);
Route::POST('insertUsers', [apiController::class, 'insertUsers']);
Route::POST('updateUsers', [apiController::class, 'updateUsers']);
Route::DELETE('Users', [apiController::class, 'delUsers']);



