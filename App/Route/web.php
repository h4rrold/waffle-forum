<?php
//COMMUNITY
Route::get('community/recent-topics/{page}', 'Recent_topicsController@getRecentTopics');
Route::get('community/popular-topics/{page}', 'Popular_topicsController@getPopularTopics');
Route::get('community/categories/{id_category}/{category}/{id_topic}/{topic}/{amount_of_posts}/sending', 'DiscussionController@SendPost');
Route::get('community/categories/{id_category}/{category}/{id_topic}/{topic}/{id_page}', 'DiscussionController@getTopicAndPosts');
Route::get('community/categories/{id_category}/{category}', 'TopicsController@getTopics');
Route::get('community/categories', 'CategoriesController@getCategories');
Route::get('community/home', 'HomeController@getHome');
Route::get('community/recent', 'RecentTopicsController@out');
Route::post('community/categories/increaseRatingByUserVote', 'DiscussionController@increaseRatingByUserVote');
Route::post('community/categories/getCurrentlyVotedPosts', 'DiscussionController@getVotedPosts');


//api calls
Route::post('emailExists', 'RegController@emailExists');
//MAIN
Route::get('registration', 'RegController@out');
Route::post('reg', 'RegController@registration');
Route::get('login', 'LogController@out');
Route::post('log', 'LogController@login');

