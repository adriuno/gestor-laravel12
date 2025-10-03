<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entradas = Entrada::all();

        return view('entrada.index', compact('entradas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrada.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nueva = new Entrada();
        $nueva->titulo = $request->titulo;
        $nueva->tag = $request->tag;
        $nueva->contenido = $request->contenido;
        $nueva->imagen = "";
        $nueva->user_id = 1;
        $nueva->save();

        // return redirect()->route('entrada.index');
        return redirect()->route('entrada.create')->with('mensaje', 'Entrada creada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrada $entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrada $entrada)
    {
        //
    }
}
