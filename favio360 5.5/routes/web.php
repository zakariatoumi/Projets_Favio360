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

Route::get('annuair','VideoController@index');
Route::get('internaut','VideoController@create');
Route::post('videos','VideoController@store');
Route::get('home/{id}/edit','HomeController@edit')->name('home');
Route::put('home/{id}','HomeController@update');
Route::delete('home/{id}','HomeController@destroy');
Route::put('home/{id}/publier','HomeController@valide');



Route::post('recherche','VideoController@show');
Route::get('detail/{id}','VideoController@voir');


Route::put('etoile/{id}','VideoController@etoile');
Route::get('recherche',function()
{
	return view('favio.recherche');
});




Route::get('notre_equipe',function()
{
	return view('favio.equipe');
});
Route::get('mention',function()
{
	return view('favio.mention');
});

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/','VideoController@topnew');

Route::get('video360',function()
{
	return view('favio.video360');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register',function()
{
	return redirect('home');
});

Route::get('password/reset',function()
{
	return redirect('home');
});