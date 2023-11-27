<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function(Request $request){
    return view('tejendra::index');
});