<?php

Route::middleware('auth')->group(function () {
  Route::resource('/event', 'EventController');
});
