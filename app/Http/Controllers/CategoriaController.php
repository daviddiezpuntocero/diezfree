<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\User;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all();
        return view('create.index', ['categorias' => $categorias]);
    }
}
