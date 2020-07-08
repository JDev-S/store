<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MercadoPago\SDK;
use MercadoPago;
use DB;
//use MercadoPago\Http\HttpRequest;
//use MercadoPagoHttp\CurlRequest;

//require_once 'vendor/autoload.php';
require '../vendor/autoload.php';
class Mercado_pagoController extends Controller
{
   /*public function pago_por_mercado(Request $input)
    {
      $token = $_REQUEST["token"];
      $payment_method_id = $_REQUEST["payment_method_id"];
      $installments = $_REQUEST["installments"];
      $issuer_id = $_REQUEST["issuer_id"];
     //echo ("2");

      MercadoPago\SDK::setAccessToken("TEST-5732551096808997-070101-c41482ef61c7eda5d806c443eba74b98-317162407");
      //...
      $payment = new MercadoPago\Payment();
      $payment->transaction_amount = 142;
      $payment->token = $token;
      $payment->description = "Lightweight Aluminum Car";
      $payment->installments = $installments;
      $payment->payment_method_id = $payment_method_id;
      $payment->issuer_id = $issuer_id;
      $payment->payer = array(
      "email" => "jjdeveloperswdm@gmail.com"
      );
      // Guarda y postea el pago
      $payment->save();
      //...
      // Imprime el estado del pago
      echo $payment->status;
      //...

    }*/
    
    
    public function pago_por_mercado(Request $input)
    {
        //var_dump($input->all());
        //die();
        $id_usuario=$input['id_usuario'];
        $total=$input['total'];
        $id_direccion=$input['id_direccion'];
        $id_metodo=$input['id_metodo'];
        $fecha=getdate();
        $status_pago=$input['payment_status'];
        $fecha_completa=$fecha["mday"].$fecha["mon"].$fecha['year'].$fecha['hours'].$fecha['minutes'].$fecha['seconds'];
        //$fecha_hoy=$fecha['year'].'-'.$fecha["mon"].'-'.$fecha["mday"];
        $date = date('Y-m-d');
        $folio=$id_usuario.$fecha_completa;
        $folio_venta=sha1($folio);
        
        if($status_pago=="approved")
        {
            $query=DB::insert('INSERT INTO venta (id_venta, id_usuario, id_metodo_pago, costo_envio, total_venta, status_confirmacion_pedido, status_pago_recibido, status_reparticion, status_venta_entrega, fecha_venta, fecha_confirmacion_pedido, fecha_reparticion, fecha_entrega) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',[$folio_venta,$id_usuario,$id_metodo,0,$total,0,1,0,0,$date,$date,null,null]);
            
            $info_carrito_compras=DB::select("select * from carrito_compras inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento where carrito_compras.id_usuario='$id_usuario'");
            
            foreach($info_carrito_compras as $info_carrito)
            {
                 $query2=DB::insert('INSERT INTO detalle_venta (id_venta, id_alimento, cantidad_producto, total) VALUES (?, ?, ?, ?)',[$folio_venta,$info_carrito->id_alimento,$info_carrito->cantidad,$info_carrito->cantidad*$info_carrito->precio]);
            }
            
            $query3=DB::delete("DELETE FROM carrito_compras WHERE carrito_compras.id_usuario='$id_usuario'");  
            
        }
        else
        {
            
        }
      
    }
    
    
     public function Detalle_Mercado_Pago($id_usuario,$id_direccion)
    {   
      MercadoPago\SDK::setAccessToken('TEST-5732551096808997-070101-c41482ef61c7eda5d806c443eba74b98-317162407');
         // Crea un objeto de preferencia
         $preference = new MercadoPago\Preference();
         $item = new MercadoPago\Item();
         $items_array=array();                                                   

         
         $info_usuarios=DB::select("SELECT * FROM usuario where usuario.id_usuario='$id_usuario'");
         $info_direcciones=DB::select("SELECT * FROM direccion where direccion.id_direccion='$id_direccion'");
         $info_carrito_compras=DB::select("select * from carrito_compras inner join alimentos on alimentos.id_alimento=carrito_compras.id_alimento inner join categoria on categoria.id_categoria=alimentos.id_categoria where carrito_compras.id_usuario='$id_usuario'");
         
         $fecha=getdate();
         $fecha_completa=$fecha["mday"].$fecha["mon"].$fecha['year'];

        //Crea un objeto del payer
          $payer = new MercadoPago\Payer();
          $payer->name = $info_usuarios[0]->nombre;
          $payer->surname = $info_usuarios[0]->apellidos;
          $payer->email = $info_usuarios[0]->correo;
          $payer->date_created =$fecha_completa;
          $payer->phone = array(
            "area_code" => "52",
            "number" => $info_usuarios[0]->telefono
          );

          $payer->address = array(
            "street_name" => $info_direcciones[0]->calle,
            "street_number" =>$info_direcciones[0]->numero_exterior,
            "zip_code" => $info_direcciones[0]->cp
          );

         foreach($info_carrito_compras as $info_carrito)
         {
             // Crea un ítem en la preferencia
              $item->id = $info_carrito->id_alimento;
              $item->title = $info_carrito->nombre_alimento;
              $item->description = $info_carrito->descripcion;
              $item->quantity =  $info_carrito->cantidad;;
              $item->currency_id = "MXN";
              $item->unit_price =  $info_carrito->precio;
             
             array_push($items_array,$item);
              $item = new MercadoPago\Item();
         }
         
         //var_dump($items_array);
         //die();         
         
$preference->back_urls = array(
    "success" => "https://www.tu-sitio/success",
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "http://www.tu-sitio/pending"
);
         
        $preference->auto_return = "approved";
        $preference->items = $items_array;
        $preference->payer=$payer;
        $preference->save();
         
         return $preference;
    }
    
    
}
