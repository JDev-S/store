<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;
class ProductosController extends Controller
{ 
    /*ADMINISTRADOR PRODUCTOS*/
        public function alimentos_mostrar()
	{
		$alimentos=DB::select('select alimentos.id_alimento,alimentos.nombre_alimento,alimentos.id_categoria,alimentos.descripcion,alimentos.fotografia_miniatura,alimentos.precio,categoria.nombre_categoria from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado!=1');
		return view('/Administrador/Alimentos/index',compact('alimentos'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_alimento'];
        $eliminado=1;
		$query=DB::update("update alimentos set  eliminado='$eliminado' where id_alimento=?",[$id]);
		return redirect()->action('ProductosController@alimentos_mostrar')->withInput();
	}
    
    
     public function mostrar_insertar()
	{  
		return view('/Administrador/Alimentos/insertar');
    }
    
    
	public function insertar(Request $input)
	{
        var_dump($input->all());
        
        $nombre_alimento = $input['nombre_alimento'];
        $id_categoria = $input['id_categoria'];
        $descripcion = $input['descripcion'];
        $precio = $input['precio'];
        $eliminado = 0;
        $disponible=$input['disponible'];
        
        $files = $input->file('miarchivo');
        $imagen="";
        $i=0;
        $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }

         if($input->hasFile('fotografia_miniatura'))
         {
             $file=$input->file('fotografia_miniatura');
             $name=time().'_'.$nombre_alimento;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        
             $query=DB::insert('insert into alimentos (id_alimento, id_categoria, descripcion, fotografia_miniatura, precio,  eliminado, nombre_alimento,disponible) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_categoria, $descripcion, $foto, $precio, $eliminado, $nombre_alimento, $dispon]);
            /*Ingresar a la tabla imagenes_muestra*/
             $id=DB::select('select id_alimento from alimentos order by id_alimento desc limit 1');
             $id_alimento=$id[0]->id_alimento;
        
        if($input->hasFile('miarchivo'))
        {
              foreach($input->file('miarchivo') as $file)
            {
                $nombre=time()+$i."_".$nombre_alimento;
                $file->move(public_path().'/images/',$nombre);
                $imagen="/images/".$nombre;
                $query2=DB::insert('insert into imagenes_de_muestra (id_imagen_muestra, id_alimento, imagen_muestra) values( ?, ?, ?)', [null, $id_alimento, $imagen]);
                $imagen="";
                 $i++;
            }
           
        }
         return redirect()->action('ProductosController@alimentos_mostrar')->withInput();
      }
	}

      public function mostrar_actualizar()
	{
        $id=$_GET['alimento'];
        $alimentos=DB::select("select * from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.id_alimento=$id");
		return view('/Administrador/Alimentos/actualizar',compact('alimentos'));
    }
    
	public function actualizar(Request $input)
	{	    
        $id_alimento=$input['id_alimento'];
        $id_categoria = $input['id_categoria'];
        $nombre_alimento=$input['nombre_alimento'];
        $descripcion=$input['descripcion'];
        $precio=$input['precio'];
        $eliminado=$input['eliminado'];
        $disponible=$input['disponible'];
        
         $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }
        
        if($input->hasFile('fotografia_miniatura'))
        {
            $file=$input->file('fotografia_miniatura');
            $name=time()."_".$nombre_alimento;
            $file->move(public_path().'/images/',$name);
            $foto="/images/".$name;
            
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', fotografia_miniatura='$foto', precio='$precio', eliminado='$eliminado',  disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('ProductosController@alimentos_mostrar')->withInput();
        }
        else
        {
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', precio='$precio', eliminado='$eliminado' , disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('ProductosController@alimentos_mostrar')->withInput();
        }
	}
    
    
    /*NO ES DE ADMINISTRADOR*/
    
    function principal_index()
    {       
        $categorias = DB::table('categoria')->get();
        
        $ultimos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.precio,alimentos.fotografia_miniatura from alimentos INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 ORDER by(alimentos.id_alimento) desc LIMIT 8');
        
        $vendidos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria ,alimentos.precio,alimentos.fotografia_miniatura,COUNT(detalle_venta.id_alimento) as vendidos from detalle_venta RIGHT join alimentos on alimentos.id_alimento=detalle_venta.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 GROUP by(alimentos.id_alimento) ORDER by COUNT(detalle_venta.id_alimento) desc LIMIT 8');
        
        return view('/principal/index',compact('categorias','ultimos','vendidos'));  
    }
    
    
    function categoria_producto($buscar='')
    {
      
        $categoria=$_GET['categoria'];
        $categorias = DB::table('categoria')->get();
        if($buscar=='')
        {
        $alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria, alimentos.precio,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_categoria=$categoria ");
        
        return view('/principal/categoria_producto',compact('alimentos','categorias'));
        }
        else
        {
             $alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria, alimentos.precio,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.nombre_alimento like '%$buscar%'");
        
            return view('/principal/categoria_producto',compact('alimentos','categorias'));
        }
        
        
        
    }
    
    function info_producto()
    {
            $id_platillo=$_GET['producto'];
        
            $info=DB::select('select * from alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.id_alimento='.$id_platillo);

            $imagenes=DB::select('SELECT * FROM imagenes_de_muestra WHERE id_alimento= ?', [$id_platillo]);
        
           $categorias = DB::table('categoria')->get();
        
            $especificaciones=DB::select('select * from ingredientes inner join ingrediente_alimento on ingredientes.id_ingrediente=ingrediente_alimento.id_ingrediente where ingrediente_alimento.id_alimento='.$id_platillo);
        
        return view('/principal/detalle_producto',compact('info','imagenes','categorias','especificaciones'));
    }
}
