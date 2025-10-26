<?php

namespace App\Services;

use App\Models\Product;

class ProductRecommendationService
{
    public function recommend(array $weather): array
    {
        $temp = $weather['main']['temp'] ?? null;
        $condition = $weather['weather'][0]['main'] ?? 'Clear';

        if ($temp === null) {
            return [];
        }

        if ($temp < 5) {
            return Product::where('type', 'cold')->get();
        } elseif (str_contains(strtolower($condition), 'rain')) {
            return Product::where('type', 'rain')->get();
        } else {
            return Product::where('type', 'sunny')->get();
        }
    }
}
