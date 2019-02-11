<?php

Route::resource('/profil', 'ProfilController')->middleware('auth');