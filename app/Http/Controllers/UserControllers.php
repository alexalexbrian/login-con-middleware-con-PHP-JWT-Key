<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; //Tiene que ir primero Auth despues request
use Illuminate\Http\Request;
class UserControllers extends Controller
{
    //
    public function __construct(){

        $this->middleware("verificacion");
    }

   


            //Ruta privada, despues de iniciar sesion
            public function login_table(){



                $user = Auth::user();
                return view("adm.datos", compact('user'));


            }


            //Metodo para Cerrar sesión
            public function loginOut_1(Request $request){

                //cerramos la sessión
                Auth::logout();
                //Destruir la sesion personalizada usando el Request $request  y tambien lo usamos para redireccionar al usuario
                $request->session()->forget('user_metadata_id');
                $request->session()->forget('perfil_id');
                $request->session()->forget('perfil');
                $request->session()->flash('css','success');
                $request->session()->flash('mensaje','Your account has been successfully closed');
                return redirect()->route('acceso_login'); //Enviamos el mensaje flash a la vista FLASH 3
                
            }











}
