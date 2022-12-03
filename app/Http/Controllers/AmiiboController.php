<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AmiiboController extends Controller
{
    public function amiibo(){
        $response = Http::get('https://amiiboapi.com/api/amiibo/');
        $amiibos = $response->json()['amiibo'];
        return view('amiibo', compact('amiibos'));
    }
}
