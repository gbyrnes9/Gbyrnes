<?php

Route::get('/', 'PagesController@reroute');

Route::get('Home', array('as' => 'Home', 'uses' => 'PagesController@index'));

Route::get('Services', array('as' => 'Services', 'uses' => 'PagesController@services'));

Route::get('Why', array('as' => 'Why', 'uses' => 'PagesController@why'));

Route::get('Admin', array('as' => 'Admin', 'uses' => 'PagesController@admin'));


/*Quote routes*/
Route::get('Quote', array('as' => 'Quote', 'uses' => 'QuoteController@index'));
Route::get('Quote/Send', array('as' => 'SendQuote', 'uses' => 'QuoteController@create'));
Route::post('Quote', array('as' => 'Quote', 'uses' => 'QuoteController@store'));
Route::get('Quote/{id}', array('as' => 'QuoteShow', 'uses' => 'QuoteController@show'));
Route::get('Quote/{id}/delete', 'QuoteController@destroy');

/*Contact routes*/
Route::get('Contact', array('as' => 'Contact', 'uses' => 'ContactController@index'));
Route::get('Contact/Send', array('as' => 'SendContact', 'uses' => 'ContactController@create'));
Route::post('Contact', array('as' => 'Contact', 'uses' => 'ContactController@store'));
Route::get('Contact/{id}', array('as' => 'ContactShow', 'uses' => 'ContactController@show'));
Route::get('Contact/{id}/delete', 'ContactController@destroy');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


