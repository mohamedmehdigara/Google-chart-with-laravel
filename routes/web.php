<?php

use App\Http\Controllers\GooglePieController;

Route::get('laravel-google-pie-chart', [GooglePieController::class, 'index']);