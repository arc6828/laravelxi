<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teacher',function(){
    return view('teacher');
})->name('teacher');

Route::get('/student',function(){
    return view('student');
})->name('student');