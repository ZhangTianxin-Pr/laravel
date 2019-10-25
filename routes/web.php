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

Route::get('home', 'HomeController@index')->name('home');
//Route::any('home','HomeController@total');

Route::get('factor', 'homepageController\factorController@index');

Route::get('blade', 'homepageController\ViewTestController@index');

Route::any('About', 'AboutController@index');
Route::any('Documentation', 'DocumentationController@index');
Route::any('Download', 'DownloadController@index');
Route::any('Option', 'OptionController@index');
Route::any('/get_option', 'OptionController@index')->name('get_option');
Route::any('Statistics', 'StatisticsController@index');
Route::any('admin', function () {
        return view('admin_template');
    });

Route::any('/tissue', 'TotalTableController@index')->name ('subTissue');
Route::any('/cellLine', 'TotalTableController@index')->name ('subCellLine');
Route::any('/factor', 'TotalTableController@index')->name ('subFactor');
Route::any('/input', 'TotalTableController@index')->name ('InputSearch');
Route::any('test','TestController@index')->name('test');
Route::any('/','TotalTableController@index');
//Route::any('/','TotalTableController@index');


