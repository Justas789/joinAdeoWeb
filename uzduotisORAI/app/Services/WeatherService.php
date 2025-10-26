<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getWeather(string $city): ?array
    {
        $city = strtolower($city);
        $url = "https://api.meteo.lt/v1/places/{$city}/forecasts/long-term";

        $response = Http::withoutVerifying()->get($url);

        if ($response->failed()) {
            return null;
        }

        $data = $response->json();

        if (!isset($data['forecastTimestamps']) || count($data['forecastTimestamps']) === 0) {
            return null;
        }

        $current = $data['forecastTimestamps'][0];

        return [
            'city' => $city,
            'temperature' => $current['airTemperature'],
            'condition' => $current['conditionCode'], 
        ];
    }
}
