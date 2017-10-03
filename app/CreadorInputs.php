<?php
namespace App;

class CreadorInputs {

	public function text($id,$label,$segmento)
	{
		$text = '<div class="row form-group">
				    <label for="" class="col-md-6">'.$label.'</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="segmento['.$segmento.']['.$id.']"  required name="segmento['.$segmento.']['.$id.']"placeholder="">
				    </div>
				  </div>';	
      return $text;
	}
	public function text_sin($id,$label,$segmento)
	{
		$text = '<div class="row form-group">
				    <label for="" class="col-md-6">'.$label.'</label>
				    <div class="col-md-6">
				      <input type="text" class="form-control" id="segmento['.$segmento.']['.$id.']"  name="segmento['.$segmento.']['.$id.']"placeholder="">
				    </div>
				  </div>';	
      return $text;
	}
	public function drop($pregunta,$preguntas)
	{
		$fr = '<div class="row form-group">
		<label for="" class="col-md-6">'.$pregunta->pregunta.'</label>
		<div class="col-md-6">
       <select name="segmento['.$pregunta->segmento.']['.$pregunta->id.']" class="form-control"  onchange="drop(this,'.$pregunta->id.')" id="'. $pregunta->tabla .'">
        <option value="0" disabled selected>--Seleccionar--</option>';
      foreach ($preguntas as $dato) {
        $fr = $fr . '<option value="'. $dato->id .'">'. $dato->descrip .'</option>';
      }
      $fr = $fr . '</select>
      </div></div>';
      return $fr;
	}
	public function crearcheck($pregunta, $datos)
    {
      //recibe la tabla contenida en el campo de tabla en la base de datos de la tabla preguntas desde el switch cuando
      //cuando el tipo_resp = drop;
      $fr = '<div class="row">
          <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading"><label>'.$pregunta->pregunta.'</label></div>
                  <ul class="list-group"><li class="list-group-item container-fluid">';
                  foreach ($datos as $dato) {
                    $fr = $fr . '
                      <div class="col-md-4">
                      	<div class="checkbox checkbox-primary">
	                        <input id="check['.$pregunta->id.']['.$dato->id.']" type="checkbox" title="'.$dato->descrip.'" onchange="check(this,'.$pregunta->id.')" name="check['.$pregunta->id.']['.$dato->id.']" >
	                        <label for="check['.$pregunta->id.']['.$dato->id.']">
	                            '.$dato->descrip.'
	                        </label>
                    	</div>
                      </div>';
                    }
                    $fr = $fr .'</li>
                  </ul>
              </div>
          </div>
      </div>';
      return $fr;
    }

    public function textTabla($id,$label,$segmento)
	{
		$a = "'".$id.$segmento."'";
      $text = '<div class="row form-group">
				    <div class="col-md-12">
				      <input type="text" class="form-control" id="segmento['.$segmento.']['.$id.']"  name="segmento['.$segmento.']['.$id.']" v-model="row.'.$id.'" v-bind:id="'.$id.$segmento.'+ index" placeholder="">
				    </div>
				  </div>';	
      return $text;
	}
	public function dropTabla($pregunta,$preguntas)
	{
		$fr = '<div class="row form-group">
		<div class="col-md-12">
       <select name="segmento['.$pregunta->segmento.']['.$pregunta->id.']" class="form-control" onchange="drop(this,'.$pregunta->id.')" id="'. $pregunta->tabla .' v-model="row.'.$pregunta->id.'" v-bind:id="'.$pregunta->id.' + index">
        <option value="0" disabled selected>--Seleccionar--</option>';
      foreach ($preguntas as $dato) {
        $fr = $fr . '<option value="'. $dato->id .'">'. $dato->descrip .'</option>';
      }
      $fr = $fr . '</select>
      </div></div>';
      return $fr;
		
	}

	public function textSEGC($id,$label,$segmento, $x)
	{
		$text = '
		<div class="row form-group">
				    <label for="" class="col-md-6">'.$label.'</label>
				    <div class="col-md-6">
				      	<div class="input-group">
					      <div class="input-group-addon">$</div>
					      	<input type="number" class="form-control" id="segmento['.$segmento.']['.$id.']" onchange="suma(this.value,'.$x.')"  onclick="aki(this.value)" name="segmento['.$segmento.']['.$id.']"placeholder="0.00">
					      <div class="input-group-addon">al mes</div>
					    </div>
				    </div>
				  </div>';	
      return $text;
	}
	public function textSEGCtab($id,$label,$segmento, $x)
	{
		if ($label == 'Salario Bruto') {
			$text = '
		<div class="row form-group">
				    <div class="col-md-12">
				      	<div class="input-group">
					      <div class="input-group-addon">$</div>
					      	<input type="number" class="form-control" id="segmento['.$segmento.']['.$id.']" onclick="aki(this.value)" onchange="suma(this.value,'.$x.')" name="segmento['.$segmento.']['.$id.']" placeholder="0.00">
					      <div class="input-group-addon">al mes</div>
					    </div>
				    </div>
				  </div>';
		}else{
			$text = '
		<div class="row form-group">
				    <div class="col-md-12">
				      	<div class="input-group">
					      <div class="input-group-addon">$</div>
					      	<input type="number" class="form-control" id="segmento['.$segmento.']['.$id.']" name="segmento['.$segmento.']['.$id.']" placeholder="0.00">
					      <div class="input-group-addon">al mes</div>
					    </div>
				    </div>
				  </div>';
		}
			
      return $text;
	}
	public function textTotal($id,$label,$segmento,$x)
	{
		$text = '<div class="row form-group">
				    <label for="" class="col-md-6">'.$label.'</label>
				    <div id="" class="col-md-6">
				      <input type="number" class="form-control"  id="total'.$x.'" id_suma="'.$x.'"" disabled name="segmento['.$segmento.']['.$id.']"placeholder="">
				    </div>
				  </div>';	
      return $text;
	}



}