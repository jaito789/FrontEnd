<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UsersIndex extends Component

{
    

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();
        return view('livewire.users-index', compact('empleados'));
    }

    public function guardar(){
        dd('hola');
    }
}
