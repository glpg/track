<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

// Authentication Routes...
// Route::get('login', 'Auth\AuthController@showLoginForm');
// Route::post('login', 'Auth\AuthController@login');
// Route::get('logout', 'Auth\AuthController@logout');

// // Registration Routes...
// Route::get('register', 'Auth\AuthController@showRegistrationForm');
// Route::post('register', 'Auth\AuthController@register');

// // Password Reset Routes...
// Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('/home', 'HomeController@index');

//products related routes
Route::get('/db/addnewprod','ProductController@showAddForm');
Route::post('/db/addnewprod', 'ProductController@doAddProduct');
Route::get('/db/viewprods','ProductController@showAllProducts');

Route::get('/db/product/edit/{id}', 'ProductController@editProd');
Route::post('/db/product/update/{id}', 'ProductController@updateProd');
Route::get('/db/product/delete/{id}', 'ProductController@deleteProd');

//stores related routes
Route::get('/db/addnewstore', function(){
	return view("db/stores/addnewstore");
});
Route::post('/db/addnewstore', 'StoreController@doAddStore');
Route::get('/db/viewstores','StoreController@showAllStores');
Route::get('/db/store/delete/{id}', 'StoreController@deleteStore');


//warehouse address related routes
//products related routes
Route::get('/db/addnewaddr', function(){
	return view("db/addresses/addnewaddr");
});


Route::post('/db/addnewaddr', 'AddressController@doAddAddress');
Route::get('/db/viewaddrs','AddressController@showAllAddresses');

Route::get('/db/address/edit/{id}', 'AddressController@edit');
Route::post('/db/address/update/{id}', 'AddressController@update');
Route::get('/db/address/delete/{id}', 'AddressController@delete');
Route::get('/db/address/view/{id}', 'AddressController@view');

//carriers related routes
Route::get('/db/addnewcarrier', function(){
	return view("db/carriers/addnewcarrier");
});
Route::post('/db/addnewcarrier', 'CarrierController@doAddCarrier');
Route::get('/db/viewcarriers','CarrierController@showAllCarriers');
Route::get('/db/carrier/delete/{id}', 'CarrierController@delete');


//orders related routes
Route::get('/db/order/view/{id}', 'OrderController@view');



