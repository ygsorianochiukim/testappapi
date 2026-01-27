<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test/{name}', function ($name) {
    return response()->json([
        'success' => true,
        'message' => "Hello, $name! Your API is working."
    ]);
});