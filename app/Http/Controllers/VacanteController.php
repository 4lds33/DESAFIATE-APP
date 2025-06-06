<?php

namespace App\Http\Controllers;
use App\Models\Salario;
use App\Models\Categoria;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('vacantes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salarios = Salario::all(); // o el modelo que uses para salarios
        $categorias = Categoria::all();
        return view('livewire.crear-vacante', compact('salarios'));
        return view('livewire.crear-vacante', compact('salarios', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
