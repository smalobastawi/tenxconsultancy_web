<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Route
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Key Areas Routes
Route::get('/research', function () {
    return view('pages.research');
})->name('research');

Route::get('/innovation', function () {
    return view('pages.innovation');
})->name('innovation');

Route::get('/consultancy', function () {
    return view('pages.consultancy');
})->name('consultancy');

// Services Routes
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/research', function () {
    return view('pages.research-services');
})->name('research-services');

Route::get('/services/innovation', function () {
    return view('pages.innovation-services');
})->name('innovation-services');

Route::get('/services/consultancy', function () {
    return view('pages.consultancy-services');
})->name('consultancy-services');

Route::get('/services/training', function () {
    return view('pages.training-services');
})->name('training-services');

// Resources Route
Route::get('/resources', function () {
    return view('pages.resources');
})->name('resources');

// Contact Route
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');