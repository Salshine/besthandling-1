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
    return view('index', [
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'active' => 'Contact'
    ]);
});

Route::get('/services', function () {
    return view('services', [
        'title' => 'Services',
        'active' => 'Services'
    ]);
});
