<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikanController;

Route::get('/praktikan', [PraktikanController::class, 'index']);
