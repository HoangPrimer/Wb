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



Route::get('/drproduct', function (){
        return view('drproduct');
});


//them danhmuc
Route::group(['prefix'=>'profile'], function()
{
        Route::group(['prefix'=>'post'], function(){
           
                Route::get('create', [
                         'as'=>'createpost',
                         'uses'=>'ProfileController@createpost'
                ]);

                Route::post('post',[
                        'as'=>'addpost',
                        'uses'=>'ProfileController@postpost'
                ]);

                Route::get('list', [
                        'as'=>'listpost',
                        'uses'=>'ProfileController@viewlistpost'
               ]);

               Route::get('delete/{id}',[
                'as'=>'deletepost',
                'uses'=>'ProfileController@deletepost'
                ]);

                Route::get('edit/{id}', [
                        'as'=>'editpost',
                        'uses'=>'ProfileController@vieweditpost'
                ]);

               
        });

        
        Route::get('info',[
                'as'=>'profile',
                'uses'=>'ProfileController@create'
        ]);
        
        Route::post('profile/update/{id}',[
                'as'=>'updateprofile',
                'uses'=>'ProfileController@update'
        ]);
});

Route::group(['prefix'=>'admin'], function()
{
        Route::group(['prefix'=>'directory'], function()
        {
            Route::get('list', [
                'as'=>'directory',
                'uses'=>'AdminController@viewdirectory'
        ]);

            Route::get('add', [
                'as'=>'adddirectory',
                'uses'=>'AdminController@viewadddirectory'
        ]);

            Route::get('edit/{id}', [
                'as'=>'editdirectory',
                'uses'=>'AdminController@vieweditdirectory'
        ]);
           Route::get('delete/{id}',[
                'as'=>'deldirectory',
                'uses'=>'AdminController@deldirectory'
        ]);
        
            Route::post('addirectory', [
                'as'=>'postdirectory',
                'uses'=>'AdminController@adddirectory'
        ]);
           Route::post('update/{id}', [
                'as'=>'updatedirectory',
                'uses'=>'AdminController@updatedirectory'
        ]);
        });

        Route::group(['prefix'=>'post'], function(){
            Route::get('list', [
                'as'=>'adpost',
                'uses'=>'AdminController@viewPost'
        ]);

                
           Route::get('delete/{id}',[
                'as'=>'addeletepost',
                'uses'=>'AdminController@deletepost'
                ]);

            Route::get('duyetbai/{id}', [
                'as'=>'duyetbai',
                'uses'=>'AdminController@duyetbai'
                ]);
        });

        Route::group(['prefix'=>'user'], function(){
                Route::get('list', [
                        'as'=>'listuser',
                        'uses'=>'AdminController@listuser'
                ]);
        });

});




  