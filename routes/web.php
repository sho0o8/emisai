<?php
Route::get('/', 'homeController@home')->name('home');
Route::get('/about', 'homeController@about')->name('about');
Route::get('/point', 'homeController@point')->name('point');
Route::get('/seat', 'homeController@seat')->name('seat');
Route::get('/menu', 'homeController@menu')->name('menu');
Route::get('/access', 'homeController@access')->name('access');