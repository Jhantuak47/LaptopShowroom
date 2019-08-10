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

Route::GET('/demo',function(){
	$root = get_class(Auth::getFacadeRoot());
	var_dump($root);
});
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
	Route::get('/dashboard',['as'=>'adminDashboard', 'uses'=>'DashboardController@admin'] );
	Route::resource('products', 'Products\ProductController');
	Route::resource('brands', 'Brands\BrandController');
	Route::resource('categories', 'Categories\CategoryController');
});

Route::group(['prefix'=>'search','middleware'=>'auth'], function(){
	Route::get('/category/{name}',['as'=>'search.category', 'uses'=>'SearchController@searchCategory'] );
	Route::post('/category',['as'=>'search.products', 'uses'=>'SearchController@search'] );
	
});	
Route::get('/list_drugs', 'DashboardController@list_drugs')->name('list_drugs');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
