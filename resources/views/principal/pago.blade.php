@extends('welcome3')
@section('contenido')
<h1>Hola</h1>

@section('scripts')
<script  type="text/javascript">
console.log("Hola ");
console.log(JSON.parse('[{"id_alimento":1,"nombre_alimento":"Carne asada","id_categoria":2,"descripcion":"Carne en su jugo","precio":"200.00","nombre_categoria":"Carnes"},{"id_alimento":2,"nombre_alimento":"Pollo rostizado","id_categoria":2,"descripcion":"Pollo rostizado","precio":"200.00","nombre_categoria":"Carnes"},{"id_alimento":3,"nombre_alimento":"Pastel de  3 chocolate","id_categoria":4,"descripcion":"Pastel de chocolate relleno de chocolate concubertura de chocolate","precio":"200.00","nombre_categoria":"Postres"},{"id_alimento":4,"nombre_alimento":"Pye","id_categoria":4,"descripcion":"pye de queso","fotografia_miniatura":"\/images\/1592495804_Pye","precio":"900.00","nombre_categoria":"Postres"},{"id_alimento":5,"nombre_alimento":"carlota","id_categoria":4,"descripcion":"Carlota de limon","fotografia_miniatura":"\/images\/1592538085_carlota","precio":"200.00","nombre_categoria":"Postres"},{"id_alimento":6,"nombre_alimento":"arrachera","id_categoria":2,"descripcion":"arrachera","fotografia_miniatura":"\/images\/1592611097_arrachera","precio":"200.00","nombre_categoria":"Carnes"},{"id_alimento":7,"nombre_alimento":"Hamburguesa","id_categoria":11,"descripcion":"Hamurguesa de carne de res","fotografia_miniatura":"\/images\/1592974168_Hamburguesa","precio":"90.00","nombre_categoria":"Snacks"},{"id_alimento":8,"nombre_alimento":"cerveza buena","id_categoria":12,"descripcion":"alcohol 30 grados","fotografia_miniatura":"","precio":"40.00","nombre_categoria":"Bebidas"},{"id_alimento":9,"nombre_alimento":"cerveza buena","id_categoria":12,"descripcion":"alcohol 30 grados","fotografia_miniatura":"","precio":"40.00","nombre_categoria":"Bebidas"},{"id_alimento":10,"nombre_alimento":"bistek","id_categoria":2,"descripcion":"rica","fotografia_miniatura":"","precio":"50.00","nombre_categoria":"Carnes"},{"id_alimento":11,"nombre_alimento":"chile negro mmmm","id_categoria":10,"descripcion":"salsa","fotografia_miniatura":"","precio":"50.00","nombre_categoria":"gorditas"},{"id_alimento":12,"nombre_alimento":"delicia ","id_categoria":7,"descripcion":"cake de chocolate","fotografia_miniatura":"","precio":"100.00","nombre_categoria":"pasteles"},{"id_alimento":13,"nombre_alimento":"tapa arterias","id_categoria":2,"descripcion":"pobre collino, lo mataron como puerco","fotografia_miniatura":"","precio":"100000.00","nombre_categoria":"Carnes"},{"id_alimento":14,"nombre_alimento":"churro proteinico con relleno cremoso para JJ","id_categoria":4,"descripcion":"churro con relleno de nata muy cremoso, especial para juan jesus. ultra proteinico y saludable, bajo en calorias","fotografia_miniatura":"","precio":"50.00","nombre_categoria":"Postres"},{"id_alimento":15,"nombre_alimento":"la gordita pasada de gaver","id_categoria":10,"descripcion":"no regresan las libretas y piden hacer las tareas mientras andan \"ocupadas\"","fotografia_miniatura":"","precio":"0.00","nombre_categoria":"gorditas"},{"id_alimento":16,"nombre_alimento":"fruta exotica","id_categoria":11,"descripcion":"delicioso snack nutritivo y muy dulce hecho de papaya, durazno y mel\u00f3n, especielmente para jos\u00e9. Bajo en calor\u00edas y brindan perdida de calorias durante el consumo dependiendo de la duracipn de la comida... puede perderse hasta 1000 cal","fotografia_miniatura":"","precio":"0.00","nombre_categoria":"Snacks"}]'));

   
</script>
@stop
@stop