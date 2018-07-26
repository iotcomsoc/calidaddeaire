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

Route::get('/','AuthController@showLogin');

Route::post('/login','AuthController@postLogin');

Route::get('/inicio','InicioController@index');

Route::resource('usuario','UserController');

Route::get('/usuarios','UserController@listar');

Route::get('/mediciones/rpt_temperatura','MeasureController@rpt_temperatura');

/*Route::group(array('before'=>'auth'),function(){
	//Route::get('/',function(){
		//return View::make('hello');
	//});

	Route::get('logout','AuthController@logOut');
});*/

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/