<?php
//COMMUNITY
Route::get('community/popular-topics/{page}', 'Popular_topicsController@getPopularTopics');
Route::get('community/categories/{id_category}/{category}/{id_topic}/{topic}', 'DiscussionController@getTopic');
Route::get('community/categories/{id_category}/{category}', 'TopicsController@getTopics');
Route::get('community/categories', 'CategoriesController@getCategories');
Route::get('community/home', 'HomeController@out');
Route::get('community/recent', 'RecentController@out');

//MAIN
