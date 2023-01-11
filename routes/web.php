<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GalleryController;

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
    return view("layout");
});

Route::get('/get-all-photos', [GalleryController::class, 'getAllPhotos']);
Route::get('/view-photo/{id}', [GalleryController::class, 'getPhotoById']);
Route::get('/vote-photo/{id}', [GalleryController::class, 'votePhoto']);



Route::get('/getAll', [ExportController::class, 'getAll']);
Route::get('/export/{report}', [ExportController::class, 'export']);