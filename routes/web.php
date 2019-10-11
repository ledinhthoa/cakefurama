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
Route::get('index',[
    'as'=>'home',
    'uses'=>'pageController@getIndex'
]);
route::get('contact',[
    'as'=>'contact',
    'uses'=>'pageController@getContact'
]);
route::get('about',[
    'as'=>'about',
    'uses'=>'pageController@getAbout'
]);
route::get('detailsservice/{id}',[
    'as'=>'details_service',
    'uses'=>'pageController@getdetails'
]);
Route::get('dat-phong/{id}',[
    'as'=>'adatphong',
    'uses'=>'PageController@getCheckout'
]);

Route::post('dat-phong',[
    'as'=>'datphong',
    'uses'=>'PageController@postCheckout'
]);
Route::get('login',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::post('login',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);
Route::get('register',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);
Route::post('register',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getsearch'
]);
Route::group(['prefix' => 'manage'], function () {
    Route::get('/','ManageController@index')->name('manage.index');
    Route::get('/{id}/delete','ManageController@destroy')->name('manage.destroy');
    Route::get('/{id}/edit','ManageController@edit')->name('manage.edit');
    Route::post('/{id}/edit','ManageController@update')->name('manage.update');

});
Route::group(['prefix' => 'manage1'], function () {
    Route::get('/','ManageController@indexservice')->name('manage.indexservice');
    Route::get('/{id}/delete','ManageController@destroymanage')->name('manage.destroymanage');
    Route::get('/{id}/edit','ManageController@editmanage')->name('manage.editmanage');
    Route::post('/{id}/edit','ManageController@updatemanage')->name('manage.updatemanage');
    Route::get('/create','ManageController@create')->name('manage.create');
    Route::post('/create','ManageController@store')->name('manage.store');

});
Route::get('auth/facebook', 'FacebookAuthController@redirectToProvider')->name('facebook.login') ;
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');
