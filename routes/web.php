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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'ListFormController@index')->name('index');

    Route::get('/form', 'RegFormController@show')->name('form.show');
    Route::post('/form', 'RegFormController@login')->name('form.perform');
});
