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

Route::get('/', 'Controller@home');

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

//Route para Termos e Condicoes
Route::get('terms','Controller@termsView');
//Routes para homepage
Route::get('categories','Controller@categoriesView');
Route::get('materialsList','Controller@materialsListView');

//Routes para upload
Route::post('upload', 'UploadController@handler');
Route::get('upload', "Controller@uploadView");

//Route para cursos
Route::get('degrees', 'Controller@degreesView');

//Route para cadeiras
Route::get('disciplinas', 'Controller@coursesView');

