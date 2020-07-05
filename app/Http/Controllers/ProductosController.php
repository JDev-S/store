<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;
class ProductosController extends Controller
{ 
    function principal_index($pagina=1,$categoria='',$buscar='')
    {       
        $categorias = DB::table('categoria')->get();
        
        $ultimos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.precio,alimentos.fotografia_miniatura from alimentos INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 ORDER by(alimentos.id_alimento) desc LIMIT 8');
        
        $vendidos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria ,alimentos.precio,alimentos.fotografia_miniatura,COUNT(detalle_venta.id_alimento) as vendidos from detalle_venta RIGHT join alimentos on alimentos.id_alimento=detalle_venta.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 GROUP by(alimentos.id_alimento) ORDER by COUNT(detalle_venta.id_alimento) desc LIMIT 8');
        
        return view('/principal/index',compact('categorias','ultimos','vendidos'));  
    }
    
    
    function categoria_producto()
    {
      
        
        $categoria=$_GET['categoria'];
        
        $alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria, alimentos.precio,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_categoria=$categoria ");
        
        return view('/principal/categoria_producto',compact('alimentos','categorias'));
        
    }
    
    function info_producto()
    {
            $id_platillo=$_GET['producto'];
        
            $info=DB::select('select * from alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.id_alimento='.$id_platillo);

            $imagenes=DB::select('SELECT * FROM imagenes_de_muestra WHERE id_alimento= ?', [$id_platillo]);
        
           $categorias = DB::table('categoria')->get();
        
        return view('/principal/detalle_producto',compact('info','imagenes','categorias'));
    }
}
