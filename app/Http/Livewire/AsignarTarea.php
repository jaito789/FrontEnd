<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AsignarTarea extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/tareas/empresas');
        $tareasemp = $response->json();
        $response = Http::get('http://127.0.0.1:8000/api/tareas');
        $tareas = $response->json();

    return view('livewire.asignar-tarea', compact('tareasemp','tareas'));
        //return view('livewire.asignar-tarea');
    }

    public function addEmpTarea(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->post('http://127.0.0.1:8000/api/tarea/empresa',$this->datos);
        if ($response->successful()){
            return redirect('/TareaAsignadaIndex');
        } else {
            dd($response->json());
        }
}
}
