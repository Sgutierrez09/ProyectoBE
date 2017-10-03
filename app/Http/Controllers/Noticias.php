<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Noticia;

use Storage;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('layouts.formulario');
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

        $this->validate($request,[
                'titulo'=>'required',
                'descripcion'=>'required'
            ]);


         $noticia= new Noticia();
         $noticia->titulo = $request->titulo;
         $noticia->descripcion = $request->descripcion;


         $img = $request->file('urlimgnot');

         $file_route = time().'_'.$img->getClientOriginalName();

         Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath() ) );


         $noticia->urlimgnot = $file_route;

         if($noticia->save())
         {
          return back()->with('msj', 'Datos guardados');
         }
         else {
           return back()->with('msj', 'Datos no guardados');
         }
         //dd('Datos guardados');





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
        $noticia= Noticia::find('$id');
        return view ('modificar')->with (['edit'=> true, 'noticia' => $noticia]);

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
        dd('update');
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

    public function mostrar()
    {
      $noticias = Noticia::all();

      return view('views.welcome', compact('noticias'));
    }
}
