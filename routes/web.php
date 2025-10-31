<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});

Route::get('/About', function () {
    return view('AboutMe.AboutMe');
});

Route::get('/Gallery', function () {
    return view('Gallery.Gallery');
});


