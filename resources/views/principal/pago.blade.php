<!--<form  method="POST" action={{route('pago_por_mercado')}}>
                     {{ csrf_field() }}
    
                       <script src="https://www.mercadopago.com.mx/integrations/v1/web-tokenize-checkout.js" data-public-key="TEST-47c3aaa1-c916-4dea-899b-436d6c18669b" data-transaction-amount="100.00">
                        </script>
                        <!--<input type="submit" value="pagar">
</form>-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


<!--<form action={{route('pago_por_mercado')}} method="POST">
    {{ csrf_field() }}
  <script
    src="https://www.mercadopago.com.mx/integrations/v1/web-tokenize-checkout.js"
    data-public-key="TEST-47c3aaa1-c916-4dea-899b-436d6c18669b"
    data-transaction-amount="100.00">
  </script>
</form>-->

<!--<form action={{route('pago_por_mercado')}} method="POST">
    {{ csrf_field() }}
  <script
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
   data-preference-id="${preference.id}">
  </script>
</form>-->
<?php
// SDK de Mercado Pago
require '../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-5732551096808997-070101-c41482ef61c7eda5d806c443eba74b98-317162407');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();


//Crea un objeto del payer
  $payer = new MercadoPago\Payer();
  $payer->name = "Charles";
  $payer->surname = "Luevano";
  $payer->email = "charles@hotmail.com";
  $payer->date_created = "2018-06-02T12:58:41.425-04:00";
  $payer->phone = array(
    "area_code" => "",
    "number" => "949 128 866"
  );
  
  $payer->address = array(
    "street_name" => "Cuesta Miguel Armendáriz",
    "street_number" => 1004,
    "zip_code" => "11020"
  );

// Crea un ítem en la preferencia
  $item = new MercadoPago\Item();
  $item->id = "1234";
  $item->title = "Heavy Duty Plastic Table";
  $item->description = "Table is made of heavy duty white plastic and is 96 inches wide and 29 inches tall";
  $item->category_id = "home";
  $item->quantity = 7;
  $item->currency_id = "MXN";
  $item->unit_price = 75.56;


$preference->back_urls = array(
    "success" => "https://www.tu-sitio/success",
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "http://www.tu-sitio/pending"
);
$preference->auto_return = "approved";

$preference->items = array($item);
$preference->save();
?>



<form action={{route('pago_por_mercado')}} method="POST">
  <script
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
    data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>
