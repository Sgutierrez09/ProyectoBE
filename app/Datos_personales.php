<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_personales extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = ('datos_personales');
    protected $fillable = ['id', 'nombre','apellido','cedula','edad','id_nacionalidad','id_tiposangre','seguro_soc','procedencia','id_sexo','id_estadocivil',
    'fecha_nac','direccion','celular','email','id_usuario','id_carrera','id_provincia','id_corregimiento','id_distrito','id_servicio','foto','factura'
    ];
}
