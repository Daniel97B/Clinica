<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DatosCreate()
    {
        return view('modulos.Mis-Datos');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $inicio= Inicio::find(1);
        return view('modulos.Inicio')->with('inicio',$inicio);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show(Inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inicio $inicio)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inicio $inicio)
    {
        //
    }

    
}
