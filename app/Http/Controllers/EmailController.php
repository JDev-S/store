<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        /*MENSAJE PARA NOSOTROS*/
        $subject = $request['tema'];
        $for = "juanjesuspadrondiaz@gmail.com";
        Mail::send('/principal/correo_contacto',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect()->back();
    }
}
