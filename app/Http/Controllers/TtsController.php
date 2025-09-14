<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TtsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function speak(Request $request)
    {
        $text = $request->input('text');

        // VoiceRSS API
        $apiKey = 'f09dfcf78b144167a43c06349f83d88f'; // https://www.voicerss.org/
        $url = "https://api.voicerss.org/?key={$apiKey}&hl=pt-br&src=" . urlencode($text);

        return view('index', ['audioUrl' => $url, 'text' => $text]);
    }
}
