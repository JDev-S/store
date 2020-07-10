<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DireccionController extends Controller
{

    public function direccion_mostrar($id_usuario)
	{
		$direcciones=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo, usuario.id_usuario,direccion.id_direccion,direccion.persona_recibe,direccion.colonia,direccion.calle,direccion.numero_interior,direccion.numero_exterior,direccion.cp,direccion.referencia,direccion.calleA,direccion.calleB,direccion.telefono,direccion.eliminado from direccion inner join usuario on usuario.id_usuario=direccion.id_usuario
        where usuario.id_usuario=$id_usuario and direccion.eliminado!=1");
        
        $json=json_encode($direcciones);
		return response()->json($json);
        //return Response::json(['data'=>$json]);
    }
    
    	public function eliminar(Request $input)
    {
		$id=$input['id_direccion'];
        $eliminado=1;
		$query=DB::update("update direccion set  eliminado='$eliminado' where id_direccion=?",[$id]);
		
	}
    
    public function insertar(Request $input)
	{
        $persona_recibe=$input['persona_recibe'];
        $colonia=$input['colonia'];
        $calle=$input['calle'];
        $numero_interior=$input['numero_interior'];
        $numero_exterior=$input['numero_exterior'];
        $cp=$input['cp'];
        $referencia=$input['referencia'];
        $calleA=$input['calleA'];
        $calleB=$input['calleB'];
        $tel_casa=$input['telefono'];
        $id_usuario=$input['id_usuario'];
        $eliminado = 0;
        
        $query2=DB::insert('INSERT INTO direccion (id_direccion, id_usuario, persona_recibe, colonia, calle, numero_interior, numero_exterior, cp, referencia, calleA, calleB, telefono, eliminado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_usuario, $persona_recibe, $colonia, $calle, $numero_interior, $numero_exterior, $cp, $referencia, $calleA, $calleB, $tel_casa, $eliminado]);
        
        $direcciones=DB::select('select id_direccion from direccion order by id_direccion desc limit 1');
        $id=$direcciones[0]->id_direccion;
        
        return response()-> json($id);
            
        
    }
    
    	public function actualizar(Request $input)
    {
        $persona_recibe=$input['persona_recibe'];
        $colonia=$input['colonia'];
        $calle=$input['calle'];
        $numero_interior=$input['numero_interior'];
        $numero_exterior=$input['numero_exterior'];
        $cp=$input['cp'];
        $referencia=$input['referencia'];
        $calleA=$input['calleA'];
        $calleB=$input['calleB'];
        $tel_casa=$input['telefono'];
        $id_usuario=$input['id_usuario'];
        $id_direccion=$input['id_direccion'];
        $eliminado = $input['eliminado'];
            
		$query=DB::update("update direccion set  persona_recibe='$persona_recibe', colonia='$colonia', calle='$calle', numero_interior='$numero_interior', numero_exterior='$numero_exterior', cp='$cp', referencia='$referencia', calleA='$calleA', calleB='$calleB', telefono='$tel_casa', eliminado='$eliminado' where id_direccion=? and id_usuario=?",[$id_direccion,$id_usuario]);
            
        $direcciones=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo, usuario.id_usuario,direccion.id_direccion,direccion.persona_recibe,direccion.colonia,direccion.calle,direccion.numero_interior,direccion.numero_exterior,direccion.cp,direccion.referencia,direccion.calleA,direccion.calleB,direccion.telefono,direccion.eliminado from direccion inner join usuario on usuario.id_usuario=direccion.id_usuario
        where usuario.id_usuario=$id_usuario and direccion.eliminado!=1");
        
        $json=json_encode($direcciones);
		return response()->json($json);
		
	}
      
	
}
