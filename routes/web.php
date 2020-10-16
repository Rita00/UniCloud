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

Route::get('/', 'Controller@welcome');

Route::get('/register', function (){
    if (auth()->check()) return redirect('/');
    return view("register");
});

Route::post('/register', 'Controller@register');

Route::get('/login', function (){
    if (auth()->check()) return redirect('/');
    return view("login");
});

Route::post('/login', 'Controller@login');

Route::get('logout', 'Controller@logout');

Route::post('mail', 'Controller@mail');
