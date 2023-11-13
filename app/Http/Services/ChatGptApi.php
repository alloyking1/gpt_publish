<?php

namespace App\Http\Services;

class ChatGptApi implements AiServiceInterface
{
    public function sendPrompt($prompt)
    {
        return $prompt;
    }
}
