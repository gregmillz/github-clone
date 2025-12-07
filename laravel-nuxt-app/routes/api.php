<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RepositoryController;

Route::get('/repository', [RepositoryController::class, 'index']);
