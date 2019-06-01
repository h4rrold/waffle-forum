<?php
Route::get('contacts', 'ContactsController@out');
Route::get('office_devices', 'OfficeController@out');
Route::get('me/{id}', 'MeController@verifyUser')->middleware('Auth');
Route::get('log', 'LogController@out');
Route::get('reg', 'RegController@out');
Route::get('logout', 'MeController@logout');
Route::post('addFeedback', 'LandingController@addFeedback');
Route::post('registration', 'RegController@registration');
