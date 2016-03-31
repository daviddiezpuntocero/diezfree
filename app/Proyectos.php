<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'proyectos';
	protected $fillable = ['idusuario', 'tituloproyecto', 'idcategoria', 'nombresubcategoria', 'tipoproveedor', 'tipopresupuesto', 'rangohora', 'rangocerrado','descripcion'];
}
