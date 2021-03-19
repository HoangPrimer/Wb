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


Route::get('/',[
        'as'=>'home',
        'uses'=>'PageController@getIndex'
]);

Auth::routes();



//them danhmuc
Route::group(['prefix'=>'home'], function()
{
        Route::get('post',[
                'as'=>'createpost',
                'uses'=>'PostController@getpost'
        ]);

        Route::post('post/create',[
                'as'=>'addpost',
                'uses'=>'PostController@postpost'
        ]);
        
        Route::get('profile',[
                'as'=>'profile',
                'uses'=>'ProfileController@create'
        ]);
        
        Route::post('profile/update/{id}',[
                'as'=>'updateprofile',
                'uses'=>'ProfileController@update'
        ]);
});
Route::get('directory/create', 'DirectoryController@create')->name('dcreate');

Route::post('directory/store', 'DirectoryController@store')->name('dstore');

//admin

Route::get('homeadmin',[
        'as'=>'admin/home/index',
        'uses'=>'AdminController@index'
    ]);