<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\AiServiceInterface;

class AiController extends Controller
{
    public function __invoke(AiServiceInterface $AiServiceInterface)
    {

        return $AiServiceInterface->sendPrompt('this is a prompt from google');
    }
}
