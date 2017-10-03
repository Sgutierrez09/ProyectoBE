@extends('layouts.marco')
@section('datos')
<div class="container">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('datos_personales')}}" >
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12 panel-info" style="padding-left: 0px;padding-right: 0px;">
        <div class="panel-heading"><h3><strong>Bienvenidos</strong></h3></div>
          <div class="panel panel-info">
           <div class="container">
            <div class="panel-body">
              <div class="col-md-12">
                  <strong><center><h3>Generalidades</h3></center></strong><br>
                    <p class="text-justify" style="font-size:18px;">La Dirección de Bienestar Estudiantil le da la bienvenida a todos los estudiantes de la Universidad Tecnológica de Panamá. <br>
                    Para brindarles un mejor servicio es necesario obtener de antemano información del solicitante<br>
                    Recuerde que es obligatorio llenar todos los campos.</p>
            </div>
          </div>
        </div>

 <div class="container">
   <div class="row">
      <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
        <div class="panel-default"> 
              <strong><center><h3>Datos Personales</h3></center></strong><br>
             <div class="panel-body">
              <div class="col-md-3">
                <label class="control-label">Nombre &nbsp;</label><input type="text" id="viv" class="form-control" name="nombre" placeholder="Nombre"></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">Apellido &nbsp; </label><input type="text" id="1" class="form-control" name="apellido" placeholder="Apellido" ></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">No. de Cédula &nbsp; </label><input type="text" id="2" class="form-control" name="cedula" placeholder="No. de Cédula" ></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">Edad &nbsp; </label><input type="number" id="3" class="form-control" name="edad" placeholder="Edad" onchange="sumar(this.value);" ></input>&nbsp; &nbsp; &nbsp;
              </div>
               <div class="col-md-3">
                <label for="datos" class="control-label">Sexo &nbsp;</label>&nbsp; &nbsp; &nbsp;
                   {!! Form:: select('sexo', App\Sexo::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'sexo','id'=>'id_sexo')) !!}
                </div>
              <div class="col-md-3">
                <label class="control-label">Estado Civil &nbsp;</label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('estado_civil', App\Estado_civil::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'estado_civil','id'=>'id_estado')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Nacionalidad &nbsp;</label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('nacionalidad', App\Nacionalidad::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'nacionalidad','id'=>'id_nac')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Seguro Social &nbsp; </label><input type="text" id="seguro_soc" class="form-control" name="seguro_soc" placeholder="Seguro Social" ></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">Tipo de Sangre &nbsp; </label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('tipo_de_sangre', App\Tipo_de_sangre::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'tipo_sangre','id'=>'id_sangre')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Provincia &nbsp; </label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('provincia', App\Provincia::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'provincia','id'=>'id_provincia')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Distrito &nbsp; </label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('distrito', App\Distrito::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'distrito','id'=>'id_distrito')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Corregimiento&nbsp; </label>&nbsp; &nbsp; &nbsp;
                {!! Form:: select('corregimiento', App\Corregimiento::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'corregimiento','id'=>'id_corregimiento')) !!}
              </div>
              <div class="col-md-3">
                <label class="control-label">Dirección &nbsp;</label><input type="text" id="12" class="form-control" name="direccion" placeholder="Dirección"></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">E-Mail &nbsp; </label><input type="text" id="14" class="form-control" name="email" placeholder="E-Mail" ></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">Celular&nbsp; </label><input type="text" id="15" class="form-control" name="celular" placeholder="Telefono"></input>&nbsp; &nbsp; &nbsp;
              </div>
              <div class="col-md-3">
                <label class="control-label">Fecha de nacimiento &nbsp; </label><input type="date" id="16" class="form-control" name="fecha_nac" placeholder="Fecha de Nacimiento" ></input>&nbsp; &nbsp; &nbsp;
            </div>
             <div class="col-md-3">
               <label class="control-label">Carrera&nbsp; </label>&nbsp; &nbsp; &nbsp;
                  {!! Form:: select('carrera', App\Carrera::pluck('descrip'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'carrera','id'=>'id_carrera')) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  </form>

<div class="container">
   <div class="row">
      <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
        <div class="panel-default">
          <div class="panel-heading">Documentos</div>
          <div class="panel-body">
            <div class="form-group">
                <label for="urlimgnot" class="col-sm-4">Adjuntar Foto</label>
                <input type="file" name="foto" id="urlimgnot">
            </div>
            <div class="form-group">
                <label for="urlimgnot" class="col-sm-4">Foto de Facturas</label>
                <input type="file" name="factura" id="urlimgnot">
            </div>

            <button type="submit" class="btn btn-primary" class="col-sm-6">Enviar</button>
         </div>
       </div>
     </div>
   </div>
</div>

@endsection