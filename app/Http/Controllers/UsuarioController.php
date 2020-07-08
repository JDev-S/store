<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
class UsuarioController extends Controller
{
    	public function registro(Request $input)
	{
           
            
        /*DATOS DEL USUARIO*/
        $id_rol = 2;
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contraseña = $input['contraseña'];
        $encryptedPassword = bcrypt($contraseña);
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        
        $eliminado = 0;
        
       /*Verificar si el correo esta y el nombre de usuario*/
        $usuarios=DB::select("SELECT * FROM usuario where usuario.nombre_usuario='$nombre_usuario'");
        $correos=DB::select("SELECT * FROM usuario where usuario.correo='$correo'");

		if (empty($usuarios) && empty($correos))
		{

            $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $encryptedPassword, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
            return redirect()->action('UsuarioController@mostrar_login')->withInput();
                
        }
        else
        {
            return redirect()->back();
        }
        
	}
    
    
    public function mostrar_login()
    {
        return view('/principal/iniciar_sesion');
    }
    
    public function login(Request $input)
    {
        $correo = $input['correo'];
        $password = $input['password'];
        
        $query = "select * from usuario where usuario.correo='$correo'";
        $data=DB::select($query);
        $cantidad= sizeof($data);

        if($cantidad>0)
        {
            $query2 = "select usuario.contraseña,usuario.nombre_usuario from usuario where correo='$correo'";
            $data2=DB::select($query2);

            
            if (Hash::check($password, $data2[0]->contraseña)) {
            //if($password==$data2[0]->contraseña){
           //echo 'essta registrado';
            //Session::put('nombre_usuario',$nombre_usuario);
            //Session::put('contraseña',$contrasenia);
            //$correo=Session::get('nombre_usuario');
            //$pass=Session::get('contraseña');
            
           //return redirect('/Admin_clientes');
                echo 'Entro';
                
            }else{
                //return redirect('/iniciar_sesion');
                echo 'No es la misma contraseña del usuario';
            }   
        }
        else{
            //return redirect('/iniciar_sesion');
            echo 'No existe ese usuario';
        }
    }
    
    
    public function obtener_contrasenia(Request $input)
	{
        $email = $input['correo'];
        $query = "select * from usuario where correo='$email'";
        $data=DB::select($query);
       
        $cantidad= sizeof($data);
      
        if($cantidad>0)
        {
            $nombre=$data[0]->nombre;
            $length=10;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, $charactersLength - 1)];
                }
            
                $encryptedPassword = bcrypt($password);
                $query2=DB::update("update  usuario set contraseña='$encryptedPassword' where correo=?",[$email]);
               // $this->email($email, $nombre, $password);
                //return redirect('/iniciar_sesion');
              
              
             /*MENSAJE PARA LOS CLIENTES PENDEJOS QUE OLVIDAN LA CONTRASEÑA*/
            $input['password']=$password;
            
        $subject = "Recuperacion de contraseña";
        $for = $input['correo'];
        Mail::send('/principal/correo_obtener',$input->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com","JDev-S");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->action('UsuarioController@mostrar_login')->withInput();
            
            
            
        }
        else{
            return redirect('/recuperar_contrasenia');
        }
    }
    
    public function Logout()
	{
		
		Session::flush();
		return redirect('/');
	}
    
    
}
