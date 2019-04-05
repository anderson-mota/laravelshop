<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller{
    public function index(){
        $titulo = 'LaravelShop | Productos - Listar';
        $productos = Productos::orderby('id', 'desc')->paginate(15);

		return view('admin.productos.index')->with([
            'titulo'    => $titulo,
            'productos' => $productos,
        ]);
    }

    public function crear(){
        $titulo = 'LaravelShop | Productos - Crear';

		return view('admin.productos.crear')->with([
            'titulo'    => $titulo,
        ]);
    }

    public function grabar(){

    }

    public function editar(){

    }

    public function cambiar(){

    }

    public function borrar(){

    }
}
