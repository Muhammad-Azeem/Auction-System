<?php

Route::get('homePage', 'userController@index');
Route::get('tellUsWhatYouAreSelling','userController@tellUsWhatYouAreSelling')->name('sell')->middleware('user');
Route::get('getcategory','userController@getCategory')->name('GetStarted')->middleware('user');
Route::post('getcategory','userController@getCategory')->name('GetStarted')->middleware('user');
Route::get('createYourListing','userController@createYourListing')->name('listing')->middleware('user');
Route::post('createYourListing','userController@createYourListing')->name('listing')->middleware('user');
Route::get('reviewYourListing','userController@review')->name('review')->middleware('user');
Route::post('dataStored','userController@reviewYourListing')->name('dataStored')->middleware('user');

Route::get('products','userController@products')->name('products');
Route::get('productDetail/{id}','userController@showProductDetail')->name('productDetail')->middleware('user');
Route::post('searchProduct','userController@search');
Route::get('productResult/{category}','userController@productResult')->name('productResult');
Route::post('bidPlaced','userController@bidPlaced')->name('bidPlaced');

// userPanel
Route::get('UserPanel','userController@UserPanel')->name('UserPanel');
Route::get('UserPanel/mybids','userController@mybids')->name('mybids');
Route::get('UserPanel/allSelling','userController@allSelling')->name('allSelling');
Route::get('UserPanel/sold','userController@sold')->name('sold');
Route::get('UserPanel/unsold','userController@unsold')->name('unsold');
Route::get('UserPanel/active','userController@active')->name('active');
// bidWon
Route::post('bidwon','userController@bidWon')->name('bidWon');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('userHome');

/*
*	Admin auth routes
*/
Route::get('admin/home', 'adminController@index');

// Authentication Routes...
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('logout', 'Admin\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm');
Route::post('admin.register', 'Admin\RegisterController@register')->name('admin.register');

// Password Reset Routes...
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin. password.request');



Route::get('adminPanel','adminController@adminPanel')->name('home')->middleware('admin');
Route::get('adminPanel/users','adminController@users')->name('users')->middleware('admin');
Route::get('userDelete/{id}','adminController@userDelete')->name('userDelete')->middleware('admin');
Route::get('editUser/{id}','adminController@editUser')->name('editUser')->middleware('admin');
Route::post('updateUser','adminController@updateUser')->name('updateUser')->middleware('admin');
Route::post('updateBid','adminController@updateBid')->name('updateBid')->middleware('admin');
Route::post('updateProduct','adminController@updateProduct')->name('updateProduct')->middleware('admin');
Route::get('adminPanel/bids','adminController@bids')->name('bids')->middleware('admin');
Route::get('bidDelete/{id}','adminController@bidDelete')->name('bidDelete')->middleware('admin');
Route::get('editBid/{id}','adminController@editBid')->name('editBid')->middleware('admin');
Route::get('editProduct/{id}','adminController@editProduct')->name('editProduct')->middleware('admin');
Route::get('adminPanel/products','adminController@products')->name('products')->middleware('admin');
Route::get('productDelete/{id}','adminController@productDelete')->name('productDelete')->middleware('admin');

