<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar la clase Hash del namespace 
use Illuminate\Support\Facades\Auth;
use App\Models\UserMetadata;
class UserControllers extends Controller
{
    //
    public function __construct(){

        $this->middleware("verificacion");
    }

    //Pagina principal
    public function acceso_login(){

        return view("login.login");

    }


    //Para iniciar sesion 
    public function acceso_login_post(Request $request){

        //Validamos los datos del formulario para iniciar sesión
        $validated = $request->validate([                 
            'correo'=>'required|email:rfc,dns', 
            'password'=>'required|min:6'
        ],[
            'correo.required'=>'correo está vacio',
            'correo.email'=>'correo no es valido',
            'password.required'=>'contraseña esta vacio',
            'password.min'=>'contraseña debe tener al menos 6 caracteres',
        ]);

        //Usamos el metodo authentication de laravel 
        if(Auth::attempt(['email' => $request->input('correo'),'password' => $request->input('password')])){

            //Obtenemos el id del usuario logeado
            //echo Auth::id();
            //exit();
            //echo "ok";

            //Esto es una especie de sesion que te presta laravel
            //Auth::id()

            //Obtenemos los datos del usuario
            $usuario = UserMetadata::where(['users_id'=> Auth::id()])->first();
            //Creamos una session perzonalizada
            //session(['users_metadata_id'=>$usuario->id]);
            //session(['perfil_id'=>$usuario->id]);
            //session(['perfil'=>$usuario->id]);

            session(['users_metadata_id' => $usuario->id]);
            session(['perfil_id' => $usuario->perfil_id]);
            session(['perfil' => $usuario->perfil->nombre]);

            return redirect()->intended('/login/table');
        

        }else{

            echo "The credentials are not valid";
        }

    }


            //Ruta privada, despues de iniciar sesion
            public function login_table(){

                return view("adm.datos");


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
