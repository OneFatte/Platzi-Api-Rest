<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PostController;

Route::apiResource('v1/posts', PostController::class)->only('show');
