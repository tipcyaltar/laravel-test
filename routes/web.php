<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Define a route for the POST method
Route::post('/submit', function() {
    return 'Form submitted successfully!';
});

//Define a route for the PUT method
Route::put('/update/{id}', function ($id) {
    return "Update record with ID: $id";
});

//Define a route for the DELETE method
Route::delete('/delete/{id}', function ($id) {
    return "Deleted record with ID $id";
});

Route::get('/', function() {
    return view('Welcome');
});

Route::get('/qrcode', [QrCodeController::class, 'index']);
Route::get('/students/{student}', 'StudentController@show')->name('students.show');
Route::resource("/student", StudentController::class);

Route::get('/weather', [WeatherController::class, 'showWeatherForm']);
Route::post('/weather', [WeatherController::class, 'getWeather']);