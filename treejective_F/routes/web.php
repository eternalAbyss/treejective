<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/profile/edit', )->name('profile.edit');

Route::get('/profile/edit', [
    'uses'=>'PostController@edit',
    'as'=>'profile.edit']);

Route::post('/profile/update', [
    'uses'=>'PostController@update',
    'as'=>'profile.update']);

Route::get('/profile/view', [
    'uses'=>'Postcontroller@index',
    'as'=>'profile.view']);

Route::post('create',function(Request $request){
    return redirect()->route('profile.view');
});

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
