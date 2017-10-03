<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decision;
use App\Recurso;
use App\Lugar_trabajo;
use App\Condicion;
use App\Document;
use App\Preguntas;
use App\Respuestas;
use App\Segmento;
use Auth;
use App\Situacion_economica;
use App\CreadorInputs;
use Illuminate\Support\Facades\DB;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CreadorInputs $creador){

      $this->x = $creador;

      $this->add = 0;

      $this->middleware('auth');

    }

    public function index()
    {

      $segmentos = Segmento::all();


      $form = '';
      foreach ($segmentos as $segmento) {
        //if($segmento->segmento != 'C'){
            $form = $form . '<div class="row card-1 panel panel-info">
            <div class="panel-heading"><h4>'. $segmento->descrip .'</h4></div>
            <div class="panel-body">';
            
            $preguntas = Preguntas::where('segmento',$segmento->segmento)->where('id_pregunta',null)->get();

            foreach ($preguntas as $pregunta) {

              $form = $form . '<div class="">';

              if($pregunta->tipo_resp != 'tabla' ){

                  if($pregunta->dependencia == '1'){

                    $form = $form. $this->crear($pregunta).'<br>';

                    $form = $form . $this->buscarDEP($pregunta);

                  }else{

                      $form = $form. $this->crear($pregunta).'<br>';
                  }
              }else{
                if ($pregunta->tipo_resp == 'nada') {
                  $form = $form . '</div><div class="row container">';
                  $form = $form. '<div class="row">'.$this->crear($pregunta).'</div>';
                  $form = $form . $this->buscarDEP($pregunta);
                  $form = $form . '</div><div class="row">';
                
                }else{

                  $form = $form . '</div><div class="row container">';
                  $form = $form. '<div class="row">'.$this->crear($pregunta).'</div>';
                  $form = $form . $this->creartabla($pregunta);
                  $form = $form . '</div><div class="row">';

                }
              }
              # code...
              $form = $form . '</div>';
            }

            $form = $form . '
              </div>
            </div>';

            //$form = $this->preguntas($preguntas);
        //}
    }
      return view('preguntas',compact('form'));

    }

    public function crear($pregunta)
    {
      $d = '';
      $x = $this->add;
      
      switch($pregunta->tipo_resp) {
        case "drop":{
          $datos = DB::table($pregunta->tabla)->select()->get();
          $d = $d . $this->x->drop($pregunta, $datos);
            break;
        }
        case "text":{
          if ($pregunta->input == 'num') {
            $d = $d . $this->x->textSEGC($pregunta->id,$pregunta->pregunta,$pregunta->segmento,$x);
            
           break;
          }else{
            if ($pregunta->input == 'numtotal') {
              $d = $d . $this->x->textTotal($pregunta->id,$pregunta->pregunta,$pregunta->segmento,$x);
            $this->add = $this->add + 1;


           break;
            }else{
              if ($pregunta->input == 'text_sin') {
                $d = $d . $this->x->text_sin($pregunta->id,$pregunta->pregunta,$pregunta->segmento);
                break;
              }else{
                $d = $d . $this->x->text($pregunta->id,$pregunta->pregunta,$pregunta->segmento);
                break;
              }
            }
          }
          

        }
        case "check":{
          $datos = DB::table($pregunta->tabla)->select()->get();
          $d = $d . $this->x->crearcheck($pregunta,$datos);
          break;
        }
        case "nada":{
          $d = $d .$pregunta->pregunta;
          break;
        }
      }

      return $d;
      # code...
    }

    public function crear_tab($pregunta)
    {
      $x = $this->add;
      $d = '';
      switch($pregunta->tipo_resp) {
        case "drop":{
          $datos = DB::table($pregunta->tabla)->select()->get();
          $d = $d . $this->x->dropTabla($pregunta, $datos);
            break;
        }
        case "text":{
          if ($pregunta->input == 'num') {
            $d = $d . $this->x->textSEGCtab($pregunta->id,$pregunta->pregunta,$pregunta->segmento,$x);
           break;
          }else{
            
            $d = $d . $this->x->textTabla($pregunta->id,$pregunta->pregunta,$pregunta->segmento);
            break;
          }
          
        }
        case "check":{
          $datos = DB::table($pregunta->tabla)->select()->get();
          $d = $d . $this->x->crearcheck($pregunta,$datos);
          break;
        }
        case "nada":{
          $d = $d .$pregunta->pregunta;
          break;
        }
      }

      return $d;
      # code...
    }

    public function creartabla($pregunta)
    {
      $form ='<div class="row container">
        <h5>'.$pregunta->pregunta.'</h5>
        <table class="table table-bordered">
          <thead>
            <tr>';

            $datos = $this->buscarpreguntasdep($pregunta->id);
            foreach ($datos as $value) {
              $form = $form . '<th>'.$value->pregunta.'</th>';
            }

            $form = $form.'
            </tr>
          </thead>
          <tbody>
            ';
            $td = '';
            for ($i=0; $i < 5; $i++) { 
              $form = $form. '<tr>';
              
             foreach ($datos as $value) {
                $form = $form.  '<td>'.$this->crear_tab($value).'</td>';
              }

              $form = $form. '</tr>';

            }
              
              $form = $form.'
          </tbody>
        </table>
      </div>';

      return $form;


      # code...
    }

    public function buscarDEP($pregunta)
    {
      $form = '';
      $dependientesCiertas = Preguntas::where('id_pregunta',$pregunta->id)->where('parte','1')->get();
                
                    if ($dependientesCiertas->count()) {

                      $form = $form.'<div class="col-md-12" style="display:none" id="cierto['.$pregunta->id.']"><div class="well">';
                        

                        foreach ($dependientesCiertas as $dato1) {
                            $form = $form. $this->crear($dato1).'<br>';
                        }

                        


                      $form = $form.'</div></div>';
                      # code...
                    }


                $dependientesFalsas = Preguntas::where('id_pregunta',$pregunta->id)->where('parte','0')->get();


                  if ($dependientesFalsas->count()) {


                    $form = $form.'<div class="col-md-12" style="display:none" id="falso['.$pregunta->id.']"><div class="well">';
                        
                        foreach ($dependientesFalsas as $dato2) {
                            $form = $form. $this->crear($dato2).'<br>';
                        }


                    $form = $form.'</div></div>';
                    # code...
                  }


                $dependientesnull = Preguntas::where('id_pregunta',$pregunta->id)->where('parte',null)->get();
                


                  if ($dependientesnull->count()) {

                    $form = $form.'<div class="row container" id="none['.$pregunta->id.']"><div class="well">';
                        
                        foreach ($dependientesnull as $dato3) {
                            $form = $form. $this->crear($dato3).'<br>';
                        }


                    $form = $form.'</div></div>';
                    # code...
                  }
                return $form;
    }


    public function buscarpreguntasdep($id){

      $preguntas = Preguntas::where('id_pregunta',$id)->get();
      return $preguntas;
    }
    

    public function store(Request $request)
    {


      $datos = $request->all();
      foreach ($datos as $key => $value) {
        
        if($key != "_token"){
          if ($key == 'segmento') {
            foreach ($value as $llave => $valor) {
              foreach ($valor as $j => $datos) {
                if ($datos != "") {
                  $respuestas = new Respuestas();
                  $respuestas->id_pregunta = $j;
                  $preg = Preguntas::find($j);
                    if($preg->tabla != null){

                      $respuestas->respuesta = DB::table($preg->tabla)->where('id',$datos)->value('descrip');
                    
                    }else{

                      $respuestas->respuesta = $datos;
                    
                    }
                  
                  $respuestas->id_usuario = Auth::user()->id;
                  $respuestas->save();
                }
              }
            }
          }else{
            foreach ($value as $llave => $valor) {
             
              foreach ($valor as $k => $dato) {
                $respuestas = new Respuestas();
                  $respuestas->id_pregunta = $llave;
                  $preg = Preguntas::find($llave);
                    if($preg->tabla != null){

                      $respuestas->respuesta = DB::table($preg->tabla)->where('id',$k)->value('descrip');
                    
                    }else{

                      $respuestas->respuesta = $k;
                    
                    }
                  
                  $respuestas->id_usuario = Auth::user()->id;
                  $respuestas->save();
              }
            }
          }
        }
      }

      return view('home');

    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        
        $respuestas = Respuestas::where('id_usuario',$id)->get();
        return response()->json($respuestas);
    }

    public function edit($id)
    {
        //
    }


    public function update($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


}
