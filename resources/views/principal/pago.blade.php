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

?>



<form action={{route('pago_por_mercado')}} method="POST">
    {{ csrf_field() }}
  <script
          
          
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
    data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>
