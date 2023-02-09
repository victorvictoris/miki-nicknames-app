<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReportController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/select', 'select')->name('select.nickname');
});

Route::controller(QuizController::class)->group(function () {
    Route::get('/quiz', 'index')->name('quiz');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('/report', 'index')->name('report');
});
