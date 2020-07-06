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
}
