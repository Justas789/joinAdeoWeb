<?php

namespace App\Services;

use App\Models\Product;

class RecommendationService
{
    public function recommend(array $weather)
    {
        $temp = $weather['main']['temp'] ?? 20;

        if ($temp < 5) {
            return Product::where('type', 'cold')->get();
        } elseif ($temp < 20) {
            return Product::where('type', 'rain')->get();
        } else {
            return Product::where('type', 'sun')->get();
        }
    }
}
