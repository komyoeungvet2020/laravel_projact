<?php

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

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});
Route::get('/action', function (){
    return view('pages.action');
})->name('action');
Route::get('/about', function (){
    return view('pages.about');
})->name('about');
Route::get('/join', function (){
    return view('pages.join');
})->name('join');

Route::get('/news', function (){
    return view('pages.news');
})->name('news');
Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');

Route::get('/customer','pageController@showCustomer');
Route::get('students','studentController@showStudent');

Route::resource('student','newController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addPosts', 'UserController@getPost');


Route::get('/showProfile', 'UserController@showProfile');
Route::patch('/updateProfile/{id}','UserController@updateProfile')->name('updateProfile');
Route::get('editProfile/{id}','UserController@editProfile')->name('editProfile');
Route::get('deleteProfile/{id}','UserController@deleteProfile')->name('deleteProfile');
Route::get('/showPost','UserController@showPost')->name('showPost');
Route::post('/addPost/{id}','UserController@addPost')->name('addPost');
Route::get('/showForm','UserController@showForm')->name('showForm');
Route::get('/deletePost/{id}','UserController@deletePost')->name('deletePost');
Route::patch('/updatePost/{id}','UserController@updatePost')->name('updatePost');
Route::get('/editPost/{id}','UserController@editPost')->name('editPost');


