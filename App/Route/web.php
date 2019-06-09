<?php
Route::get('popular-topics/{page}', 'Popular_topicsController@getPopularTopics');
Route::get('categories', 'CategoriesController@getCategories');
