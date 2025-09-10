<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TranslationService
{
    public function translate(string $text, string $source = 'en', string $target = 'zh'): string
    {
        if (trim($text) === '') return $text;

        try {
            $response = Http::timeout(10)->get('https://api.mymemory.translated.net/get', [
                'q' => $text,
                'langpair' => "$source|$target"
            ]);

            if ($response->successful() && $response->json('responseStatus') === 200) {
                return $response->json('responseData.translatedText');
            }
        } catch (\Exception $e) {
            Log::warning('Translation failed: ' . $e->getMessage());
        }

        return $text; // fallback to English
    }
}
