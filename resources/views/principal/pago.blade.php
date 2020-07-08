
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AXOxIUpdCZugq_EOM5jdRg_stGm_CWGxrYW6VcYYhif4eqqXO0CXjfUErsJ2a3KBBAWwXsg_sziagYnB&currency=EUR"></script>

    <script>
       // var item =  new Array(); 
        var arreglo=[{name:'pastel de chocolate'},{unit_amount:'200.00'},{quantity:'5'},{description:'pastel relleno'}];
        var aux=[{
            amount: {currency_code:'MXN',value: '13'},
            description:"Hola",
            items:[{
              "name":'Pastel',
              //unit_amount:{currency_code:'MXN',value:'1'},
                "currency":'MXN',
              "quantity":'13',
            "price":"3",
            "tax":"0.01"
            },
             
            ]
        }];
        
        //var aux2[]=
        
        
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
 createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [
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
        ]
    });
},


            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
		    console.log(details);
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
    
    
     <!--<script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '13'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
		    console.log(details);
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>-->
</body>