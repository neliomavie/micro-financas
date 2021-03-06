<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome_2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clientes', 'ClienteController')->middleware('autenticacao');

Route::resource('/emprestimos', 'EmprestimoController')->middleware('autenticacao');

Route::resource('/usuarios', 'UsuarioController')->middleware('autenticacao');

Route::resource('/bens', 'BemController')->middleware('autenticacao');


// Ajax
Route::get('/ajax/livesearch','DemoController@liveSearch'); 

Route::any( '/bens/search', 'SearchController@bensSearch');



