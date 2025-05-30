<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{

    public $titulo;
    public $salario;

    protected $rules = [
        'titulo' => 'required!string',
        'salario' => 'required'
    ];

    public function render()

    {
        //Consultar Base Datos
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salario' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
