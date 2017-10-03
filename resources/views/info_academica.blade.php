
  <form class="form-horizontal" role="form" method="POST" action="" >
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
          <div class="panel-heading"><h4><strong>Información Académica</strong></h4></div>
            <div class="panel-body">
              <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="academica" class="col-sm-4 control-label" >Facultad</label>
                  <div id= "academica" class="col-sm-8">
                  {!! Form:: select('facultad', App\Facultad::pluck('facultad'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'facultad','id'=>'id_d')) !!}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="academica" class="col-sm-4 control-label" >Carrera</label>
                  <div id= "academica" class="col-sm-8">
                  {!! Form:: select('carrera', App\Carrera::pluck('carrera'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'facultad','id'=>'id_d')) !!}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="academica" class="col-sm-6 control-label" >Año Académico</label>
                  <div id= "academica" class="col-sm-6">
                  {!! Form:: select('agno_ac', App\Agno_ac::pluck('agno_ac'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'facultad','id'=>'id_d')) !!}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="academica" class="col-sm-12   control-label" >Año de ingreso a la universidad</label>
                  <textarea type="text" id="id_textarea_condicion" class="form-control" name="ango_ing" placeholder="Describa..."></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

            <div class="row">
              <div class="col-md-12 ">
                <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
                  <div class="panel-body">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="academica" class="col-sm-3 control-label" >Especialidad</label>
                                  <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('especialidad', App\Especialidad::pluck('especialidad'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'especilidad','id'=>'id_d')) !!}
                                  </div>
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-5 control-label" >Estatus académico</label>
                                  <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('estatus_academico', App\Estatus::pluck('estatus_academico'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'estatus','id'=>'id_d')) !!}
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="academica" class="col-sm-6 control-label" >¿Confronta problemas académicos?</label>
                                <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('dprblema_ac', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'dprblema_ac')) !!}
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                      <div class="row">
                        <div class="col-md-12 ">
                          <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
                            <div class="panel-body">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-6 control-label" >Índice académico</label>
                                  <textarea type="text" id="id_textarea_condicion" class="col-sm-4 form-control" name="aula" placeholder="Describa..."></textarea>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-6 control-label" >Aula de clases</label>
                                  <div class="col-sm-12">
                                  <textarea type="text" id="id_textarea_condicion" class="form-control" name="aula" placeholder="Describa..."></textarea>
                                </div></div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-6 control-label" >Aula de clases</label>
                                  <div class="col-sm-12">
                                  <textarea type="text" id="id_textarea_condicion" class="form-control" name="aula" placeholder="Describa..."></textarea>
                                </div></div>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>

            <div class="row">
              <div class="col-md-12 ">
                <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
                  <div class="panel-body">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="academica" class="col-sm-6 control-label" >¿Posee los libros necesarios para cursar sus estudios?</label>
                                <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('dlib_necesario', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'dlib_necesario')) !!}
                                </div>
                              </div>
                             </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="academica" class="col-sm-6 control-label" >¿Tiene computadora?</label>
                                <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('dcompu', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'dcompu')) !!}
                                </div>
                             </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="academica" class="col-sm-7 control-label" >¿Ha cambiado de carrera?</label>
                              <div id= "academica" class="col-sm-6">
                                {!! Form:: select('dlib_necesario', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'dlib_necesario')) !!}
                              </div>
                            </div>
                           </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 ">
                    <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
                      <div class="panel-body">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-7 control-label" >¿Tiene grupo de estudio?</label>
                                  <div id= "academica" class="col-sm-6">
                                    {!! Form:: select('dgrupo_estu', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'dgrupo_estu')) !!}
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="academica" class="col-sm-6 control-label" >¿Dónde generalmente realiza sus labores académicas?</label>
                                  <div id= "academica" class="col-sm-5">
                                    {!! Form:: select('area_laboral', App\Area_laboral::pluck('area_laboral'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'area_laboral', 'id'=>'id_arlabo_ac')) !!}
                                    <script src="/js/academica.js"></script>
                                  <div class="form" id="area_laboral" style="display: none;">
                                    <label class="col-sm-2 control-label" >Especifíque</label>
                                    <textarea type="text" id="id_textarea_area_laboral" class="form-control" name="Descipcion" placeholder="Especifíque"></textarea>
                                  </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="academica" class="col-sm-6 control-label" >¿Cuenta con un lugar adecuado para estudiar?</label>
                                <div id= "academica" class="col-sm-6">
                                  {!! Form:: select('dlugar_adecuado', App\Decision::pluck('decision'), null, array('placeholder' => '--Seleccionar--','class'=>'form-control', 'name'=>'lugar_adecuado')) !!}
                                </div>
                              </div>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script src="https://unpkg.com/vue@2.3.4"></script>
                    <div class="col-md-12 panel panel-info" style="padding-left: 0px;padding-right: 0px;">
                      <div class="panel-heading"><h4><strong>Materias durante este semestre</strong></h4></div>
                        <div class="panel-body">
                          <div class="row col-md-12">
                            <div id="app2">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <td><strong>Materia</strong></td>
                                    <td><strong>Profesor</strong></td>
                                    <td><strong>R/S</strong></td>
                                    <td></td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr v-for="(row, index) in rows">
                                    <td><input type="text" v-model="row.materia" v-bind:id="'materia' + index"></td>
                                    <td><input type="text" v-model="row.prof" v-bind:id="'prof' + index"></td>
                                    <td><input type="text" v-model="row.rs" v-bind:id="'rs' + index"></td>
                                    <td><a v-on:click="removeRow(row)">Eliminar</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div>

                                <a class="btn btn-primary" role="button" v-on:click="addRow" >Link</a>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>



              </div>

            </form>

            <script>
            var app  = new Vue({
              el: "#app2",
              data: {
                rows: [
                  {materia: "",prof: "", rs: ""},
                ]
              },
              methods:{
                addRow: function(){
                  this.rows.push({materia:"",prof:"",rs:""});

                },
                removeRow: function(row){
                  //console.log(row);
                  this.rows.$remove(row);
                },
              }
            });

            </script>
