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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

//Route::resource('posts', 'PostController');

//baru  https://pastebin.com/9dsDk0Nf
Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{post}', 'PostController@update')->name('posts.update');
Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');