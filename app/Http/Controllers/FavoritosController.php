<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FavoritosController extends Controller
{
        public function insertar_eliminar(Request $input)
    {
            /*OBTENER EL ID DEL USUARIO PARA QUE SE AGREGUE A FAVORITOS*/
        //$id_usuario=$input['id_usuario'];
        $id_usuario=13;
        $id_alimento=$input['id_alimento'];
        $mensaje="";
        
        $favoritos=DB::select('select favoritos.id_usuario, favoritos.id_alimento from favoritos where favoritos.id_usuario='.$id_usuario.' and favoritos.id_alimento='.$id_alimento);
        
        if(empty($favoritos))
        {
            $query=DB::insert('insert into favoritos (id_usuario, id_alimento) values ( ?, ?)', [$id_usuario, $id_alimento]); 
            $mensaje="Se ha agregado a favoritos!! ";
        }
        else
        {
            $query=DB::delete("delete from favoritos where id_alimento=? and id_usuario=?",[$id_alimento,$id_usuario]);
            $mensaje="Se ha eliminado de favoritos!! ";
        }
          $json=json_encode($mensaje);
		return response()->json($json);
    }

	 public function favoritos_mostrar()
	{
		$favoritos=DB::select('select alimentos.nombre_alimento, usuario.nombre, favoritos.id_usuario, favoritos.id_alimento from favoritos inner join alimentos on favoritos.id_alimento=alimentos.id_alimento inner join usuario on usuario.id_usuario=favoritos.id_usuario');
          
		return view('/Administrador/Favoritos/index',compact('favoritos'));
    }

	public function eliminar(Request $input)
    {
		$id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
		$query=DB::delete("delete from alimentos where id_alimento=? and id_usuario=?",[$id_alimento,$id_usuario]);
		return redirect()->action('FavoritosController@favoritos_mostrar')->withInput();
	}
    
    
	public function insertar(Request $input)
	{
        $id_alimento = $input['id_alimento'];
        $id_usuario = $input['id_usuario'];
        $query=DB::insert('insert into favoritos (id_usuario, id_alimento) values ( ?, ?)', [$id_usuario, $id_alimento]);
        return redirect()->action('FavoritosController@favoritos_mostrar')->withInput();
	}
}
