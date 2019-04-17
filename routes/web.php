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

Route::get('/', function () {
    return view('web.index');
});

Route::get('/about-us' , function (){
	return view('web.about-us');
});

Route::get('clinical' , function (){
	return view('web.clinical');
});

Route::get('counterfeit' , function (){
	return view('web.counterfeit');
} );

Route::get('spc-language', function (){
	return view('web.spc-language');
});

Route::get('team', function (){
	return view('web.team');
});

Route::get('faq', function (){
	return view('web.faq');
});

Route::get('blog', function (){
	return view('web.blog');
});

Route::get('career', function (){
	return view('web.carrer');
});



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
});



