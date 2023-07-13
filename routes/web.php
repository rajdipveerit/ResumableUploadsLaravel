<?php

use App\Http\Controllers\LargeUploader;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chunk-upload', function () {
    return view('chunk_upload');
});

Route::match (
    array(
        'get',
        'post',
    ),

    'upload-chunks',
    [LargeUploader::class, 'uploadLargeFiles']

)
    ->name(
        'files.upload.large'
    );
