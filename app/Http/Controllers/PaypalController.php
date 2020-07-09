<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PaypalController extends Controller
{
    public function Detalle_Paypal($id_usuario,$id_direccion)
    {
        $info_usuarios=DB::select("SELECT * FROM usuario where usuario.id_usuario='$id_usuario'");
         $info_direcciones=DB::select("SELECT * FROM direccion where direccion.id_direccion='$id_direccion'");
         $info_carrito_compras=DB::select("select * from carrito_compras inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where carrito_compras.id_usuario='$id_usuario'");
        $totales=DB::select('select id_usuario, sum(alimentos.precio* carrito_compras.cantidad) as total from carrito_compras inner join alimentos on carrito_compras.id_alimento=alimentos.id_alimento where id_usuario ='.$id_usuario);
        
        $item = new \stdClass();
       $unit_amount  = new \stdClass();
        $amount=new \stdClass();
        $breakdown=new \stdClass();
        $item_total=new \stdClass();
        $purchase_units=new \stdClass();
        $items=array();  
    
    //item.name="Item1";
    //item.description="the best";
    //item.quantity="1";
    //unit_amount.currency_code = "MXN";
    //unit_amount.value="100";
    //item.unit_amount=unit_amount;

        $item_total->currency_code = 'MXN';
        $item_total->value = $totales[0]->total;
        $breakdown->item_total=$item_total;
        $amount->currency_code="MXN";
        $amount->value=$totales[0]->total;
        $amount->breakdown=$breakdown;
        $purchase_units->amount=$amount;
    
        
        foreach($info_carrito_compras as $info_carrito)
         {
             // Crea un ítem en la preferencia
             
              $item->name = $info_carrito->nombre_alimento;
              $item->description = $info_carrito->descripcion;
              $item->quantity =  $info_carrito->cantidad;
              $unit_amount->currency_code="MXN";
              $unit_amount->value=$info_carrito->precio;
              $item->unit_amount=$unit_amount;
              //$item->currency_id = "MXN";
              //$item->unit_price =  $info_carrito->precio;
             
             array_push($items,$item);
              $item = new \stdClass();
         }
        $purchase_units->items=$items;
        
       /*$productos='purchase_units: [
            {
                amount: {
                    currency_code: "EUR",
                    value: "200.00",
                    breakdown: {
                        item_total: {
                            currency_code: "EUR",
                            value: "200.00"
                        }
                    }
                },
                items: [
                    {
                        name: "Item 1",
                        description: "The best item ever",

                        unit_amount: {
                            currency_code: "EUR",
                            value: "100.00"
                        },
                        quantity: "1"
                    },
                    {
                        name: "Item 2",
                        description: "Not bad too",
                       
                        unit_amount: {
                            currency_code: "EUR",
                            value: "50.00"
                        },
                        quantity: "2"
                    }
                ],

            }
        ]';
        /*$productos='[
                        {
                           "nombre":"jose",
                           "apellido":"hurtado",
                            "edad":"26"
                        },
                        {
                            "nombre":"jose",
                            "apellido":"hurtado",
                            "edad":"26"
                        }
                     ]';*/
        
        /*$encabezado= '[
               {
                amount: {
                    currency_code: "MXN",
                    "value": "'.$totales[0]->total.'",
                    breakdown: {
                        item_total: {
                            "currency_code": "MXN", 
                            "value": "'.$totales[0]->total.'"
                        }
                    }
                },
                items:[';
        
        foreach($info_carrito_compras as $carrito_compras)
        {
                    $items='{
                        name: "'.$carrito_compras->nombre_alimento.'",
                        description: "'.$carrito_compras->descripcion.'",

                        unit_amount: {
                            "currency_code": "MXN",
                            "value": "'.$carrito_compras->precio.'"
                        },
                        "quantity": "'.$carrito_compras->cantidad.'"
                    },';
            
            $productos=$productos.$items;
        }
        
        
        $final_item='],';
         $pie= ' }]';
        $productos = substr($productos, 0, -1);
        $paypal=$encabezado.$productos.$final_item.$pie;*/
        //$p=array("a"=>"A","b"=>'B');
        //$a=array("a"=>"A","b"=>'B');
        //$paypal=$p;*/
        //$paypal=$productos;
        
        return $purchase_units;
    }
    
    function pagar_paypal(Request $input)
    {
          $id_usuario=$input['id_usuario'];
        $total=$input['total'];
        $id_direccion=$input['id_direccion'];
        $id_metodo=$input['id_metodo'];
        $fecha=getdate();
        $fecha_completa=$fecha["mday"].$fecha["mon"].$fecha['year'].$fecha['hours'].$fecha['minutes'].$fecha['seconds'];
        //$fecha_hoy=$fecha['year'].'-'.$fecha["mon"].'-'.$fecha["mday"];
        $date = date('Y-m-d');
        $folio=$id_usuario.$fecha_completa;
        $folio_venta=sha1($folio);
        

            $query=DB::insert('INSERT INTO venta (id_venta, id_usuario, id_metodo_pago, costo_envio, total_venta, status_confirmacion_pedido, status_pago_recibido, status_reparticion, status_venta_entrega, fecha_venta, fecha_confirmacion_pedido, fecha_reparticion, fecha_entrega) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',[$folio_venta,$id_usuario,$id_metodo,0,$total,0,1,0,0,$date,$date,null,null]);
            
            $info_carrito_compras=DB::select("select * from carrito_compras inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento where carrito_compras.id_usuario='$id_usuario'");
            
            foreach($info_carrito_compras as $info_carrito)
            {
                 $query2=DB::insert('INSERT INTO detalle_venta (id_venta, id_alimento, cantidad_producto, total) VALUES (?, ?, ?, ?)',[$folio_venta,$info_carrito->id_alimento,$info_carrito->cantidad,$info_carrito->cantidad*$info_carrito->precio]);
            }
            
            $query3=DB::delete("DELETE FROM carrito_compras WHERE carrito_compras.id_usuario='$id_usuario'");  
            
        
    }
}