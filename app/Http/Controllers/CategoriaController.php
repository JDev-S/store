<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
    public function categorias_mostrar()
	{
		$categorias=DB::select('select * from categoria where categoria.eliminado!=1');
		return view('/Administrador/Categoria/index',compact('categorias'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_categoria'];
        $eliminado=1;
		$query=DB::update("update categoria set eliminado='$eliminado' where id_categoria=?",[$id]);
		return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $nombre_categoria = $input['nombre_categoria'];
        $categoria_padre = $input['categoria_padre'];
        $eliminado = 0;
        
        $query=DB::insert('insert into categoria (id_categoria, nombre_categoria, categoria_padre, eliminado) values ( ?, ?, ?, ?)', [null, $nombre_categoria, $categoria_padre, $eliminado]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_categoria=$input['id_categoria'];
        $nombre_categoria = $input['nombre_categoria'];
        //$categoria_padre=$input['categoria_padre'];
        $eliminado=$input['eliminado'];
        
        $query=DB::update("update categoria set nombre_categoria='$nombre_categoria', eliminado='$eliminado' where id_categoria=?",[$id_categoria]);
        return redirect()->action('CategoriaController@categorias_mostrar')->withInput();
	}
}
