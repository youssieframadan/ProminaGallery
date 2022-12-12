<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ImagesController;
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

//Routes for Album
Route::delete('/delete_album', [AlbumsController::class,'Delete']);
Route::get('/album_data_table', [AlbumsController::class,'getAlbumsDataTable'])->name('album_data_table');
Route::get('/show_album/{album_id}', [AlbumsController::class,'Show']);
Route::post('/store_album', [AlbumsController::class,'Store']);
Route::put('/update_album', [AlbumsController::class,'Update']);

//Routes for Images
Route::get('/get_images/{album_id}', [ImagesController::class,'Show']);
Route::delete('/delete_image/{image_id}', [ImagesController::class,'Delete']);
Route::put('/update_image', [ImagesController::class,'Update']);
Route::post('/store_image', [ImagesController::class,'Store']);