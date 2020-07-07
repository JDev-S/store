<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MercadoPago\SDK;
use MercadoPago;
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

       echo 'Hola';
    }
    
    
}
