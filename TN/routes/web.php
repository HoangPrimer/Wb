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



Route::get('/','PageController@getIndex' )->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//them danhmuc
Route::get('directory/create', 'DirectoryController@create')->name('dcreate');

Route::post('directory/store', 'DirectoryController@store')->name('dstore');

//product

Route::get('post/create', 'PostController@getpost')->name('pget');
Route::post('post/store', 'PostController@postpost')->name('ppost');
//profile

Route::get('profile','ProfileController@create')->name('profile');

//
Route::get('upfile',function(){
        return view('auth\uploadFile');
});
Route::post('postfile','PostController@postFile')->name('uploadfile');
