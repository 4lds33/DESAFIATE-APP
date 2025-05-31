<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Salario;
use App\Models\Categoria;
use App\Models\Vacante;

class CrearVacante extends Component
{
    use WithFileUploads;

    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    public $salarios;
    public $categorias;

    public function mount()
    {
        $this->salarios = Salario::all();
        $this->categorias = Categoria::all();
    }

    protected function rules()
    {
        return [
            'titulo' => 'required|string|max:255',
            'salario' => 'required|exists:salarios,id',
            'categoria' => 'required|exists:categorias,id',
            'empresa' => 'required|string|max:255',
            'ultimo_dia' => 'required|date',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ];
    }

    public function crearVacante()
    {
        $datos = $this->validate();

        if ($this->imagen) {
            $datos['imagen'] = $this->imagen->store('public/vacantes');
        }

        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'] ?? null,
            'user_id' => auth()->id(),
        ]);

        session()->flash('mensaje', 'Vacante creada correctamente');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.crear-vacante', [
            'salarios' => $this->salarios,
            'categorias' => $this->categorias,
        ]);
    }
}
