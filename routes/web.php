<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login-signup', function () {
    return view('login-signup');
});


Route::get('api/categories', function () {
    $filePath = '../storage/app/dummy/categories.json'; 

    if (!file_exists($filePath)) {
        return response()->json(['error' => 'File not found'], 404);
    }

    $json = file_get_contents($filePath);

    return response($json, 200)
        ->header('Content-Type', 'application/json');
});
