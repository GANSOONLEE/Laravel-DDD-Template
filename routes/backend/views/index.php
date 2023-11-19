<?php

use Route;

Route::get('/', function(){
    return view('backend.index');
})->name('index');