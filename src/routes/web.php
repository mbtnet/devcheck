<?php

use Illuminate\Support\Facades\Route;
use Mbtnet\Devcheck\Controllers\DevcheckController;

Route::get('devcheck', DevcheckController::class);
