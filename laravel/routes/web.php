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

Route::get('/', function () {
    return view('welcome');
});

// FEATURES
Route::get('/todo', function () {
    return view('features.todo');
});
Route::get('/calendar', function () {
    return view('features.calendar');
});
Route::get('/reminders', function () {
    return view('features.reminders');
});
Route::get('/planning', function () {
    return view('features.planning');
});


// COMPANY
Route::get('/history', function () {
    return view('company.history');
});
Route::get('/ourteam', function () {
    return view('company.ourteam');
});
Route::get('/blog', function () {
    return view('company.blog');
});

// CARREERS
Route::get('/carreers', function () {
    return view('carreers');
});

// ABOUT
Route::get('/about', function () {
    return view('about');
});