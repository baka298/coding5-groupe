<?php

Route::resource('/product', 'ProductController')->middleware('auth');