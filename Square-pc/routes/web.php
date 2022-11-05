<?php

use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class,'index']);
Route::get('/info', [TaskController::class,'info']);
Route::get('/projects', [TaskController::class, 'project']);
Route::get('/configurator', [ConfigurationsController::class, 'index']);
