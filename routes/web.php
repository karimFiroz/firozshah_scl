<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/', function () {
    return view('welcome');
});
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/tution_fee','TutionFeeController@tution_fee')->name('tution_fee');

Route::get('/create', 'TutionFeeController@create')->name('create');
Route::post('/store', 'TutionFeeController@store')->name('store');

Route::get('/edit/{id}', 'TutionFeeController@edit')->name('edit');
Route::post('/update/{id}', 'TutionFeeController@update')->name('update');
Route::post('/delete/{id}', 'TutionFeeController@delete')->name('delete');

 

Route::get('/welcome', 'PagesController@welcome')->name('welcome');
Route::get('/', 'PagesController@index')->name('index');
Route::get('/content', 'PagesController@content')->name('content');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');



//admin section
Route::get('/xyz','AdminController@index')->name('xyz');
Route::get('/login','AdminController@login')->name('login');
Route::get('/register','AdminController@register')->name('register');