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

Route::get('/', 'Controller@home')->name('home');

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

Route::get('aboutUs', 'Controller@aboutUsView')->name('aboutUs');

//Route para Termos e Condicoes
Route::get('terms','Controller@termsView');
//Routes para upload
Route::post('upload', 'UploadController@handler')->middleware("auth");
Route::get('upload', "UploadController@view")->middleware("auth");

//Route para download
Route::get('download/{file}', 'DownloadController@download');

//Route para navegacao
Route::get('degrees', 'Controller@degreesView')->name("degrees");
Route::get('disciplinas', 'Controller@coursesView')->name("disciplinas");
Route::get('categories','Controller@categoriesView')->name("categories");
Route::get('materialsList','Controller@materialsListView')->name('materials');

