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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('contacts ', 'ContactFormController')->only([
//     'index', 'show'
// ]);


Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function() {
    Route::get('index','ContactFormController@index')->name('contact.index');
    Route::get('create','ContactFormController@create')->name('contact.create');
    // railsではnewアクション
    Route::post('store','ContactFormController@store')->name('contact.store');
    // railsではcreate

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
