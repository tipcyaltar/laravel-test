<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/students', [StudentAPIController::class, 'indexAPI']);
Route::post('/students', [StudentAPIController::class, 'store']);
Route::get('/students/{id}', [StudentAPIController::class, 'show']);
Route::put('/students/{id}', [StudentAPIController::class, 'update']);
Route::delete('/students/{id}', [StudentAPIController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/weather', [WeatherController::class, 'index'])->name('weather');

Route::get('/weather', [WeatherController::class, 'showWeatherForm']);
Route::post('/weather', [WeatherController::class, 'getWeather']);