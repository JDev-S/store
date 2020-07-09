<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Metodo_pagoController extends Controller
{
    public function metodo_pago_mostrar()
	{
		$metodos_de_pago=DB::select('select id_metodo_de_pago, metodo_pago from metodo_de_pago where metodo_de_pago.eliminado = 0');
          
		return view('/Administrador/Metodo_pago/index',compact('metodos_de_pago'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_metodo_de_pago'];
		$query=DB::update("update metodo_de_pago set eliminado=1 where id_metodo_de_pago=?",[$id]);
		return redirect()->action('Metodo_pagoController@metodo_pago_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $metodo_pago = $input['metodo_pago'];
        $eliminado = 0;
        
        $query=DB::insert('insert into metodo_de_pago (id_metodo_de_pago, metodo_pago, eliminado) values ( ?, ?, ?)', [null, $metodo_pago, $eliminado]);
        return redirect()->action('Metodo_pagoController@metodo_pago_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_metodo_de_pago=$input['id_metodo_de_pago'];
        $metodo_pago = $input['metodo_pago'];
        $eliminado=$input['eliminado'];
        
        $query=DB::update("update metodo_de_pago set metodo_pago='$metodo_pago' where id_metodo_de_pago=?",[$id_metodo_de_pago]);
        return redirect()->action('Metodo_pagoController@metodo_pago_mostrar')->withInput();
	}
}
