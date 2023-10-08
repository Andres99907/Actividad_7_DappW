<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// /public
Route::get('/public', function () {
    return view('welcome');
});

// /courses
Route::get('/courses', function () {
    return 'Welcome to the courses';
});

// /Actividad_7/{variable}
Route::get('/courses/{course}', function ($course) {
    return 'Welcome to the courses: ' . $course;
});

// /Actividad_7/{variable}/{category}
Route::get('/courses/{course}/{category}', function ($course, $category) {
    return 'Welcome to the courses: ' . $course . ', of the category: ' . $category;
});