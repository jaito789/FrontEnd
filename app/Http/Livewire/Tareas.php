<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Tareas extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();
        $response = Http::get('http://127.0.0.1:8000/api/tareas');
        $tareas = $response->json();
        return view('livewire.tareas', compact('empleados'),compact('tareas'));
    }

}
