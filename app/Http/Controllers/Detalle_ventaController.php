<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Detalle_ventaController extends Controller
{
    public function insertar_carrito(Request $input)
    {
        $cantidad=$input['cantidad'];
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        
        
        $cantidad_carrito="";

        
        $favoritos=DB::select('select *  from carrito_compras where carrito_compras.id_usuario='.$id_usuario.' and carrito_compras.id_alimento='.$id_alimento);
        
        if(empty($favoritos))
        {
            $cantidad_carrito=$cantidad;
            $query=DB::insert('insert into carrito_compras(id_usuario, id_alimento, cantidad) values ( ?, ?, ?)', [$id_usuario, $id_alimento, $cantidad]);
        }
        else
        {
            $cantidad_anterior=$favoritos[0]->cantidad;
            $cantidad_nueva=$cantidad+$cantidad_anterior;
            
            $query=DB::update("update carrito_compras set cantidad='$cantidad_nueva' where id_usuario=? and id_alimento=?",[$id_usuario,$id_alimento]);
            $cantidad_carrito=$cantidad_nueva;
        }
        
        $json=json_encode($cantidad_carrito);
		return response()->json($json);
        
    }
}
