<?php

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('app','PagesController@app');

//Route::get('articles','ArticleController@index');
//Route::get('articles/create','ArticleController@create');
//Route::get('articles/{id}','ArticleController@show');
//Route::post('articles','ArticleController@store');



Route::resource('articles','ArticleController');
/*this method is same as the route get or route post,
 but with resource you can trigger all the method Get Post ,Put Delete*/
