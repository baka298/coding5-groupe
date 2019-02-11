<?php

Route::resource('/role', 'RoleController')->middleware('auth');