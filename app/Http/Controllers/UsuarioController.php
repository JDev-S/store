<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
class UsuarioController extends Controller
{
    /*PARA ADMINISTRADOR*/	
    
    public function usuarios_mostrar()
	{
		$usuarios=DB::select("select usuario.id_usuario,concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo, rol.id_rol, rol.rol, usuario.nombre, usuario.apellidos, usuario.nombre_usuario, usuario.correo, usuario.contraseña, usuario.telefono, usuario.fecha_nacimiento, usuario.sexo from usuario inner join rol on rol.id_rol = usuario.id_rol where usuario.eliminado!=1");
          
		return view('/Administrador/Usuario/index',compact('usuarios'));
    }

	public function eliminar(Request $input)
    {
		$id_usuario=$input['id_usuario'];
        
		$query=DB::update("update usuario set eliminado='1' WHERE id_usuario='$id_usuario'");
		return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
    
     public function mostrar_insertar()
	{  
		return view('/Administrador/Usuario/insertar');
    }
    
	public function insertar(Request $input)
	{
        /*DATOS DEL USUARIO*/
        $id_rol = $input['id_rol'];
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contraseña = $input['contraseña'];
        $encryptedPassword = bcrypt($contraseña);
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        /*DATOS DE LAS DIRECCIONES*/
        $decidir_direccion=$input['disponible'];
        $persona_recibe=$input['persona_recibe'];
        $colonia=$input['colonia'];
        $calle=$input['calle'];
        $numero_interior=$input['numero_interior'];
        $numero_exterior=$input['numero_exterior'];
        $cp=$input['cp'];
        $referencia=$input['referencia'];
        $calleA=$input['calleA'];
        $calleB=$input['calleB'];
        $tel_casa=$input['tel_casa'];
        $eliminado = 0;
        
       /*Verificar si el correo esta y el nombre de usuario*/
        $usuarios=DB::select("SELECT * FROM usuario where usuario.nombre_usuario='$nombre_usuario'");
        $correos=DB::select("SELECT * FROM usuario where usuario.correo='$correo'");
		if (empty($usuarios) && empty($correos))
		{
                if($id_rol==2)
                {
                        if(empty($decidir_direccion))
                    {
                    //echo 'no se selecciono';
                     $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $encryptedPassword, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
                    return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();

                    }
                    else
                    {
                        //echo ' se selecciono';
                        $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $encryptedPassword, $telefono, $fecha_nacimiento, $sexo, $eliminado]);

                        /*INGRESAR EN DIRECCIONES*/
                        $id_usuarios=DB::select('select id_usuario from usuario order by id_usuario desc limit 1');
                        $id=$id_usuarios[0]->id_usuario;


                        $query2=DB::insert('INSERT INTO direccion (id_direccion, id_usuario, persona_recibe, colonia, calle, numero_interior, numero_exterior, cp, referencia, calleA, calleB, telefono, eliminado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id, $persona_recibe, $colonia, $calle, $numero_interior, $numero_exterior, $cp, $referencia, $calleA, $calleB, $tel_casa, $eliminado]);
                        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();

                    }
                }
                else
                {
                      $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $encryptedPassword, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
                    return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
                }
        }
        else
        {
            return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
        }
        
	}

     public function mostrar_actualizar()
	{
        $id=$_GET['usuario'];
        $usuarios=DB::select("select * from usuario inner join rol on rol.id_rol = usuario.id_rol where usuario.id_usuario=$id");

		return view('/Administrador/Usuario/actualizar',compact('usuarios'));
    }
    
	public function actualizar(Request $input)
	{	    
        var_dump($input->id_usuario);
        
        $id_usuario = $input['id_usuario'];
        $id_rol = $input['id_rol'];
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        $eliminado =$input['eliminado'];    
        $query2=DB::select("SELECT usuario.contraseña FROM usuario WHERE correo='$correo'");
		
		if($query2[0]->contraseña==$contrasenia)
		{
			 $query=DB::update("update usuario set id_rol='$id_rol', nombre='$nombre', apellidos='$apellidos', nombre_usuario='$nombre_usuario', correo='$correo', telefono='$telefono', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo' where id_usuario=?",[$id_usuario]);
            
            return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
		}
		else{
			$encryptedPassword = bcrypt($contrasenia);
			$query=DB::update("update usuario set id_rol='$id_rol', nombre='$nombre', apellidos='$apellidos', nombre_usuario='$nombre_usuario', correo='$correo', contraseña='$encryptedPassword', telefono='$telefono', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo' where id_usuario=?",[$id_usuario]);
			return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
		}
	}
    
    
    
    
    
    
    
    
    
    
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
