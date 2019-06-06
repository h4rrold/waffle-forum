<?php
//api calls

//get by id
Route::get("getUser", "AdminPanel@getUser"); //done
Route::get("getGroup", "AdminPanel@getGroup"); //done
Route::get("getDirectory", "AdminPanel@getDirectory"); //done


//get all 
Route::get("getUsers", "AdminPanel@getUsers"); //done
Route::get("getGroups", "AdminPanel@getGroups"); //done
Route::get("getDirectories", "AdminPanel@getDirectories"); //done


//save changes
Route::post("saveForumsettings", "AdminPanel@saveForumSettings"); //todo
Route::post("saveUsers", "AdminPanel@saveUsers"); //done
Route::post("saveGroups", "AdminPanel@saveGroups"); //done + add new
Route::post("saveDirectories", "AdminPanel@saveDirectories");//done

//pages done
Route::get("login", "Login@draw");
Route::get("logout", "Login@logout");
Route::post("auth", "Login@auth");
Route::get("panel", "AdminPanel@draw");
Route::get("settings1", "AdminPanel@draw");
Route::get("settings2", "AdminPanel@draw");
Route::get("settings3", "AdminPanel@draw");
Route::get("settings4", "AdminPanel@draw");


