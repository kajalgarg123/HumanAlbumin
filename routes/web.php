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

Route::post('comments', 'CommentController@storeComments')->name('add.comment')->middleware('web');
Route::post('addresume' , 'ResumeController@store')->name('add.resume');

Route::view('/' , 'web.index');
Route::view('about-us' , 'web.about-us');
Route::view('clinical' , 'web.clinical');
Route::view('counterfeit' , 'web.counterfeit');
Route::view('spc-language' , 'web.spc-language');
Route::view('team' , 'web.team');
Route::view('faq' , 'web.faq');
Route::view('blog' , 'web.blog');
Route::view('career' , 'web.carrer');
Route::view('blank' , 'web.blank');

Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('dashboard');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
    Route::get('/comments-list', 'CommentController@index' );
    Route::get('team/create', 'Admin\TeamController@create' );
    Route::get('team/show/{id}', 'Admin\TeamController@show' );
    Route::post('team/add' , 'Admin\TeamController@store')->name('add.team');
    Route::put('team/update/{id}' , 'Admin\TeamController@update')->name('update.team');
    Route::get('team/index' , 'Admin\TeamController@index')->name('team.index');
    Route::get('team/edit/{id}' , 'Admin\TeamController@edit');
    Route::delete('team/delete/{id}' , 'Admin\TeamController@destroy');
    Route::get('spc/download', 'Admin\SpcPdfsController@getDownload');
    Route::resource('spc', 'Admin\SpcPdfsController');
});



