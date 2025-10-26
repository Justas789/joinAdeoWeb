<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductRecommendationController;

Route::get('/products/recommended/{city}', [ProductRecommendationController::class, 'show']);