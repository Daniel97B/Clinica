<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MyperfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Auth::id();
        $paciente = DB::select('select * from users where id=' . $id);
        //return view('modulos.Mis-Datos', compact($paciente));
        return view('modulos.Mis-Datos', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente[0] = User::findOrFail($id);
        $paciente[0]->name = $request->input('name');
        $paciente[0]->email = $request->input('email');
        $Contraseña = $request->input('password');

        if (strlen($Contraseña) >= 9) {
            $ContraseñaDB = Hash::make($Contraseña);
            $paciente[0]->password = $ContraseñaDB;
        } elseif (strlen($Contraseña) <= 0) {
            $ContraseñaDB = Hash::make($Contraseña);
            $paciente[0]->password = $ContraseñaDB;
        } else {
            return redirect('Mis-Datos/{id}')->with('actualizadoD', 'NO');

        };
        $paciente[0]->documento = $request->input('documento');
        $paciente[0]->telefono = $request->input('telefono');
        $paciente[0]->save();
        return redirect('Mis-Datos/{id}')->with('actualizadoD', 'Si');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
