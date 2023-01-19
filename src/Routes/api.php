<?php

Route::name('jAuth.')
	->namespace('Juarismi\Auth\Http\Controllers')
	->middleware(['api', 'cors'])
	->prefix('auth')
	->group(function ($router) {
   
   Route::get('/', function(){
      return 'juarismi/auth';
   });
   
   Route::post('login', 'JwtAuthController@login')->name('login');
   Route::post('logout', 'JwtAuthController@logout')->name('logout');
   Route::post('refresh', 'JwtAuthController@refresh')->name('refresh');
   Route::post('me', 'JwtAuthController@me')->name('me');
});