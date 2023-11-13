<?php

namespace App\Http\Services;

interface AiServiceInterface
{
    public function sendPrompt($prompt);
}
