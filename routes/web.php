<?php

use Illuminate\Support\Facades\Route;

// Rute halaman Home
Route::get('/', function () {
    return view('home');
});

// Rute halaman About Me
Route::get('/about', function () {
    return view('about');
});

// Rute halaman Skills
Route::get('/skills', function () {
    return view('skills');
});

// Rute halaman Projects
Route::get('/projects', function () {
    return view('projects');
});

// Rute halaman Contact
Route::get('/contact', function () {
    return view('contact');
});