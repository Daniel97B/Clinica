<?php

namespace App\Http\Controllers;

use App\Models\Consultorios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultoriosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    if (auth()->user()->rol !="Administrador" && auth()->user()->rol !="secretaria"){
    return redirect('Inicio');
    
     }
    $consultorios=Consultorios::all();
    return view('modulos.Consultorios')->with('consultorios',$consultorios);
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
     Consultorios::create(['consultorio'=> request('consultorio')]);
     return redirect ('Consultorios');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function show(Consultorios $consultorios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultorios $consultorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('consultorios')->where('id',request('id'))->update(['consultorio'=>request('consultorioE')]);
        return redirect('Consultorios');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultorios  $consultorios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('consultorios')->whereid($id)->delete();
        return redirect('Consultorios');
    }

}
