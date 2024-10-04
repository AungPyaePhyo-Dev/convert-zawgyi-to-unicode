<?php

use App\Http\Controllers\FontController;
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

Route::get('convert-zawgyi-to-unicode', [FontController::class, 'convertForm'])->name('convert.index');
Route::post('convert-zawgyi-to-unicode', [FontController::class, 'convert'])->name('convert');

Route::post('convert-series', [FontController::class, 'convertSeries'])->name('convert.series');
Route::post('convert-publisher', [FontController::class, 'convertPublisher'])->name('convert.publisher');
Route::post('convert-reader', [FontController::class, 'convertReader'])->name('convert.reader');
Route::post('convert-category', [FontController::class, 'convertCategory'])->name('convert.category');

Route::post('convert-mongo-series', [FontController::class, 'convertMongoSeries'])->name('convert.mongo.series');
Route::post('convert--mongo-publisher', [FontController::class, 'convertMongoPublisher'])->name('convert.mongo.publisher');
Route::post('convert-mongo-reader', [FontController::class, 'convertMongoReader'])->name('convert.mongo.reader');
Route::post('convert-mongo-category', [FontController::class, 'convertMongoCategory'])->name('convert.mongo.category');