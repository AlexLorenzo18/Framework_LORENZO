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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@afficher')->name('current_users');

Route::get('/competence_user', 'UsersController@btn_comp')->name('competence_user');
Route::get('/competence_user/{id}', function ($id) {

    $id = DB::table('competence_user')->updateorinsert(['competence_id' => $id, 'user_id' => Auth::user()->id, 'level' => 1]);
    return redirect()->route('current_users');

    
});

Route::post('update', 'UsersController@update');
Route::post('delete', 'UsersController@delete');