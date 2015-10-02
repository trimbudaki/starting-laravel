<?php

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::get('articles/{id}','ArticleController@show');
Route::post('articles','ArticleController@store');
