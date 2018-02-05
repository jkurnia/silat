<?php

Route::get('/', array('uses' => 'PageController@getHome', 'as' => 'home'));
