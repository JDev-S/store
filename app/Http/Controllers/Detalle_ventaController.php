<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Mercado_pagoController;
use App\Http\Controllers\PaypalController;
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
    
    
        public function mostrar_carrito_compra()
    {
        $id_usuario=13;
        $carrito_compras=DB::select('select * from usuario INNER join carrito_compras on usuario.id_usuario=carrito_compras.id_usuario inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where usuario.id_usuario='.$id_usuario);
        
        $totales=DB::select('select id_usuario, sum(alimentos.precio* carrito_compras.cantidad) as total from carrito_compras inner join alimentos on carrito_compras.id_alimento=alimentos.id_alimento where id_usuario ='.$id_usuario);
          
		return view('/principal/carrito',compact('carrito_compras','totales'));
    }
    
        public function eliminar_platillo(Request $input)
    {
     
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        
        $query=DB::delete("DELETE FROM carrito_compras WHERE id_usuario='$id_usuario' and id_alimento='$id_alimento'");
		//$query=DB::delete("DELETE from carrito_compras where id_usuario = $id_usuario and id_alimento = $id_alimento");
		//return redirect()->action('Detalle_ventaController@detalle_ventas_mostrar')->withInput();
        
        return redirect()->action('Detalle_ventaController@mostrar_carrito_compra')->withInput();
    }
    
    public function actualizar_carrito(Request $input)
    {
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        $cantidad=$input['cantidad'];
        
         $query=DB::update("update carrito_compras set cantidad='$cantidad' where id_usuario=? and id_alimento=?",[$id_usuario,$id_alimento]);
        
        return redirect()->action('Detalle_ventaController@mostrar_carrito_compra')->withInput();
    }
    
    
        public function checar()
    {
        $id_usuario=13;
        $id_direccion=3;
        $direcciones=DB::select("select * from direccion where id_direccion =$id_direccion");
            
        $carrito_compras=DB::select('select * from usuario INNER join carrito_compras on usuario.id_usuario=carrito_compras.id_usuario inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where usuario.id_usuario='.$id_usuario);
        
        $totales=DB::select('select id_usuario, sum(alimentos.precio* carrito_compras.cantidad) as total from carrito_compras inner join alimentos on carrito_compras.id_alimento=alimentos.id_alimento where id_usuario ='.$id_usuario);
            
        $metodos=DB::select('select * from metodo_de_pago where eliminado=0');
            
           /*Informacion de paypal*/
        $paypal=(new PaypalController)->Detalle_Paypal($id_usuario,$id_direccion); 
            $items = json_encode($paypal);

        /*Informacion de mercado pago*/    
        $preference=(new Mercado_pagoController)->Detalle_Mercado_Pago($id_usuario,$id_direccion);    
        
        return view('/principal/checar',compact('direcciones','carrito_compras','totales','metodos','preference','id_direccion','items'));
        
    }
    
         public function ingresar_direccion(Request $input)
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
                

         return redirect()->action('Detalle_ventaController@checar')->withInput();
    }
    
    
    
    
    
    public function insertar_venta(Request $input)
    {
    
        $id_usuario=$input['id_usuario'];
        $total=$input['total'];
        $id_direccion=$input['id_direccion'];
        $id_metodo=$input['id_metodo'];
        
        if($id_metodo==1)
        {
            echo 'EFECTIVO';
            //MANDAR A ESE METODO DE PAGO
        }else
            if($id_metodo==2)
            {
               echo 'TRANSFERENCIA';
            }
             else
                 if($id_metodo==3)
                 {
                     echo 'PAYPAL';
                     
                 }
                 else
                     if($id_metodo==4)
                     {
                      echo 'MERCADO PAGO';
                       
                         die();
                     }
        
        
    }
    
}
