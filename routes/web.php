<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload'); 

Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post'); 
