<?php

use Illuminate\Support\Facades\Route;
use Caneco\GithubProfileViewCounter\Http\Controllers\GithubProfileViewCounterController;

Route::get('github-profile-view-counter.svg', GithubProfileViewCounterController::class);
