<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datos_personales;
use App\Periodo;
use App\Servicio;
use App\Sexo;
use App\Nacionalidad;
use App\Tipo_de_sangre;
use App\Provincia;
use App\Distrito;
use App\Corregimiento;
use App\Estado_civil;
use App\Carrera;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view ('datos_personales');
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
      $datos = new Datos_personales();
      $datos->nombre = $request->nombre;
      $datos->apellido = $request->apellido;
      $datos->cedula = $request->cedula;
      $datos->edad = $request->edad;
      $datos->id_sexo = $request->sexo;
      $datos->id_carrera = $request->carrera;
      $datos->direccion = $request->direccion;
      $datos->id_nacionalidad = $request->nacionalidad;
      $datos->id_estadocivil = $request->estado;
      $datos->seguro_soc = $request->seguro_soc;
      $datos->id_tiposangre = $request->tipo_sangre;
      $datos->id_provincia= $request->provincia;
      $datos->id_distrito = $request->distrito;
      $datos->id_corregimiento = $request->corregimiento;
      $datos->email = $request->email;
      $datos->celular = $request->celular;
      $datos->fecha_nac = $request->fecha_nac;
      $datos->foto = $request->foto;
      $datos->factura = $request->factura;
      $datos->save();



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   }
    public function show($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_img(Request $request)
    {
        $user = User::find(Auth::user()->id);

        //Handle the user upload of image
        if($request->hasFile('img')){

            $img = $request->file('img');
            $filename = time().'.'.$img->getClientOriginalExtension();

            //Delete current image before uploading new Image
            if($user->img !== 'default.jpg'){
                $file = public_path('uploads/avatars/'.$user->img);

                if(File::exists($file)){
                    unlink($file);
                }
            }

            Image::make($img)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->img = $filename;
            $user->save();
        }
    }
    public function destroy($id)
    {
        //
    }
}
