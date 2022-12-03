<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    public function producto(){

        $response = Http::get('http://127.0.0.1:8000/api/products');
        $productos = $response->json();
        return view('productos', compact('productos'));
    }
}
