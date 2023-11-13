<?php

namespace App\Http\Services;

use App\Http\Services\AiServiceInterface;

class GoogleAiApi implements AiServiceInterface
{
    public function sendPrompt($prompt)
    {
        return $prompt;
    }
}
