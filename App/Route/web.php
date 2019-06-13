<?php
//COMMUNITY
Route::get('community/recent-topics/{page}', 'Recent_topicsController@getRecentTopics');
Route::get('community/popular-topics/{page}', 'Popular_topicsController@getPopularTopics');
Route::get('community/categories/{id_category}/{category}/{id_topic}/{topic}/{amount_of_posts}/sending', 'DiscussionController@SendPost');
Route::get('community/categories/{id_category}/{category}/{id_topic}/{topic}/{id_page}', 'DiscussionController@getTopicAndPosts');
Route::get('community/categories/{id_category}/{category}', 'TopicsController@getTopics');
Route::post('community/categories/{id_category}/{category}/create-topic', 'CreateTopicController@createTopic');
Route::get('community/categories', 'CategoriesController@getCategories');
Route::get('community/home', 'HomeController@getHome');
Route::get('community/recent', 'RecentTopicsController@out');
Route::get('community/seek/{seek_string}', 'Seek_topicsController@getSeekResult');
Route::post('community/categories/increaseRatingByUserVote', 'DiscussionController@increaseRatingByUserVote');
Route::post('community/categories/getCurrentlyVotedPosts', 'DiscussionController@getVotedPosts');
Route::post('profile', 'UserController@out');


//api calls
Route::post('emailExists', 'RegController@emailExists');
Route::post('nickExists', 'RegController@nickExists');
//MAIN
Route::get('registration', 'RegController@out');
Route::post('reg', 'RegController@registration');
Route::get('login', 'LogController@out');
Route::post('log', 'LogController@login');

