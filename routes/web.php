<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Detail_indexController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Detail_activityController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Detail_aboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Detail_contactController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Detail_mapController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Detail_newsController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/detail_index/{id}', [Detail_indexController::class, 'show']);
Route::get('/activity', [ActivityController::class, 'index']);
Route::get('/detail_activity/{id}', [Detail_activityController::class, 'show']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/detail_about/{id}', [Detail_aboutController::class, 'show']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/{name}', [Detail_contactController::class, 'show']);
Route::get('/map', [MapController::class, 'index']);
Route::get('/db', [MapController::class, 'db']);
Route::get('/detail_map/{name}', [Detail_mapController::class, 'show']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{name}', [Detail_newsController::class, 'show']);
