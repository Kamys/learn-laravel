<?php

Route::get('/', 'PagesController@home');
Route::get('/myTask', 'PagesController@myTask');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');