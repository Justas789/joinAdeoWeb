<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\WeatherService;
use Illuminate\Http\JsonResponse;

class ProductRecommendationController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show(string $city): JsonResponse
    {
        $weather = $this->weatherService->getWeather($city);

        if (!$weather) {
            return response()->json([
                'city' => $city,
                'weather' => 'nenurodyta',
                'products' => []
            ]);
        }

        $condition = $weather['condition'];
        $temperature = $weather['temperature'];

        if (str_contains($condition, 'rain')) {
            $products = Product::where('type', 'umbrella')->get();
        } elseif (str_contains($condition, 'snow')) {
            $products = Product::where('type', 'winter')->get();
        } elseif (str_contains($condition, 'clear')) {
            $products = Product::where('type', 'summer')->get();
        } elseif ($temperature < 0) {
            $products = Product::where('type', 'winter')->get();
        } elseif ($temperature > 20) {
            $products = Product::where('type', 'summer')->get();
        } else {
            $products = Product::where('type', 'neutral')->get();
        }

        return response()->json([
            'city' => ucfirst($weather['city']),
            'weather' => $condition,
            'temperature' => $temperature,
            'products' => $products
        ]);
    }
}
