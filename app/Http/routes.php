<?php

Route::get('/', array('uses' => 'PageController@getHome', 'as' => 'home'));

Route::get('about', array('uses' => 'PageController@getAbout', 'as' => 'about'));

Route::get('instructors', array('uses' => 'PageController@getInstructors', 'as' => 'instructors'));

Route::get('schedule', array('uses' => 'PageController@getSchedule', 'as' => 'schedule'));

Route::get('contact', array('uses' => 'PageController@getContact', 'as' => 'contact'));
