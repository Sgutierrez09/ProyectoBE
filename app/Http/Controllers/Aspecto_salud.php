<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use App\Grupo_cultura;
use App\Tipo_enfermedad_impedimento;
use App\Decision;

class Aspecto_salud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $disciplinas = Disciplina::all();
        $culturas = Grupo_cultura::all();
        $enfermedades = Tipo_enfermedad_impedimento::all();
        $decisions = Decision::all();

        return view('service_view.aspecto_salud', compact('disciplinas','culturas','enfermedades','decisions'));
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

      dd($request->id_disicplina1);
      $aspecto_deportivo= new Disciplina();
      $aspecto_cultura = new Grupo_cultura();
      $aspecto_salud->Enfermedad_impedimento = $request->Enfermedad_impedimento;

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
        //
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
