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

Route::get('/', 'PagesController@index')->name('index');
Route::get('about', 'PagesController@about')->name('about');


Route::get('test/{firstname?}/{lastname?}/{age?}', 'TestController@index')
->where([
    'firstname' => '[a-zA-Z]+',
    'lastname' => '[a-zA-Z]+',
    'age' => '[0-9]+',
])->name('test');

Route::get('foo', [
    'as' => 'foo',
    'uses' => 'TestController@foo'
]);

Route::get('meet-to-inder', 'TestController@meetToInder')->name('meet.to.inder');
Route::get('meet-to-ravneet', 'TestController@meetToRavneet')->name('meet.to.ravneet');



