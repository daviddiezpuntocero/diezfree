<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App \Categorias;
use App \Proyectos;


class CrearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
		
	
	public function categorias()
    {
        $categorias = Categorias::all();
        return view('create', ['categorias' => $categorias, 'resultado' => '0']);
    }
	
	 public function GrabarProyectos(Request $request)
    {
        
		$validator = \Validator::make($request->all(), [
        'tituloproyecto' => 'required|max:60',
		'proveedor' =>'required',
		'ubicacion' =>'required',
		'presupuesto' =>'required',
		'rangohora' =>'required_if:presupuesto,1',
		'rangocerrado' =>'required_if:presupuesto,2',
		'Descripcion' => 'required|max:6000']);
		
		
		
		
		if ($validator->fails())
		{   
			return redirect('/crear')
			->withInput()
			->withErrors($validator);
		}else
		{
			
			Proyectos::create([
            'idusuario' => $request['idusuario'],
            'tituloproyecto' => $request['tituloproyecto'],
            'idcategoria' => $request['categorias'],
			'nombresubcategoria' => $request['subcategoria'],
			'tipoproveedor' => $request['proveedor'],
			'tipopresupuesto' => $request['presupuesto'],
			'rangohora'  => $request['rangohora'],
			'rangocerrado'  => $request['rangocerrado'],
			'descripcion' => $request['Descripcion']]);
			return view('/confirmacion', ['resultado' => '1', ]);
			
		}
		
			
    }
	
}
