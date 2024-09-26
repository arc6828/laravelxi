<?php

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("movie",function(){
    $movies = Movie::limit(5)->orderBy('price','desc')->get();
    return $movies;
});
