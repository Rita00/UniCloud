<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/', 'Controller@welcome');

Route::get('register', 'Controller@registerView');

Route::post('register', 'Controller@register');

Route::get('login', 'Controller@loginView')->name('login');

Route::post('login', 'Controller@login');

Route::get('logout', 'Controller@logout');

Route::get('check', 'Controller@verifyMail');

Route::get('resend', function (){
    return view("resend");
})->name('resend');

Route::post('resend', 'Controller@resendConfirmationMail');

Route::get('profile', function (){
    return view('profile');
})->middleware("auth");

//Routes para homepage
Route::view('home','home');
Route::view('categories','categories');
Route::view('materialsList','materialsList');

//Routes para upload
Route::post('upload', 'UploadController@store');
Route::get('upload', "Controller@uploadView");

//Route para cursos
Route::get('degrees', 'Controller@degreesView');

//Route para cadeiras
Route::get('disciplinas', 'Controller@coursesView');
