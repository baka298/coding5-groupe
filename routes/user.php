<?php

Route::resource('/user', 'UserController')->middleware('auth');