<?php

Route::get('/', function () {
    return View::make('login');
});

Route::get('form',function(){
    return View::make('form');
});

Route::get('table',function(){
    return View::make('table');
});

Route::post('form_submit','EntriesController@store');

// upload file
Route::get('hello',function(){
    return View::make('hello');
});

Route::post('/upload', function () {
    // return Input::get('name');
    $file = Input::file('file');
    if($file) {
        $destinationPath = public_path() . '/uploads/';
        $filename = $file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);
        
        if ($upload_success) {
            // resizing an uploaded file
            Image::make($destinationPath . $filename)->resize(100, 100)->save($destinationPath . "100x100_" . $filename);
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }
});
// delete image
Route::post('delete-image', function () {
    $destinationPath = public_path() . '/uploads/';
    File::delete($destinationPath . Input::get('file'));
    File::delete($destinationPath . "100x100_" . Input::get('file'));
     return Response::json('success', 200);
});








