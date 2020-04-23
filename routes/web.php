<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/**
 * Blog Routes
 */

Route::namespace('Blog')->group(function () {
    
    Route::get('/', 'MainPageController@index')->name('main-page');


    Route::get('/entry/{slug}', 'EntriesController@showEntry')
        ->name('entry');

    Route::get('/entries/list', 'EntriesController@showList')
        ->name('entries-list');

    Route::get('/entries/category/{cat_slug}', 'EntriesController@showListByCategory')
        ->name('entries-list-by-category');

    Route::get('/entries/chapter/{chap_slug}', 'EntriesController@showListByChapter')
        ->name('entries-list-by-chapter');
        
    Route::get('/entries/tag/{tag_slug}', 'EntriesController@showListByTag')
        ->name('entries-list-by-tag');
});


/**
 * User Accounts Routes
 */

Route::namespace('Accounts')->group(function () {
    
    Route::get('/home', 'HomeController@index')->name('user_home');
});
